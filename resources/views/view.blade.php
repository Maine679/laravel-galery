@extends('template')

@section('content')
{{--    {{dd($image[0]->image)}}--}}
    <div class="contaner">
        <div class="row">
            <img class="gallery-image" src="../{{$image}}" alt="">
        </div>
    </div>
@endsection
