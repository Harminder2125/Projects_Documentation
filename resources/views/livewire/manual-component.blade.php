<div>

    @php
        use App\Http\Livewire\ManualComponent;
    @endphp
    {{-- The Master doesn't talk, he acts. --}}
   {{--  @php
       $i1=0;
       $i2=0;
   @endphp
    @foreach ( $manual as $m)
    @php
        $i1++;

    @endphp
    <h1 class="bg-red-100"> {{ $i1 }}-{{ $m->title }}</h1>
    <h4 class="bg-gray-100"> {{ $m->subtitle }}</h4>
    
       
       @foreach ( $m->manual_children as $m_child)
         @php
             $i2++;
         @endphp
       <h3 class="px-8 bg-green-100"> {{ $i1 }}.{{ $i2 }}-{{ $m_child->title }}</h3>
       <h5 class="px-8 bg-gray-100"> {{ $m_child->subtitle }}</h5>
       <p class="px-12 "> {{ $m_child->description }}</p>
       @endforeach
       @php
       $i2=0;
   @endphp
    @endforeach --}}

    <x-recursive-manual :manual="$manual" :point=null/>
</div>
