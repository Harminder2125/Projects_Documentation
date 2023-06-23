<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;
use App\Models\Featurebox;
use App\Models\Featureboxentries;
use App\Models\Remark;
use Livewire\WithPagination;
use App\Models\EventsVisibleto;
use App\Models\Events;
use App\Models\ProjectTeamMembers;
use Illuminate\Support\Facades\Validator;
use Auth;

class PendingTasks extends Component
{
    use WithPagination;
    public $modalviewonly = false;
    public $openpublishmodal = false;
    public $opensendbackmodal = false;
    public $modaldata=null;
    public $featurebox=[];
    public $fetaureboxentries=[];

    public $comments=[
        "remarks"=>''
    ];


    public function render()
    {
        $projects = "";
        if(Auth::user()->isAdmin())
        {
            $projects = Project::whereIn('publish_status', [1, 2])->orderBy('publish_status','DESC')->paginate(5);
            
        }
        else
        {
            $projects = Project::whereIn('publish_status', [1, 2])->whereHas('team',function($query){

                $query->where('user_id',Auth::user()->id)->where('projectrole_id',1);
            })->orderBy('publish_status','ASC')->paginate(5);
        }
       
       $projects->withPath('/dashboard');

        if($this->modaldata==null){
            $this->modaldata=new Project();
            // $this->featurebox=new Featurebox();
            // $this->featureboxentries=new Featureboxentries();
        }
              
        return view('livewire.admin.pending-tasks',['projects'=>$projects,
        'modaldata'=>$this->modaldata,
        // 'fb'=>$this->featurebox,
        // 'fbe'=>$this->featureboxentries
    ]);
    }

    public function publishproject(){

       $data=new Remark();
       $data->project_id=$this->modaldata['id'];
       $data->user_id=Auth::user()->id;
       $data->remarks=$this->comments['remarks'];
       $data->save();
       $prj=Project::find($this->modaldata['id']);
       $prj->publish_status=3;
       $prj->save();

       $this->togglepublishmodal();
       $this->modalviewonly=!$this->modalviewonly;

       $this->dispatchBrowserEvent('banner-message', [
        'style' => 'success',
        'message' => 'Project Published Successfully!'
    ]);
  
    $this->emit('close-banner');

    }

    public function sendback(){

        $data=new Remark();
        $data->project_id=$this->modaldata['id'];
        $data->user_id=Auth::user()->id;
        $data->remarks=$this->comments['remarks'];
        $data->save();
        $prj=Project::find($this->modaldata['id']);
        $prj->publish_status=1;
        $prj->save();

        $proj=Project::find($this->modaldata['id']);
       $event =  new Events();
       $event->payload=Auth::user()->name.'(empcode:'.Auth::user()->empcode.') has sent back   the project with title '.$proj->title;
       $event->save();
    $lastevent=$event->id;
       $visibleto=ProjectTeamMembers::all()->where('project_id','=',$this->modaldata['id'])->where('projectrole_id','=',1);
       
       foreach($visibleto as $vis)
       {
        $EventsVisibleto=new EventsVisibleto();
        $EventsVisibleto->event_id=$lastevent;
        $EventsVisibleto->user_id=$vis->user_id;
        $EventsVisibleto->save();
       }
 
        $this->togglesendbackmodal();
        $this->modalviewonly=!$this->modalviewonly;
 
        $this->dispatchBrowserEvent('banner-message', [
         'style' => 'success',
         'message' => 'Project Send Back to HOD Successfully!'
     ]);
   
     $this->emit('close-banner');
 
     }

    

    public function openpublishmodal()
    {
        
        Validator::make($this->comments, [
            'remarks' => ['required', 'string', ],
                   ])->validate();
        
        $this->togglepublishmodal();
    }
    public function opensendbackmodal()
    {
        
        Validator::make($this->comments, [
            'remarks' => ['required', 'string', ],
                   ])->validate();
        $this->togglesendbackmodal();
       
    }
    public function togglesendbackmodal()
    {
        $this->opensendbackmodal = !$this->opensendbackmodal;
    }

    public function togglepublishmodal()
    {
        $this->openpublishmodal = !$this->openpublishmodal;
    }
     public function getNameInitials($value)
    {
        $words = explode(" ", $value);
        $acronym = "";
        foreach ($words as $w) {
            $acronym .= mb_substr($w, 0, 1);
        }
        return $acronym;
    } 
    public function openModal($prj=null)
    {
        
        if($prj!=null)
        $this->modaldata=Project::find($prj['id']);
        // $this->featurebox=FeatureBox::where('project_id',$prj['id']);
           
        // foreach ($this->featurebox as $fb) {
        //     $this->featureboxentries=FeatureBoxentries::find($fb->featurebox_id);
        // }
        
        $this->modalviewonly=!$this->modalviewonly;
    }
}
