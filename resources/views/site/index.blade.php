@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card mb-3">
        <ul>
        @foreach($articles as $article)
            <li>
                {{ $article['name'] }}
            </li>
            @endforeach 
        </ul>
    </div>
</div>

@endsection