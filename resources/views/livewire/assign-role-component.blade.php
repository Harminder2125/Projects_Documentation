   <div class="flex mt-4">
       <div class="flex-1">
           <table class="border-separate">


               <thead class="bg-gray-600 text-white">
                   <th class="p-2">Name</th>
                   <th class="p-2">email</th>

                   <th class="p-2">designation</th>

                   <th class="p-2">empcode</th>
                   <th class="p-2">Action</th>
               </thead>
               <tbody>
                   @foreach($users as $user)
                   <tr class="odd:bg-gray-100">

                       <td class="p-2">{{$user->name}}</td>

                       <td class="p-2">{{$user->email }}</td>

                       <td class="p-2">{{$user->designation}}</td>

                       <td class="p-2">{{$user->empcode}}</td>
                       <td class="p-2">
                           <x-jet-checkbox wire:model="projectHeads" value="{{$user->id}}" wire:change="update({{$user->id}})"></x-jet-checkbox>
                       </td>

                   </tr>
                   @endforeach


               </tbody>
           </table>
           ProjectHeads :{{var_export($projectHeads)}}


       </div>
       <div class="flex-1">

           <div class="w-full bg-zinc-100 p-4 rounded-lg shadow-lg flex mb-8">
               <div class="h-24 w-24 rounded-full bg-pink-800 flex justify-center items-center">
                   VV
               </div>
               <div>
                   Name: VIvek verma

               </div>

           </div>

           @foreach($users as $user)
           @if($user->role_id ==4)
           <div class="w-full bg-zinc-100 p-4 rounded-lg shadow-lg flex">
               <div class="h-24 w-24 rounded-full bg-pink-800 flex justify-center items-center">
                   VV
               </div>
               <div wire:key="{{$user->id}}">
                   Name: {{$user->name}}

               </div>

           </div>

           @endif
           @endforeach
       </div>
   </div>
