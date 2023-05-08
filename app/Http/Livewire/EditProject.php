<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Project;
use App\Models\Category;
use App\Models\ProjectStatus;

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
    }
    public function render()
    {
      
        $categories = Category::all();
         $status= ProjectStatus::all();
        return view('livewire.admin.edit-project',['categories'=>$categories,'statuslist'=>$status]);
    }
    public function updateProjectDetails()
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
        $project->publish_status = $this->project['publish_status'];
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
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Project Details updated successfully!'
        ]);
      
        $this->emit('close-banner');
       
        return redirect()->to('/admin/projects');
    }
}
