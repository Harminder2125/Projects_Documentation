<div>
    <h1>This is livewire User component</h1>
    <h1>Search</h1><br />
    <div class="border border-gray-200">
        <x-jet-input type="text" wire:model.debounce.500ms="searchUser" placeholder="Start typing User Name..." class="w-full border-0 h-12">

        </x-jet-input>
        {{$searchUser}}
    </div>


    <br />

    <table>
        <thead>
            <th>User name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Employee Code</th>
            <th>Designation</th>
            <th></th>
        </thead>
        <tbody>
            @foreach($allusers as $user)
            <tr>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>

                <td>{{$user['mobile']}}</td>

                <td>{{$user['empcode']}}</td>
                <td>{{$user['designation']}}</td>




            </tr>
            @endforeach

        </tbody>
    </table>
    {{$allusers->links()}}

</div>
