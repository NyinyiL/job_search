
@extends('layout')

@section('content')

<div class="back container mt-4">
    <i class="fa-solid fa-arrow-left-long"><a href = "/" class = "text-decoration-none text-dark text-lowercase "> go back</a></i>
</div>

<div class="container bg-light py-4 mt-3">
    <div class="img text-center mt-4 py-4">
        <img src = '{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/img/laravel.png') }}' class = "mt-5" style = "height: 200px; width : 200px">
        <h3 class = "mt-3">{{ $listing->title }}</h3>
        <h4 class="fw-bold mt-4">{{ $listing->company }}</h4>
        <x-listing-tags :tagsCsv="$listing->tags"/>
        <div class="location mt-1">
            <span class = "location"><i class="fa-solid fa-location-pin"></i> {{ $listing->location }}</span>
        </div>
        <hr class = "text-danger fw-bold">
        <h2 class = "fw-bold">JOB DESCRIPTION</h2>
        {{ $listing->description }}
    </div>
    <button type = "submit" class = 'btn btn-danger w-100 rounded-pill'> <a href = "mailto:{{ $listing->email }}" class = "text-decoration-none text-white"><i class="fa-solid fa-envelope"></i> Contact Employer</a></button>
    <button type = "submit" class = 'btn btn-dark w-100 rounded-pill mt-3'><a href = "{{ $listing->website }}" class = "text-decoration-none text-white"><i class="fa-solid fa-globe"></i> View Website </a></button>
</div>

<div class="edit">
    <div class="container d-flex p-3">
        <button type = "submit" class = "btn btn-outline-dark rounded-pill"><a href = "{{$listing->id}}/edit" class = "text-decoration-none text-danger"><i class="fa-solid fa-pen"></i>&nbsp; EDIT</a></button>

        <form action="/listings/{{$listing->id}}" method = "post">
        @csrf 
        @method('delete')
        <button class = "btn btn-outline-danger text-dark rounded-pill"><i class = "fa-solid fa-trash"></i>DELETE</button>
    </form>
    </div>
</div>

@endsection