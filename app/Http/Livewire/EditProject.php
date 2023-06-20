<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Project;
use App\Models\Category;
use App\Models\Featurebox;
use App\Models\Featureboxentries;
use App\Models\Manual;

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

    public $manual=[
        'project_id'=>'',
        'title'=>'',
        // 'version'=>'',
        // 'major_changes'=>'',
        'has_document_manual'=>'',
        // 'has_video_manual'=>'',
    ];
   
    public $modaleditmode=false;
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

    public function closemodal(){
       

        $this->togglemodal();
    }
     public function toggleapprovalmodal(){
        
        $this->modalforapproval=!$this->modalforapproval;
    }
    public function togglemodal(){
        
        $this->modaleditmode=!$this->modaleditmode;
    }
    public function openmodal($featurebox)
    {
        // $this->featurebox['id'] = null;
        // $this->featurebox['title'] = "";
        // $this->featurebox['subtitle'] = "";
        // $this->featurebox['icon'] = "";


        $this->featurebox['id'] = $featurebox['id'];
        $this->featurebox['title'] = $featurebox['title'];
        $this->featurebox['subtitle'] = $featurebox['subtitle'];
        $this->featurebox['icon'] = $featurebox['icon'];
        $fbentries =  Featureboxentries::where('featurebox_id', $this->featurebox['id'])->get();
        $this->featurebox['entries'] = $fbentries;

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
        $this->manual=Manual::where('project_id',$this->project['id'])->latest()->first();

       
    }
    public function render()
    {
      
        $categories = Category::all();
        $status= ProjectStatus::all();
        $features=Featurebox::where('project_id',$this->project['id'])->get();    
        
        
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
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Project Submitted to Admin for Approval!'
        ]);
      
        $this->emit('close-banner');
       
        return redirect()->to('/dashboard');


    }

    public $pdf="";

    public function save()
    {
        $this->validate([
            'pdf' => 'required|mimes:pdf|max:2048', // Validate the file type and size
        ]);
        $path = $this->pdf->store('pdfs','public'); // Store the file in the 'pdfs' directory

        // Perform any additional logic with the uploaded file
        // For example, you can save the file path to the database
        $m=new Manual();
        $m->project_id=$this->project['id'];
        $m->title="Offline Manual";
        $m->has_document_manual=$path;
        $m->save();
        $this->manual=$m;
        session()->flash('message', 'Manual uploaded successfully.');

        // Clear the file input field
        $this->pdf = null;
 
       
    }
}
