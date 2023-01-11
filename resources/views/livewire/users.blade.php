<div>

    <div class="flex justify-between">
        <div>
            <h1 class="mb-8 text-gray-500">Users registered under this portal</h1>
        </div>
        <div>
            <x-jet-form-section submit="submit" class="bg-red-100">

                <x-slot name="title">

                </x-slot>

                <x-slot name="description">

                </x-slot>

                <x-slot name="form">
                    <!-- form content -->
                </x-slot>

                <x-slot name="actions">
                    <x-jet-action-message class="mr-3 bg-green-800 text-white" on="added">
                        {{ __('Preferences saved.') }}
                    </x-jet-action-message>

                </x-slot>
            </x-jet-form-section>
        </div>

    </div>

    <div class=" flex justify-between ">

        <div class="border border-zinc-200 w-1/5 rounded-sm">

            <x-jet-input type="text" wire:model.debounce.500ms="searchUser" placeholder="Search..." class="w-full border-0 h-12 rounded-lg">

            </x-jet-input>


        </div>
        <x-jet-button wire:click="$toggle('confirmingUserAddition')" class="h-12 bg-green-600 hover:bg-green-800  focus:border-green-700 focus:ring focus:ring-green-300 active:bg-green-600 "><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">



                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
            New User</x-jet-button>
    </div>


    <br />

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">

                    Name
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                            <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" /></svg></a>
                </div>

            </th>
            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">
                    Email
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">
                    Mobile
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">
                    Employee Code
                    <a href="#"><svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 320 512">
                            <path d="M27.66 224h264.7c24.6 0 36.89-29.78 19.54-47.12l-132.3-136.8c-5.406-5.406-12.47-8.107-19.53-8.107c-7.055 0-14.09 2.701-19.45 8.107L8.119 176.9C-9.229 194.2 3.055 224 27.66 224zM292.3 288H27.66c-24.6 0-36.89 29.77-19.54 47.12l132.5 136.8C145.9 477.3 152.1 480 160 480c7.053 0 14.12-2.703 19.53-8.109l132.3-136.8C329.2 317.8 316.9 288 292.3 288z" /></svg></a>
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">
                    Designation
                </div>
            </th>
            <th scope="col" class="px-6 py-3">
                <div class="flex items-center">
                    Action
                </div>
            </th>




        </thead>
        <tbody>

            @foreach($allusers as $usr)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                <td class="px-6 py-4">{{$usr['name']}}</td>

                <td class="px-6 py-4">{{$usr['email']}}</td>


                <td class="px-6 py-4">{{$usr['mobile']}}</td>


                <td class="px-6 py-4">{{$usr['empcode']}}</td>

                <td class="px-6 py-4">{{$usr['designation']}}</td>

                <td class="px-6 py-4 flex">
                    <x-jet-button class="bg-blue-500 hover:bg-blue-700 mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>


                    </x-jet-button>



                    <x-jet-danger-button>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                        </svg>
                    </x-jet-danger-button>



                </td>



            </tr>
            @endforeach

            @if($allusers->count() ==0)
            <td colspan="6">
                <div class="flex w-full justify-center items-center py-5">
                    <p class="text-gray-400">No record found containing '{{$searchUser}}' ...</p>
                </div>
            </td>

            @endif

        </tbody>
    </table>
    <div class="py-3">
        {{$allusers->links()}}
    </div>

    <x-jet-confirmation-modal wire:model="confirmingUserAddition">

        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-6 w-6 text-green-600" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


            </div>
        </x-slot>

        <x-slot name="title">
            Add User Account
        </x-slot>

        <x-slot name="content">
            <div class="pr-10">
                <h2>These users will be able to use the system as per role specified. Please choose user role carefully.</h2>
            </div>

            <div class="py-5 pr-10">


                <x-jet-validation-errors class="mb-4" />

                <form method="POST">
                    @csrf

                    <div class="w-full flex gap-x-5">
                        <div class="w-full">
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input wire:model="user.name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <div class="w-full">
                            <x-jet-label for="name" value="{{ __('Role') }}" />
                            <select id="role" name="role" class="w-full">
                                @foreach($roles as $role)
                                <option value="{{$role->id}}" {{$role->id==3?'selected':''}}>
                                    {{$role->name}}
                                </option>
                                @endforeach
                            </select>

                        </div>

                    </div>

                    <div class="flex gap-x-5 w-full">

                        <div class="mt-4 w-full">

                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input wire:model="user.email" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />

                        </div>

                        <div class="mt-4 w-full">

                            <x-jet-label for="mobile" value="{{ __('Mobile') }}" />
                            <x-jet-input wire:model="user.mobile" id="mobile" class="block mt-1 w-full" type="text" name="mobile" :value="old('mobile')" required />

                        </div>
                    </div>
                    <div class="flex gap-x-5">

                        <div class="mt-4 w-full">

                            <x-jet-label for="empcode" value="{{ __('Empcode') }}" />
                            <x-jet-input wire:model="user.empcode" id="empcode" class="block mt-1 w-full" type="text" name="empcode" :value="old('empcode')" required />

                        </div>
                        <div class="mt-4 w-full">

                            <x-jet-label for="designation" value="{{ __('Designation') }}" />
                            <x-jet-input wire:model="user.designation" id="designation" class="block mt-1 w-full" type="text" name="designation" :value="old('designation')" required />

                        </div>
                    </div>
                    <div class="flex gap-x-5">

                        <div class="mt-4 w-full">

                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input wire:model="user.password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                        </div>

                        <div class="mt-4 w-full">

                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-jet-input wire:model="user.password_confirmation" id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                        </div>
                    </div>



                </form>
                {{print_r($user)}}


            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingUserAddition')" wire:loading.attr="disabled">
                Close
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="addUser" wire:loading.attr="disabled">
                Add User
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>





</div>
