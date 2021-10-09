@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="{{ $post->id }} rounded border border-secondary m-2">
        <h2 class="pt-2 text-center">{{ $post->title }}</h2>
        <div class="d-flex flex-row w-100 ml-3 mb-4">
        	<img class="rounded" src="{{ Storage::url($post->image) }}">
        	<p class="w-75 pl-5 mt-3">{{ $post->description }}</p>
        </div>
        
    </div>
    @endforeach
</div>
@endsection
