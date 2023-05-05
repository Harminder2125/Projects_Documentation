<div>

    @canany(['view','create','update','delete'],[App\User::class])
    <div class=" flex justify-between ">

        <div class="border border-purple-100 w-1/5 rounded-sm">

            <x-jet-input type="text" wire:model.debounce.500ms="searchUser" placeholder="Search..." class="w-full border-0 h-12 rounded-lg">

            </x-jet-input>

        </div>
        @can('create',[App\User::class])
        <x-primary-button class="bg-fuchsia-900" wire:click="toggle('confirmingUserAddition')">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
            </svg>
            Add User</x-primary-button>
        @endcan

    </div>


    <br />

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        <thead class="text-xs text-gray-700 uppercase bg-purple-100 dark:bg-gray-700 dark:text-gray-400">
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
                    @can('update',[App\User::class],$usr)

                    <x-primary-button wire:click="openUserForEditing({{$usr['id']}})" class="mr-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>


                    </x-primary-button>

                    @endcan
               
                    @can('delete',[App\User::class],$usr)
                    <x-jet-danger-button wire:click="openUserForDeletion({{$usr['id']}})">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>


                    </x-jet-danger-button>

                    @endcan

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
    <div class="py-3" wire:key="$allusers->id">

        {{$allusers->links()}}
    </div>

    <x-jet-confirmation-modal wire:model="confirmingUserAddition">

        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-fuchsia-900 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


            </div>
        </x-slot>

        <x-slot name="title">
            Add User Account
        </x-slot>
        <x-slot name="subtitle">
            All users will be added as priveleged users.
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
                            <x-input wire:model="user.name" id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <!--
                        <div class="w-full">
                            <x-jet-label for="role" value="{{ __('Role') }}" />
                            <select id="role" name="role" class="w-full border border-fuchsia-200">
                                @foreach($roles as $role)
                                <option value="{{$role->id}}" {{$role->id==3?'selected':''}}>
                                    {{$role->name}}
                                </option>
                                @endforeach
                            </select>

                        </div>-->

                    </div>

                    <div class="flex gap-x-5 w-full">

                        <div class="mt-4 w-full">

                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-input wire:model="user.email" id="email" class="block w-full" type="email" name="email" :value="old('email')" required />

                        </div>

                        <div class="mt-4 w-full">

                            <x-jet-label for="mobile" value="{{ __('Mobile') }}" />
                            <x-input wire:model="user.mobile" id="mobile" class="block w-full" type="text" name="mobile" :value="old('mobile')" required />

                        </div>
                    </div>
                    <div class="flex gap-x-5">

                        <div class="mt-4 w-full">

                            <x-jet-label for="empcode" value="{{ __('Empcode') }}" />
                            <x-input wire:model="user.empcode" id="empcode" class="block w-full" type="text" name="empcode" :value="old('empcode')" required />

                        </div>
                        <div class="mt-4 w-full">

                            <x-jet-label for="designation" value="{{ __('Designation') }}" />
                            <x-input wire:model="user.designation" id="designation" class="block w-full" type="text" name="designation" :value="old('designation')" required />

                        </div>
                    </div>
                    <div class="flex gap-x-5">

                        <div class="mt-4 w-full">

                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-input wire:model="user.password" id="password" class="block w-full" type="password" name="password" required autocomplete="new-password" />

                        </div>

                        <div class="mt-4 w-full">

                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-input wire:model="user.password_confirmation" id="password_confirmation" class="block w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                        </div>
                    </div>



                </form>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="toggle('confirmingUserAddition')" wire:loading.attr="disabled">
                Close
            </x-jet-secondary-button>

            <x-primary-button class="ml-2" wire:click="addUser" wire:loading.attr="disabled">
                Add User
            </x-primary-button>
        </x-slot>
    </x-jet-confirmation-modal>


    <x-jet-confirmation-modal wire:model="confirmingUserEditing">

        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-6 w-6 text-green-600" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


            </div>
        </x-slot>
        <x-slot name="subtitle">
            All users will be added as priveleged users.
        </x-slot>

        <x-slot name="title">
            Update User Details
        </x-slot>

        <x-slot name="content">

            <div>

                <x-jet-validation-errors class="mb-4" />
                <form method="POST">
                    @csrf
                    <div class="w-full flex gap-x-5">
                        <div class="w-full">
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-input wire:model="edituser.name" value="{{$user['name']}}" id="upd_name" class="block w-full" type="text" name="upd_name" required autofocus autocomplete="name" />
                        </div>
                        <!-- <div class="w-full">
                            <x-jet-label for="role" value="{{ __('Role') }}" />
                            <select id="role" name="role" class="w-full border">
                                @foreach($roles as $role)
                                <option value="{{$role->id}}" {{$role->id==$edituser['role_id']?'selected':''}}>
                                    {{$role->name}}
                                </option>
                                @endforeach
                            </select>

                        </div>-->

                    </div>

                    <div class="flex gap-x-5 w-full">

                        <div class="mt-4 w-full">

                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-input wire:model="edituser.email" id="upd_email" class="block w-full" type="email" name="upd_email" :value="old('email')" required />




                        </div>

                        <div class="mt-4 w-full">

                            <x-jet-label for="mobile" value="{{ __('Mobile') }}" />
                            <x-input wire:model="edituser.mobile" id="upd_mobile" class="block w-full" type="text" name="upd_mobile" required />




                        </div>
                    </div>
                    <div class="flex gap-x-5">

                        <div class="mt-4 w-full">

                            <x-jet-label for="empcode" value="{{ __('Empcode') }}" />
                            <x-input wire:model="edituser.empcode" id="upd_empcode" class="block w-full" type="text" name="upd_empcode" :value="old('empcode')" required />




                        </div>
                        <div class="mt-4 w-full">

                            <x-jet-label for="designation" value="{{ __('Designation') }}" />
                            <x-input wire:model="edituser.designation" id="upd_designation" class="block w-full" type="text" name="upd_designation" :value="old('designation')" required />




                        </div>
                    </div>

                </form>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingUserEditing')" wire:loading.attr="disabled">
                Close
            </x-jet-secondary-button>

            <x-primary-button class="ml-2" wire:click="updateUser({{$edituser['id']}})" wire:loading.attr="disabled">
                Update User Details
            </x-primary-button>
        </x-slot>
    </x-jet-confirmation-modal>




    <x-jet-confirmation-modal wire:model="confirmingUserDeletion">

        <x-slot name="icon">
            <div class="mx-auto shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-800 sm:mx-0 sm:h-10 sm:w-10">
                <svg class="h-5 w-5 text-white" stroke-width="1.5" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>


            </div>
        </x-slot>

        <x-slot name="title">
            <span class="text-red-800">Delete User?</span>
        </x-slot>
        <x-slot name="subtitle">
            Permanently remove this user from your account.
        </x-slot>
        <x-slot name="content">

            <div class="w-full flex justify-center items-center p-10">
                <!--  <table class="w-1/2 border-separate mt-2">
                <tr><th class="w-1/2 bg-red-500 text-red-50  p-2">Name</th><td class="w-1/2 text-red-500 bg-red-50 p-2 line-through">{{$edituser['name']}}</td></tr>
                <tr><th class="w-1/2 bg-red-500 text-red-50  p-2">Email</th><td class="w-1/2 text-red-500 bg-red-50 p-2 line-through">{{$edituser['email']}}</td></tr>
                <tr><th class="w-1/2 bg-red-500 text-red-50  p-2">Mobile</th><td class="w-1/2 text-red-500 bg-red-50 p-2 line-through">{{$edituser['mobile']}}</td></tr>
                <tr><th class="w-1/2 bg-red-500 text-red-50  p-2">Employee Code</th><td class="w-1/2 text-red-500 bg-red-50 p-2 line-through">{{$edituser['empcode']}}</td></tr>
                <tr><th class="w-1/2 bg-red-500 text-red-50  p-2">Designation</th><td class="w-1/2 text-red-500 bg-red-50 p-2 line-through">{{$edituser['designation']}}</td></tr>

            </table>-->
                <div class="p-4 border border-gray-500 border-dashed rounded-lg">
                    <h1><span class="text-lg uppercase text-gray-600 font-semibold">Are you sure you want to delete?</span><br />{{$edituser['name']}}<br />employee code - {{$edituser['empcode']}}<br />designation - {{$edituser['designation']}}<br /> email - {{$edituser['email']}}<br />mobile - {{$edituser['mobile']}}.</h1>
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                Cancel
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="deleteUser({{$edituser['id']}})" wire:loading.attr="disabled">
                delete it !
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>
  @endcanany
</div>
