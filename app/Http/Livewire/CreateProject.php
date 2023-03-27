<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Division;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectStatus;

use Auth;

class CreateProject extends Component
{
    use WithFileUploads;
    public $project = [
        "title" =>"",
        "abbreviation"=>"",
        "category"=>"",
        "description"=>"",
        "live_url"=>"",
        "launch_date"=>"",
        "launched_by"=>"",
        "logo_image"=>"",
        "banner_image"=>"",
        "group_id"=>"",
        "publish_status"=>""
    ];
    
    public function render()
    {
        $categories = Category::all();
        $status = ProjectStatus::all();
       
        return view('livewire.admin.create-project',[
            'categories'=>$categories,
            'statuslist'=>$status
        ]);
    }
    public function createProject()
    {
        $this->project['group_id'] = Auth::user()->group_id;
        $project = new Project;
        $project->title = $this->project['title'];
        $project->abbreviation=$this->project['abbreviation'];
        $project->category = $this->project['category'];
        $project->description=$this->project['description'];
        $project->live_url=$this->project['live_url'];
        $project->launch_date=$this->project['launch_date'];
        $project->launched_by=$this->project['launched_by'];
        $project->logo_image=$this->project['logo_image'];
        $project->banner_image=$this->project['banner_image'];
        $project->group_id=$this->project['group_id'];
        $project->publish_status=$this->project['publish_status'];
        $project->save();
        // Project::create($project);
        $lastId = $project->id;
       
        if($this->project['logo_image']!="")
        {
           $path = $this->project['logo_image']->storeAs('images/projects/'.$project->abbreviation.'_'.$lastId, 'logo_'.$lastId.'.png','public');
           $project->logo_image = $path;
          
            
        }
        if($this->project['banner_image']!="")
        {
            $path =  $this->project['banner_image']->storeAs('images/projects/'.$project->abbreviation.'_'.$lastId, 'banner_'.$lastId.'.png','public');
             $project->banner_image = $path;
        }
        $project->save();
        $this->resetProject();
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'New Project created successfully!'
        ]);
      
        $this->emit('close-banner');

    }
    public function resetProject()
    {
        $this->project= [
        "title" =>"",
        "abbreviation"=>"",
        "category"=>"",
        "description"=>"",
        "live_url"=>"",
        "launch_date"=>"",
        "launched_by"=>"",
        "logo_image"=>"",
        "banner_image"=>"",
        ];
    }
}
