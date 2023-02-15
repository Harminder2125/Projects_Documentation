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
        if($this->project['logo_image']!="")
        {
           $path = $this->project['logo_image']->storeAs('photos', 'avatar.png','public');
           $this->project['logo_image'] = $path;
          
            
        }
        if($this->project['banner_image']!="")
        {
            $path =  $this->project['banner_image']->storeAs('photos', 'avatar2.png','public');
             $this->project['banner_image'] = $path;
        }
           
        
        $this->project['group_id'] = Auth::user()->group_id;

        
        Project::create($this->project);
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
