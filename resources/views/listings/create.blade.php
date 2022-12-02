@extends('layout')

@section('content')

<section class="main">
    <div class="container form bg-light py-4 px-4">
        <form action = "/listings" method = "post" enctype="multipart/form-data">

            @csrf 

            <h2 class = "text-center fw-bold">CREATE JOB REQUIRE POST</h2>
            <h4 class = "text-center">Post a Jobseeker to find developer</h4>
            
            <div class="mt-5">
                <label>Company Name</label>
                <input type = "text" name = "company" class = "form-control mt-2" placeholder = "Company Name" value = "{{ old('company') }}">

                @error('company')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label>Job Title</label>
                <input type = "text" name = "title" class = "form-control mt-2" placeholder = "Example senioe laravel developer" value = "{{ old('title') }}">

                @error('title')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label>Job Location</label>
                <input type = "text" name = "location" class = "form-control mt-2" placeholder = "Example Boston, MA" value = "{{ old('location') }}">

                @error('location')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label>Contact Email</label>
                <input type = "text" name = "email" class = "form-control mt-2" placeholder = "exapmle@gmail.com" value = "{{ old('email') }}">

                @error('email')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label>Website/Application URL</label>
                <input type = "text" name = "website" class = "form-control mt-2" placeholder = "Example www.google.com" value = "{{ old('website') }}">

                @error('website')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label>Tag (Comma Saperated)</label>
                <input type = "text" name = "tags" class = "form-control mt-2" placeholder = "Experience , laravel , API" value = "{{ old('tags') }}">

                @error('tags')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label>Company Logo</label>
                <input type = "file" name = "logo" class = "form-control mt-2" placeholder = "Select Your Logo" required>

                @error('logo')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <label>Job Description</label>
                <textarea name = "description" class = "form-control mt-2" placeholder = "requirements , salary , etc."> {{ old('description') }} </textarea>

                @error('description')
                <p class="text-danger mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mt-4">
                <button type = "submit" class = "btn btn-outline-danger">Create JobSeeker</a></button>
                <a href = "/" class = " text-danger px-4">Go Back</a>
            </div>

            
        </form>
    </div>
</section>

@endsection
