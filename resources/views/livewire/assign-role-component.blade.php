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
       <div class="flex-1 ">
           <div class="flex justify-center ">
                <div class="w-2/5 relative center bg-pink-100 p-4 rounded-lg shadow-lg flex-col items-center justify-center  mb-8">
                        <span class="bg-pink-800 absolute top-2 right-1 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-pink-800 dark:text-gray-300">
                        Admin</span>
                        <span class=" border border-pink-400 absolute top-2 left-2 text-pink-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-pink-800 dark:text-gray-300">
                        1111</span>
                        <div class="w-full flex justify-center">
                        <div class="h-24 w-24 font-bold text-white rounded-2xl bg-pink-800 flex justify-center items-center">
                        VV
                        </div>
                        </div>
                    
                        <div class="py-3 text-center text-xl font-bold">
                        Vivek Verma (1111)
                        </div>
                        <div class="py-0 text-center">
                        Scientist G (DDG)
                        </div>
                        <div class="py-1 text-center text-sm">
                        Emp code : 1200 | vivek.verma@nic.in
                        </div>
                        <div class="py-1 text-center">
                        
                        </div>

                    

                </div>
           </div>
            <div class="grid grid-cols-3 gap-4">
                <div class=" relative center bg-green-100 p-4 rounded-lg shadow-lg flex-col items-center justify-center  mb-8">
                        <span class="bg-green-800 absolute top-2 right-1 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded">
                        HOD</span>
                        <div class="w-full flex justify-center">
                        <div class="h-24 w-24 font-bold text-white rounded-full bg-green-800 flex justify-center items-center">
                        SS
                        </div>
                        </div>
                    
                        <div class="py-3 text-center text-xl font-bold">
                        Sarbit Singh Duggal
                        </div>
                        <div class="py-0 text-center">
                        Scientist F (STD)
                        </div>
                        <div class="py-1 text-center text-sm">
                        Emp code : 1200 | ssduggal@nic.in
                        </div>
                        <div class="py-1 text-center">
                        
                        </div>

                    

                </div>
                <div class=" relative center bg-green-100 p-4 rounded-lg shadow-lg flex-col items-center justify-center  mb-8">
                        <span class="bg-green-800 absolute top-2 right-1 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded">
                        HOD</span>
                        <div class="w-full flex justify-center">
                        <div class="h-24 w-24 font-bold text-white rounded-full bg-green-800 flex justify-center items-center">
                        M K
                        </div>
                        </div>
                    
                        <div class="py-3 text-center text-xl font-bold">
                        Mukesh Kumar Ralli
                        </div>
                        <div class="py-0 text-center">
                        Scientist F (STD)
                        </div>
                        <div class="py-1 text-center text-sm">
                        Emp code : 1200 | ssduggal@nic.in
                        </div>
                        <div class="py-1 text-center">
                        
                        </div>

                    

                </div>
                 <div class="  relative center bg-green-100 p-4 rounded-lg shadow-lg flex-col items-center justify-center  mb-8">
                        <span class="bg-green-800 absolute top-2 right-1 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded">
                        HOD</span>
                        <div class="w-full flex justify-center">
                        <div class="h-24 w-24 font-bold text-white rounded-full bg-green-800 flex justify-center items-center">
                        A S
                        </div>
                        </div>
                    
                        <div class="py-3 text-center text-xl font-bold">
                        Amolak Singh Kalsi
                        </div>
                        <div class="py-0 text-center">
                        Scientist F (STD)
                        </div>
                        <div class="py-1 text-center text-sm">
                        Emp code : 1200 | ssduggal@nic.in
                        </div>
                        <div class="py-1 text-center">
                        
                        </div>

                    

                </div>
                <div class=" relative center bg-green-100 p-4 rounded-lg shadow-lg flex-col items-center justify-center  mb-8">
                        <span class="bg-green-800 absolute top-2 right-1 text-white text-xs font-medium mr-2 px-2.5 py-0.5 rounded">
                        HOD</span>
                        <div class="w-full flex justify-center">
                        <div class="h-24 w-24 font-bold text-white rounded-full bg-green-800 flex justify-center items-center">
                        S K
                        </div>
                        </div>
                    
                        <div class="py-3 text-center text-xl font-bold">
                        Surinder Kumar Banga <span class="text-sm font-normal">(1265)</span>
                        </div>
                        <div class="py-0 text-center">
                        Scientist F (STD)
                        </div>
                        <div class="py-1 text-center text-sm">
                        ssduggal@nic.in
                        </div>
                        <div class="py-1 text-center">
                        
                        </div>

                    

                </div>
                
                
           </div>
        </div>
        <div>


           {{-- <div class="w-full bg-zinc-100 p-4 rounded-lg shadow-lg flex">
               <div class="h-24 w-24 rounded-full bg-pink-800 flex justify-center items-center">
                   VV
               </div>
               <div wire:key="{{$user['id']}}">
                   Name: {{$user['name']}}

               </div>

           </div> --}}



       </div>
   </div>
