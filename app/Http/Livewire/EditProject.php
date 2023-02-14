<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use App\Models\Category;
use App\Models\ProjectStatus;


class EditProject extends Component
{
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
            $this->project['launch_date'] = $project->launch_date;
            $this->project['launched_by'] = $project->launched_by;
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
        $project->title=$this->project['title'];
        $project->abbreviation=$this->project['abbreviation'];
        $project->category=$this->project['category'];
        $project->description = $this->project['description'];
        $project->live_url = $this->project['live_url'];
        $project->launch_date = $this->project['launch_date'];
        $project->launched_by = $this->project['launched_by'];
        $project->publish_status = $this->project['publish_status'];
        $project->save();
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Project Details updated successfully!'
        ]);
      
        $this->emit('close-banner');
       
        return redirect()->to('/admin/projects');
    }
}
