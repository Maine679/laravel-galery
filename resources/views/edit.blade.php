@extends('template')

@section('content')
    <div class="container-flued">
        <div class="row align-content-center">
            <h2>Изменить изображение</h2>
            <img src="/{{$data->image}}" alt="" class="col-md-4">


            <form action="/editimg/{{$data->id}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input name="new_image" type="file">
                <button class="btn btn-success">Изменить</button>
            </form>
        </div>
    </div>


@endsection