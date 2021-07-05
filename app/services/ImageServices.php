<?php



namespace App\Services;

use Illuminate\Support\Facades\DB;

class ImageServices {
    public function all() {

        $data = DB::table('images')->select("*")->get();
        $images = $data->all();

        return $images;
    }

    public function GetById($id) {
        $data = DB::table('images')->select('*')->where('id','=',$id)->first();
        return $data;
    }

    public function add($file) {

        if(!empty($file) && $file->isValid()) {
            $path = $file->store('img/uploads');
            DB::table('images')->insert(
                ['image' => $path]
            );
        } else return false;
        return true;
    }

    public function UpdateById($id, $path) {
        DB::table('images')->where('id',$id)->update(['image'=>$path]);
    }

    public function delete($id) {
        DB::table('images')->where('id',$id)->delete();
    }

}


