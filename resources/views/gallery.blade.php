@extends('template')





@section('content')
    <div align="center">
        <h3>Картинки <span class="badge bg-secondary bg-success">New</span></h3>
    </div>


    <div class="container-fluid">
        <div class="row">

            @foreach($images as $image)
                <div class="col-lg-3 col-md-4 col-sm-6 gallery-image">
                    <div class="col">
                        <img class="col-12 img-fluid" src="../{{$image->image}}" alt="Картинка">
                        <a href="/view/{{$image->id}}" class="col btn btn-success my-button">Просмотреть</a>
                        <a href="/edit/{{$image->id}}" class="col btn btn-warning my-button">Редактировать</a>
                        <a href="/delete/{{$image->id}}" onclick="return confirm('Вы уверенны?');" class="col btn btn-danger my-button">Удалить</a>
                    </div>
                </div>
            @endforeach



        </div>


    </div>


@endsection
