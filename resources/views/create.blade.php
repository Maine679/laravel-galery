@extends('template')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <h2>Добавить изображение</h2>
            <form action="store" method="post" enctype="multipart/form-data">
                <input class="form-control" name="image" type="file">
                {{csrf_field()}}
                <button type="submit" class="btn btn-success">Добавить</button>
            </form>

        </div>
    </div>
@endsection