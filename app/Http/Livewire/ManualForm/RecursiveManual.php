<?php

namespace App\Http\Livewire\ManualForm;
use App\Models\ManualContent;
use App\Models\Manual;

use Livewire\Component;

class RecursiveManual extends Component
{
    public $manual;
    public $manual_id;
    public $point;
    public $editmode = false;
    
    public $edit = [
        "id"=>"",
        "title"=>"",
        "subtitle"=>"",
        "description"=>"",
    ];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function mount($manual,$point)
    {
        $this->manual=$manual;
        if($manual->first())
        {
            $this->manual_id =  $manual->first()->manual_id;
        }
        
        $this->point=$point;
       
        $this->resetEditArray();



      
             

    }

    public function toggle($key)
    {
        if($key =='editmode')
        {
            $this->editmode = !$this->editmode;
        }
    }

    public function refreshManual()
    {
        $this->manual = ManualContent::where('manual_id',$this->manual_id)->get();
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
       
        return view('livewire.manual-form.recursive-manual');
    }

    public function resetEditArray()
    {
        if($this->manual->first())
        {
        $this->edit['id'] = $this->manual->first()->id;
        $this->edit['title'] = $this->manual->first()->title;
        $this->edit['subtitle'] = $this->manual->first()->subtitle;
        $this->edit['description'] = $this->manual->first()->description;
        }

    }

    public function cancelUpdate()
    {
        $this->toggle('editmode');
    }
    public function updateContent($id)
    {
       
        $content =  ManualContent::find($id);
        $content->title = $this->edit['title'];
        $content->subtitle = $this->edit['subtitle'];
        $content->description = $this->edit['description'];
        $content->save();
        $this->refreshManual();
        $this->toggle('editmode');

    }
}
