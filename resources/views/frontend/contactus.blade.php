<x-front-layout>
    <div class="flex flex-col bg-stone-100 w-full items-center shadow-2xl">
        <script src="/assets/js/lottieplayer.js"></script>

        {{-- <div class="h-60 bg-gradient-to-r to-fuchsia-900/20 from-red-800/20 via-pink-800/20 w-full flex justify-center items-center">

      
    </div> --}}
        <div class="w-8/12 bg-white min-h-screen ">
            <div class="h-40  w-full flex flex-col justify-center items-center">
                <x-main-heading class="!text-2xl !text-stone-700">Contact Us</x-main-heading>
                <x-sub-heading class="!mb-4">Have a question? Contact us for answers!</x-sub-heading>


                <div class="flex justify-start px-8 w-full">
                    <span class="flex mb-2 ">
                        <a href="/" class="">
                            <x-sub-heading class="hover:!text-fuchsia-800"> Home > </x-sub-heading>

                        </a>
                        <a href="#" class="">
                            <x-sub-heading class="hover:!text-fuchsia-800">&nbsp;Contact Us</x-sub-heading>
                        </a>
                    </span>
                </div>
            </div>

            <div class="p-8">
                <h1 class="uppercase font-semibold">Group/State wise nodal officers</h1>
                <table class="w-full mt-4">
                    <thead class="bg-stone-200 text-stone-600 w-full">

                        <th class="p-2 border-r border-stone-900/10">Sr.</th>
                        <th class="p-2 border-r border-stone-900/10"">Group/State</th>
                        <th class=" p-2">Nodal Officer Detail</th>
                    </thead>
                    <tbody>
                        @foreach($nodals as $key=>$nodal)
                        <tr class="border px-4">
                            <td class="border-r p-2">{{$key+1}}</td>
                            <td class="border-r p-2 uppercase">{{$nodal['group']}}</td>
                            <td class="border-r p-2">
                                <div class="flex flex-col justify-center">
                                    <h1 class="text-lg font-semibold">{{$nodal['Officer']}}</h1>
                                    <h1 class="text-gray-500">{{$nodal['Designation']}}</h1>
                                    <h1 class="mt-4">{{$nodal['contact']}}</h1>
                                    <h1>{{$nodal['email']}}</h1>





                                </div>
                            </td>



                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



        </div>


    </div>


</x-front-layout>
