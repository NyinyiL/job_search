@props(['tagsCsv'])

@php 
$tags = explode(',', $tagsCsv)
@endphp

@foreach($tags as $tag)
<button type = "submit" class = "btn btn-dark rounded-pill"><a href = "/?tag={{$tag}}" class = "text-decoration-none text-white">{{ $tag }}</a></button>
@endforeach
