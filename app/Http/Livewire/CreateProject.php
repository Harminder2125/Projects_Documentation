<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Division;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectStatus;
use App\Models\User;
use App\Models\Featurebox;
use Illuminate\Support\Facades\Validator;
use App\Models\ProjectTeamMembers;


use Auth;

class CreateProject extends Component
{
    use WithFileUploads;
    public $users=[];
    public $advancedmode = false;
    public $confirmingteamassign = false;
    public $projectheadmodal = false;

    public $temp = [
        "project_head_id"=>"",
    ];

    public $extendedfeature=[
        "project_id"=>"",
        "title"=>"",
        "subtitle"=>"",
        "position"=>"",
        "icon"=>""
    ];
   
    public $project = [
        "title" =>"",
        "abbreviation"=>"",
        "category"=>null,
        "description"=>"",
        "live_url"=>"",
        "launch_date"=>null,
        "launched_by"=>"",
        "logo_image"=>"",
        "banner_image"=>"",
        "group_id"=>"",
        "publish_status"=>1, // means unpublished
        "project_head_id"=>"",
        "project_head_name"=>""
    ];
      public function mount(){
        $this->users = User::EndUser()->get();
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
     public function selectProjectHead()
    {

        if($this->temp['project_head_id']==0)
        {
            $this->temp['project_head_id'] = "";
            $this->project['project_head_id'] = "";
            $this->project['project_head_name'] = "";
         $this->toggle('projectheadmodal');

            return;
        }
        $head =  $this->users->where('id',$this->temp['project_head_id'])->first();
         //$this->project_head = $head->name;
        $this->project['project_head_name'] = $head->name;
        $this->project['project_head_id'] = $this->temp['project_head_id'];

         $this->toggle('projectheadmodal');
    }
    public function render()
    {
        $categories = Category::all();
        $status = ProjectStatus::all();

       
        return view('livewire.admin.create-project',[
            'categories'=>$categories,
            'statuslist'=>$status
        ]);
    }
    public function toggleAdvancedMode()
    {
        $this->advancedmode = !$this->advancedmode;
    }
    public function createProject()
    {
         $this->project['group_id'] = Auth::user()->group_id;
        Validator::make($this->project, [
            'title' => ['required', 'string', 'max:255','unique:projects'],
            'abbreviation' => ['required', 'string'],
            'group_id' => ['required'],
            'project_head_id'=>['required']
        ])->validate();
       
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
       
        for($i=0;$i<=6 ; $i++){
            $extendedfeature=new Featurebox;
            $extendedfeature->project_id=$project->id;
            $extendedfeature->position=$i;
            switch($i){
                case 0:
                $extendedfeature->title="Hardware Requirements";
                $extendedfeature->subtitle="Hardware and software requirement for running";
                $extendedfeature->icon="settings";
                break;

                case 1:
                    $extendedfeature->title="PROJECT ONBOARDING";
                    $extendedfeature->subtitle="STEPS TO FOLLOW FOR ONBOARDING";
                    $extendedfeature->icon="a";
                    break;
                
                case 2:
                    $extendedfeature->title="PROJECT PRELIMINARY SETUP";
                    $extendedfeature->subtitle="SETTINGS";
                    $extendedfeature->icon="b";
                    break;
                
                case 3:
                    $extendedfeature->title="STAGING SERVER";
                    $extendedfeature->subtitle="DETAILS OF STAGING SERVER";
                    $extendedfeature->icon="c";
                    break;
                
                case 4:
                    $extendedfeature->title="LIVE SERVER";
                    $extendedfeature->subtitle="DETAILS OF LIVE SERVER";
                    $extendedfeature->icon="d";
                    break;
            
                case 5:
                    $extendedfeature->title="MOBILE APPLICATION";
                    $extendedfeature->subtitle="ANDROID/IOS";
                    $extendedfeature->icon="e";
                    break;
                case 6:
                    $extendedfeature->title="COMPLETE PROJECT MANUAL";
                    $extendedfeature->subtitle="LIST OF ALL THE MANUALS";
                    $extendedfeature->icon="manual";
                    break;
            }
            
            $extendedfeature->save();
        }
       


        // dd($this->project);
        $projectheadid = $this->project['project_head_id'];
        ProjectTeamMembers::create(["project_id"=>$lastId,"user_id"=>$projectheadid,"projectrole_id"=>1]);
       
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
        return redirect('/admin/projects');

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
        "project_head_id"=>"",
        "project_head_name"=>""
        ];
    }
    public function toggle($key)
    {

        if($key == 'confirmingteamassign')
        {
            $this->confirmingteamassign = !$this->confirmingteamassign;
        }
        if($key == 'projectheadmodal')
        {
            $this->projectheadmodal = !$this->projectheadmodal;
        }
    }
}
