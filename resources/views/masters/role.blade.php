<x-app-layout>

    <x-slot name="title">User Roles</x-slot>
    <x-slot name="subtitle">Types of users</x-slot>


    <div class="flex">
        <div class="w-1/2  mr-4">
            <x-main-title>Administrative Roles</x-main-title>

            <table class=" mt-4 w-full text-sm text-left text-gray-500 bg-stone-300 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-stone-300 dark:bg-gray-700 dark:text-gray-400">
                    <th scope="col" class="px-6 py-3  w-16">
                        <div class="flex items-center">
                            Sr No.
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 w-90">
                        <div class="flex items-center">
                            Role Name
                        </div>
                    </th>

                </thead>
                <tbody>

                    @foreach($administrative as $index => $role)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="px-6 py-4">{{$index+1}}</td>

                        <td class="px-6 py-4">{{$role['name']}}</td>




                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
        <div class="w-1/2 ">
            <x-main-title>Project Based Roles</x-main-title>

            <table class="mt-4 w-full text-sm text-left text-gray-500 bg-stone-300 dark:text-gray-400">

                <thead class="text-xs text-gray-700 uppercase bg-stone-300 dark:bg-gray-700 dark:text-gray-400">
                    <th scope="col" class="px-6 py-3  w-16">
                        <div class="flex items-center">
                            Sr No.
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 w-90">
                        <div class="flex items-center">
                            Role Name
                        </div>
                    </th>

                </thead>
                <tbody>

                    @foreach($projectbased as $index => $role)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                        <td class="px-6 py-4">{{$index+1}}</td>

                        <td class="px-6 py-4">{{$role['name']}}</td>




                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>

    </div>







</x-app-layout>
