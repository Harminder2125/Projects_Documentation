<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class Categories extends Component
{
    public $searchCategory;
    public $confirmingCategoryAddition=false,$confirmingCategoryEditing=false,$confirmingCategoryDeletion=false;
    public $category=[
        "name"=>""
    ]; 
    public $editcategory=[
        "id"=>"",
        "name"=>""
    ]; 

    public function render()
    {   $categories=Category::when($this->searchCategory,function($query, $searchCategory){
        return $query->where('name','LIKE',"%$this->searchCategory%");
        })->orderBy('id','DESC')->paginate(5);

        $categories->withPath('/categories');

        return view('livewire.category',[
            'categories'=>$categories,
        ]);
    }
    public function toggle($key){
       
     if($key == 'confirmingCategoryAddition')
     {
        $this->confirmingCategoryAddition = !$this->confirmingCategoryAddition;
     }
    else if($key =='confirmingCategoryEditing')
    {
        $this->confirmingCategoryEditing = !$this->confirmingCategoryEditing;

    }
    else if($key =='confirmingCategoryDeletion')
    {
        $this->confirmingCategoryDeletion = !$this->confirmingCategoryDeletion;
    }
    else
    {

    }
        
    }
    public function addCategory(){
        Validator::make($this->category, [
            'name' => ['required', 'string', 'max:150'],
        ])->validate();
        Category::create($this->category);
        
        $this->toggle('confirmingCategoryAddition');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'New Category added successfully!'
        ]);
      
        $this->emit('close-banner');
    }
    public function editCategory($id){
        $name=Category::find($id)->name;
        $this->editcategory['name']=$name;
        $this->editcategory['id']=$id;
        $this->toggle('confirmingCategoryEditing');

    } 
    public function updateCategory(){
        Validator::make($this->editcategory, [
            'name' => ['required', 'string', 'max:150'],
        ])->validate();
        $category=Category::find($this->editcategory['id']);
        $category->name=$this->editcategory['name'];
        $category->save();
        $this->toggle('confirmingCategoryEditing');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'success',
            'message' => 'Category Details Updated successfully!'
        ]);
      
        $this->emit('close-banner');

    }

    public function deleteCategory($id){
        $name=Category::find($id)->name;
        $this->editcategory['name']=$name;
        $this->editcategory['id']=$id;
        $this->toggle('confirmingCategoryDeletion');
    }
    public function delete(){

        $category=Category::find($this->editcategory['id']);
        $category->delete();
        $this->toggle('confirmingCategoryDeletion');
        $this->dispatchBrowserEvent('banner-message', [
            'style' => 'danger',
            'message' => 'Category Details Deleted successfully!'
        ]);
      
        $this->emit('close-banner');

    }
    
}
