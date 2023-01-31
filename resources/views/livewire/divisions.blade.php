<div>

    <div class=" flex justify-between ">

        <div class="border border-purple-100  w-1/5 rounded-sm">

            <x-jet-input type="text" wire:model.debounce.500ms="searchDivision" placeholder="Search..." class="w-full border-0 h-12 rounded-lg">

            </x-jet-input>

        </div>

        <x-primary-button wire:click="toggle('confirmingDivisionAddition')">
            Add Division</x-primary-button>

    </div>
    <br />
    {{-- Stop trying to control. --}}
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 table-auto">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th class="px-6 py-3">Division Name</th>
                <th class="px-6 py-3">Group</th>
                <th class="px-6 py-3">HOD</th>


                <th class="px-6 py-3">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $divisions as $division)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-3">{{ $division->name}}</td>
                <td class="px-6 py-3">{{ $division->group->name}}</td>
                <td class="px-6 py-3">
                    <span class="bg-gray-200 text-gray-500 px-2 rounded-lg">Not Assigned</span>

                </td>


                <td class="px-6 py-3">

                    <x-primary-button class="mr-2" wire:click="editDivision({{$division->id}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </x-primary-button>



                    <x-jet-danger-button wire:click="deleteDivision({{$division->id}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>


                    </x-jet-danger-button>

                </td>
            </tr>
            @endforeach


            @if($divisions->count() ==0)
            <td colspan="6">
                <div class="flex w-full justify-center items-center py-5">
                    <p class="text-gray-400">No record found containing '{{$searchDivision}}' ...</p>
                </div>
            </td>

            @endif

        </tbody>

    </table>
    <div class="py-3" wire:key="$divisions->id">

        {{$divisions->links()}}
    </div>


    <x-jet-confirmation-modal wire:model="confirmingDivisionAddition">

        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-fuchsia-900 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


            </div>
        </x-slot>

        <x-slot name="title">
            Add New Division
        </x-slot>
        <x-slot name="subtitle">
            Divisions in a Group/State
        </x-slot>
        <x-slot name="content">
            <div class=" pb-2">
            </div>

            <div>


                <x-jet-validation-errors class="mb-4" />

                <form method="POST">
                    @csrf

                    <div class="w-full flex gap-x-5">
                        <div class="w-full">
                            <x-jet-label for="name" value="{{ __('Name of division') }}" />
                            <x-input wire:model="division.name" id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="w-full">
                            <x-jet-label for="name" value="{{ __('Name of division') }}" />
                            {{-- <x-input wire:model="division.name" id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" /> --}}

                            <x-select :userlist="$userlist">

                            </x-select>

                        </div>






                    </div>




                </form>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="toggle('confirmingDivisionAddition')" wire:loading.attr="disabled">
                Close
            </x-jet-secondary-button>

            <x-primary-button class="ml-2" wire:click="addDivision" wire:loading.attr="disabled">
                Add Division
            </x-primary-button>
        </x-slot>
    </x-jet-confirmation-modal>

    <x-jet-confirmation-modal wire:model="confirmingDivisionEditing">

        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-fuchsia-900 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


            </div>
        </x-slot>

        <x-slot name="title">
            Edit Division
        </x-slot>
        <x-slot name="subtitle">
            Divisions of Groups/States
        </x-slot>
        <x-slot name="content">
            <div class=" pb-2">
            </div>

            <div>


                <x-jet-validation-errors class="mb-4" />

                <form method="POST">
                    @csrf

                    <div class="w-full flex gap-x-5">
                        <div class="w-full">
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-input wire:model="editdivision.name" id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>




                    </div>




                </form>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="toggle('confirmingDivisionEditing')" wire:loading.attr="disabled">
                Close
            </x-jet-secondary-button>

            <x-primary-button class="ml-2" wire:click="updateDivision" wire:loading.attr="disabled">
                Update Division
            </x-primary-button>
        </x-slot>
    </x-jet-confirmation-modal>

    <x-jet-confirmation-modal wire:model="confirmingDivisionDeletion">

        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


            </div>
        </x-slot>

        <x-slot name="title">
            <span class="text-red-800">Delete Division?</span>
        </x-slot>
        <x-slot name="subtitle">
            Permanently remove this Division from your account.
        </x-slot>
        <x-slot name="content">

            <div class="w-full flex justify-center items-center p-10">

                <div class="p-4 border border-gray-500 border-dashed rounded-lg">
                    <h1><span class="text-lg uppercase text-gray-600 font-semibold">Are you sure you want to delete Division?</span><br />
                        <br />
                        <span class="text-bold bg-orange-600 text-white p-2 rounded mt-2">{{$editdivision['name']}}</span></h1>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingDivisionDeletion')" wire:loading.attr="disabled">
                Cancel
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="delete()" wire:loading.attr="disabled">
                delete it !
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>



</div>
