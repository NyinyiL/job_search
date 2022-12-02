@props(['listing'])

<x-card>
    <div class="bg-light d-flex shadow-lg" style = "height : 200px ">
    <img src = '{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/img/laravel.png') }}' width = "200" height = "200">
    <div class = "text py-3 px-4">
        <h3 class = "fs-4"><a href = "/listings/{{ $listing['id']}}" class = "text-decoration-none text-dark">{{ $listing['title'] }}</a></h3>
        <h4 class = "fw-bold">{{ $listing['company'] }}</h4>
        <x-listing-tags :tagsCsv="$listing->tags"/>
        <div class="location mt-1">
            <span class = "location"><i class="fa-solid fa-location-pin"></i> {{ $listing->location }}</span>
        </div>
    </div>
    </div>
</x-card>
