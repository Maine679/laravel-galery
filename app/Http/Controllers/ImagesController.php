<?php

namespace App\Http\Controllers;

use App\Services\ImageServices;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ImagesController extends Controller
{
    private $image = NULL;

    public function __construct(ImageServices $ImageServices) {
        $this->image = $ImageServices;
    }

    function index() {
        $data = $this->image->all();
        return view('gallery', ['images' => $data]);
    }

    function view($id) {
        $data = $this->image->GetById($id);
        return view('view',['image'=>$data->image]);
    }

    function create() {
        return view('create');
    }

    function edit($id) {
        $data = $this->image->GetById($id);
        return view('edit',['data'=> $data]);
    }

    function store(\Illuminate\Http\Request $request) {

        $file = $request->file('image');
        $this->image->add($file);

        return redirect('/gallery');

    }
    function editimg(\Illuminate\Http\Request $request, $id) {

        $file = $request->file('new_image');

        if(!empty($file) && $file->isValid()) {
            $data = $this->image->GetById($id);

            Storage::delete($data->image);

            $path = $file->store('img/upload');

            $this->image->UpdateById($id,$path);
        }

        return redirect("/edit/{$id}");
    }
    function delete($id) {

        $data = $this->image->GetById($id);
        $this->image->delete($id);

        Storage::delete($data->image);

        return redirect('/gallery');
    }
}
