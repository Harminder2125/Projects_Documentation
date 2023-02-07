<div>
    <!-- Well begun is half done. - Aristotle -->
    @php
    $i=0;
    
@endphp
@foreach ($manual as $m)
@php
    $i++;
    if($point!=null)
    $p=$point.".".$i;
    else 
    $p=$i;
@endphp
<div class="pl-8">
<h1 class="bg-red-100">{{ $p }}-{{ $m->title }}</h1>
<h4 class="bg-green-100">{{ $m->subtitle }}</h4>
<p>{{ $m->description }}</p>

<x-recursive-manual :manual="$m->manual_children" :point="$p"/>
</div>
@endforeach
    
</div>