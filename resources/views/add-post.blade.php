@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="" style="margin: 20px 10%;"> 
        <h2 style="text-align: center;">Add Post</h2>
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach 
            </ul>
        </div>
        @endif
        <form action="{{ route('validate-post-form') }}" method="POST" enctype="multipart/form-data">
            <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
            @csrf


            <!-- title, description, image  -->
            <div class="p-2">
                <input type="title" name="title" class="form-control" placeholder="Title">
            </div>

            <div class="p-2">
                <textarea type="text" name="description" class="form-control" aria-label="With textarea" placeholder="Description"></textarea>
            </div>

            <div class="custom-file m-2" style="width: 98.2%;">
                <!--<label class="custom-file-label">Choose image</label>-->
                <!--<input type="file" name="image" class="form-control block shadow-5xl">-->
                <input type="file" id="myfile" name="image" class="form-control" multiple style="width: min-content;">
            </div>

            <button type="submit" class="btn m-2 btn-primary" style="">Submit</button>
        </form>
    </div>
    @isset($path)
    <img src="{{ asset('/storage/' . $path) }}">
    @endisset
</div>


@endsection



