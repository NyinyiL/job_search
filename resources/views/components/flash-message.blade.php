@if(session()->has('message'))
<div x-show="show" class="container">
    <div x-data="{show: true}" x-init="setTimeout(() => show = flase, 3000)" x-show="show" class="alert alert-success" >
        <p>{{ session('message') }}</p>
    </div>
</div>
@endif