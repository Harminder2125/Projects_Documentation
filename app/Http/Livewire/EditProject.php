<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Project;
use App\Models\Category;
use App\Models\Featurebox;
use App\Models\Featureboxentries;
use App\Models\Manual;
use App\Models\Remark;
use App\Models\EventsVisibleto;
use App\Models\Events;
use App\Models\User;

use App\Models\ProjectStatus;
use Illuminate\Support\Facades\Validator;

use Auth;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class EditProject extends Component
{
        use WithFileUploads;
        use AuthorizesRequests;

        public $project = [
        "id"=>"",
        "title"=>"",
        "abbreviation"=>"",
        "category"=>0,
        "description"=>"",
        "live_url"=>"",
        "launch_date"=>"",
        "launched_by"=>"",
        "logo_image"=>"",
        "banner_image"=>"",
        "edit_logo_image"=>"",
        "edit_banner_image"=>"",
        "publish_status"=>0
    ];
    public $manuals = [];
    public $manualToDelete = [
        "id"=>"",
        "title"=>"",
        "version"=>"",
        "major_changes"=>"",
        "has_document_manual"=>""
    ];
    public $editmanual=[
        'project_id'=>'',
        'title'=>'',
        'version'=>'',
        'major_changes'=>'',
        'has_document_manual'=>'',
       
        // 'has_video_manual'=>'',
    ];
    public $pdf = "";
   
    public $modaleditmode=false;
    public $modaleditmanual=false;
    public $manualdeletionmodal = false;

    public $modalforapproval = false;
    public $featurebox = [
        "id"=>null,
        "title"=>"",
        "subtitle"=>"",
        "icon"=>"",
        "entries"=>[]
    ];
    public $featureboxdata =[

        "featurebox_id"=>null,
        "title"=>"",
        "description"=>""
    ];
    public function addFeatureData()
    {
        $this->featureboxdata['featurebox_id'] = $this->featurebox['id'];
        Validator::make($this->featureboxdata, [
            'title' => ['required', 'string', ],
            'description' => ['required', 'string'],
            'featurebox_id' => ['required','numeric'],
        ])->validate();
        
        $fbentry = [];
        $fbentry['title'] = $this->featureboxdata['title'];
        $fbentry['description'] = $this->featureboxdata['description'];
        $fbentry['featurebox_id'] = $this->featureboxdata['featurebox_id'];
        $fbentry['position'] = 0;
        array_push($this->featurebox['entries'], $fbentry);
        $this->featureboxdata['title']="";
        $this->featureboxdata['description']="";
    }

    public function addProjectManual()
    {
         $this->editmanual['project_id'] = $this->project['id'];
        // $this->featureboxdata['featurebox_id'] = $this->featurebox['id'];
        Validator::make($this->editmanual, [
            'project_id' => ['required' ],
            'title' => ['required', 'string'],
            'version' => ['required'],
            // 'pdf' => ['required'],
            
        ])->validate();
        $this->validate([
            'pdf' => 'required|mimes:pdf|max:2048', // Validate the file type and size
        ]);
        $m=new Manual();
        $m->project_id=$this->editmanual['project_id'];
        $m->title=$this->editmanual['title'];
        $m->version=$this->editmanual['version'];
        $m->major_changes=$this->editmanual['major_changes'];
        $unique = time();
        if($this->pdf!="")
        {
            $path =  $this->pdf->storeAs('pdf/projects/manuals',$this->project['abbreviation'].'_'.$unique.'.pdf','public');
            $m->has_document_manual = $path;
        }       
      
        $m->save();
        $this->togglemanualmodal();
        
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'New Manual Successfully added!'
        ]);
      
        $this->emit('close-banner');
       

        // Clear the file input field
        $this->pdf = "";
        $this->editmanual['project_id'] = "";
        $this->editmanual['title'] = "";
        $this->editmanual['version'] = "";
        $this->editmanual['major_changes'] = "";

        
        

    }
    public function toggleManualDeletion()
    {
        $this->manualdeletionmodal = !$this->manualdeletionmodal;
    }
    public function confirmManualDeletion($manual)
    {
       
        $this->manualToDelete['id'] = $manual['id'];
        $this->manualToDelete['title'] = $manual['title'];
        $this->manualToDelete['version'] = $manual['version'];
        $this->manualToDelete['major_changes'] = $manual['major_changes'];
        $this->manualToDelete['has_document_manual'] = $manual['has_document_manual'];


        $this->toggleManualDeletion();
    }
    public function saveFeatureBoxEntries()
    {
        Featureboxentries::where('featurebox_id',$this->featurebox['id'])->delete();
        foreach ($this->featurebox['entries'] as $fbe)
        {
            $fb = new Featureboxentries();
            $fb->title = $fbe['title'];
            $fb->featurebox_id = $fbe['featurebox_id'];
            $fb->description = $fbe['description'];
            $fb->position = $fbe['position'];
            $fb->save();
        }
        $this->closemodal();
    }
    public function removeEntry($index)
    {
        unset($this->featurebox['entries'][$index]);
    }
    public function removeManualEntry($index)
    {
        Manual::find($index)->delete();
        $this->toggleManualDeletion();
        $this->togglemanualmodal();
        $this->manualToDelete['id'] = "";
        $this->manualToDelete['title'] = "";
        $this->manualToDelete['major_changes'] = "";
        $this->manualToDelete['has_document_manual'] = "";

        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Manual deleted Successfully!'
        ]);
      
        $this->emit('close-banner');
    }


    public function closemodal(){
       

        $this->togglemodal();
    }
     public function toggleapprovalmodal(){
        
        $this->modalforapproval=!$this->modalforapproval;
    }
    public function togglemanualmodal(){
        
        $this->modaleditmanual=!$this->modaleditmanual;
    }
    public function togglemodal(){
        
        $this->modaleditmode=!$this->modaleditmode;
    }
    public function getFeatureBoxData($featurebox)
    {
        $this->featurebox['id'] = $featurebox['id'];
        $this->featurebox['title'] = $featurebox['title'];
        $this->featurebox['subtitle'] = $featurebox['subtitle'];
        $this->featurebox['icon'] = $featurebox['icon'];
        $fbentries =  Featureboxentries::where('featurebox_id', $this->featurebox['id'])->get();
        $this->featurebox['entries'] = $fbentries;
    }
    public function openmanualmodal($featurebox)
    {
   
        $this->getFeatureBoxData($featurebox);
        $this->togglemanualmodal();
    }
    public function openmodal($featurebox)
    {
        $this->getFeatureBoxData($featurebox);
        $this->togglemodal();
    }

    public function mount($id)
    {
        $project = Project::find($id);
        
        
        
        if($project)
        {
            $this->project['id'] = $project->id;
            $this->project['title'] = $project->title;
            $this->project['abbreviation'] = $project->abbreviation;
            $this->project['category'] = $project->category;
            $this->project['description'] = $project->description;
            $this->project['live_url'] = $project->live_url;
            $this->project['launch_date'] = date("Y-m-d", strtotime($project->launch_date));
            $this->project['launched_by'] = $project->launched_by;
            $this->project['logo_image'] = $project->logo_image;
            $this->project['banner_image'] = $project->banner_image;
            $this->project['publish_status'] = $project->publish_status;
        }
        //

       
    }

    public $remarksdata=[];
    public function render()
    {
      
        $categories = Category::all();
        $status= ProjectStatus::all();
        $features=Featurebox::where('project_id',$this->project['id'])->get();    
        $this->manuals=Manual::where('project_id',$this->project['id'])->get();
        $this->remarksdata=Remark::where('project_id',$this->project['id'])->get();
        return view('livewire.admin.edit-project',['categories'=>$categories,'statuslist'=>$status,
        'featureboxes'=>$features,
        
    ]);
    }
    public function update()
    {
        $project = Project::find($this->project['id']);
        $this->authorize('update',$project);//policy for project update
        $project->title=$this->project['title'];
        $project->abbreviation=$this->project['abbreviation'];
        $project->category=$this->project['category'];
        $project->description = $this->project['description'];
        $project->live_url = $this->project['live_url'];
        $project->launch_date = $this->project['launch_date'];
        $project->launched_by = $this->project['launched_by'];
        // $project->publish_status = $this->project['publish_status'];
        $lastId = $this->project['id'];
       
        if($this->project['edit_logo_image']!="")
        {
           $path = $this->project['edit_logo_image']->storeAs('images/projects/'.$project->abbreviation.'_'.$lastId, 'logo_'.$lastId.'.png','public');
           $project->logo_image = $path;
          
            
        }
        if($this->project['edit_banner_image']!="")
        {
            $path =  $this->project['edit_banner_image']->storeAs('images/projects/'.$project->abbreviation.'_'.$lastId, 'banner_'.$lastId.'.png','public');
             $project->banner_image = $path;
        }       



        $project->save();


    }
    public function updateProjectDetails()
    {
        $this->update();
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Project Details updated successfully!'
        ]);
      
        $this->emit('close-banner');
       
        return redirect()->to('/admin/projects');
    }

    public function submitForApproval()
    {
        $this->update();  // Update any changes 
        $project = Project::find($this->project['id']);
        $project->publish_status = 2;
        $project->save();

        
       $event =  new Events();
       $event->payload=Auth::user()->name.'(empcode:'.Auth::user()->empcode.') has submitted  the project with title '.$project->title.' for Approval';
       $event->save();
    $lastevent=$event->id;
       $visibleto=User::where('group_id','=',Auth::user()->group_id)->where('role_id','=',2)->get();
       
       foreach($visibleto as $vis)
       {
        $EventsVisibleto=new EventsVisibleto();
        $EventsVisibleto->event_id=$lastevent;
        $EventsVisibleto->user_id=$vis->id;
        $EventsVisibleto->save();
       }

        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Project Submitted to Admin for Approval!'
        ]);
      
        $this->emit('close-banner');
       
        return redirect()->to('/dashboard');


    }

    }
