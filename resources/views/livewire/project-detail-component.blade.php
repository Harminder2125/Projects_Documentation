<div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th colspan="2" scope="col" class="px-6 py-3 text-lg">
                        Project Details
                    </th>


                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Title
                    </th>
                    <td class="px-6 py-4 w-3/4">
                        {{$project['title']}}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Abbreviation
                    </th>
                    <td class="px-6 py-4">
                        {{$project['abbreviation']}}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Description
                    </th>
                    <td class="px-6 py-4 text-justify">
                        {{$project['description']}}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Launch Date
                    </th>
                    <td class="px-6 py-4">
                        {{$project['launch_date']}}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Launched By
                    </th>
                    <td class="px-6 py-4">
                        {{$project['launched_by']}}
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Image
                    </th>
                    <td class="px-6 py-4">
                        {{$project['Image']}}
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        State
                    </th>
                    <td class="px-6 py-4">
                        {{$project['group_id']}}
                    </td>
                </tr>
            </tbody>
        </table>

       

    </div>

 <div class=" flex justify-center ">
            <button class="my-4 text-sm p-2 bg-fuchsia-900 text-white rounded-lg shadow">
            Transfer Project</button>
        </div>

</div>
