@extends('layout')

@section('content')



<div class="container-fluid">
<div class="row flex-column flex-lg-row g-2 py-4">

@unless(count($listings) == 0)

@foreach($listings as $listing)
<x-listing-card :listing="$listing" />
@endforeach 

@else 
<div class="container">
    <div class="alert alert-warning">
        No Listing  Found 
    </div>
</div>
@endunless

    </div>
</div>

<div class="mt-4 px-4 pagi">
    {{ $listings->links() }}
</div>

@endsection