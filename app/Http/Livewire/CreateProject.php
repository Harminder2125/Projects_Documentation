<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Division;
use App\Models\Category;
use App\Models\Project;
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
        "division_id"=>"",
        "publish_status"=>"UNPUBLISHED"
    ];
    
    public function render()
    {
        $categories = Category::all();
       
        return view('livewire.create-project',[
            'categories'=>$categories,
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
           
        
        $this->project['division_id'] = Auth::user()->group_id;

        
        Project::create($this->project);
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
