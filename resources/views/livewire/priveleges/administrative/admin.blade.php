<div class="bg-gray-50 p-4 rounded-md">
    <div class="flex justify-between">
        <x-sub-title class="font-semibold">Admin Priveleges</x-sub-title>


        @if(!$editmode)
        <a href="javascript:void(0)" class="cursor-pointer" wire:click="toggle('edit')"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 stroke-stone-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
        </a>
        @endif
    </div>
    <div>
        <div class="flex justify-center py-8">
            <x-sub-title>No Privelege granted to this user!</x-sub-title>
        </div>
        @if($editmode)
        <div class="flex justify-end mt-4">
            <x-secondary-button class="mr-1">Save</x-secondary-button>
            <x-secondary-button wire:click="toggle('edit')">Cancel</x-secondary-button>



        </div>
        @endif


    </div>

</div>
