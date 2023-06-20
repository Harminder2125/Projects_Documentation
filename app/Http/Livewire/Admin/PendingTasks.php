<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Project;
use App\Models\Featurebox;
use App\Models\Featureboxentries;
use Livewire\WithPagination;
use Auth;

class PendingTasks extends Component
{
    use WithPagination;
    public $modalviewonly = false;
    public $modaldata=[];
    public $featurebox=[];
    public $fetaureboxentries=[];
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
