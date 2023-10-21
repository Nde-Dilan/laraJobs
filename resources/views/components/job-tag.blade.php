@props(['tagsCsv'])

@php
 $tags = explode(' ',$tagsCsv); 
@endphp
<ul {{$attributes->merge(['class'=>''])}}>
    @foreach ($tags as $tag)
    <li
    class="bg-black text-white rounded-xl px-3 py-1 mr-2"
>
    <a href="/?tag={{$tag}}">{{$tag}}</a>
</li>
    @endforeach
</ul>
{{--flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs--}}