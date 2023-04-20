<div>


    <!-- Well begun is half done. - Aristotle -->
    @php
    $i=0;

    @endphp
    @foreach ($manual as $m)
    @php
    $i++;
    if($point!=null)
    $p=$point.".".$i;
    else
    $p=$i;
    @endphp
    <div>
      <div
      @if($editmode)
      class="bg-gray-100 p-8 rounded-md mb-4"
      @endif
      >  
        <div class="flex justify-end">
            @if(!$editmode)
            <a href="javascript:void(0)" class="bg-stone-200 p-2 rounded-md hover:bg-stone-300 cursor-pointer" wire:click="toggle('editmode')">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
            </a>
            @endif
        </div>
       
        @if($m->parent_id ==null)
        <div class="flex justify-center">
            @if($editmode)
             <div class="w-full flex flex-col items-start justify-start">
                 <x-jet-label for="cap" value="{{ __('Title') }}" />
                 <x-jet-input placeholder="Enter Title" required wire:model="edit.title" type="text" class="mt-1 w-full" />
                 <x-jet-input-error for="cap" class="mt-2" />
             </div>
            @else
            <h1 class="text-gray-900 uppercase font-inter text-xl font-semibold mb-4">{{ $p }}. {{ $m->title }}</h1>
            @endif
        </div>
        @else
            @if($editmode)
                <div class="w-full flex flex-col items-start justify-start">
                    <x-jet-label for="cap" value="{{ __('Title') }}" />
                    <x-jet-input placeholder="Enter Title" required wire:model="edit.title" type="text" class="mt-1 block w-full" />
                    <x-jet-input-error for="cap" class="mt-2" />
                </div>
            @else
                <h1 class="text-gray-700 uppercase font-inter text-lg font-semibold mb-4">{{ $p }}. {{ $m->title }}</h1>
            @endif
        @endif

        @if($editmode)
             <div class="w-full flex flex-col items-start justify-start">
                 <x-jet-label for="cap" value="{{ __('Sub Title') }}" />
                 <x-jet-input placeholder="Enter Title" required wire:model="edit.subtitle" type="text" class="mt-1 block w-full" />
                 <x-jet-input-error for="cap" class="mt-2" />
             </div>
            @else
        <h4 class="bg-green-100">{{ $m->subtitle }}</h4>


            @endif


             @if($editmode)
             <div class="w-full flex flex-col items-start justify-start">
                 <x-jet-label for="cap" value="{{ __('Description') }}" />
                 <x-jet-input placeholder="Enter Title" required wire:model="edit.description" type="text" class="mt-1 block w-full" />
                 <x-jet-input-error for="cap" class="mt-2" />
             </div>
            @else
        <p class="mb-4">{{ $m->description }}</p>


            @endif

            @if($editmode)
            <div class="flex justify-end mt-4" >
                <x-dark-button class="mr-2" wire:click="updateContent({{$m->id}})">Save</x-dark-button>   
                <x-danger-button wire:click="cancelUpdate()">Cancel</x-dang-button>
            
            </div>
            @endif
        </div>

        @livewire('manual-form.recursive-manual',['manual'=>$m->manual_children,'point'=>$p]);
      
    </div>
    @endforeach

</div>
