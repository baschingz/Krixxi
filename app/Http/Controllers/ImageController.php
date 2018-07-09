<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\imageModel;

class ImageController extends Controller {

    public function getImageList() {
        $imgModel = new imageModel();
        $imglist = $imgModel->getImageList();
        // dd($imglist);
        $myJSON = json_encode($imglist);
        return $myJSON;
        // return 1;
        // return view('menu.MenuList',compact('imglist'));
    }

    public function getAlbumById($id){
        $albumList = DB::table('album')->where('pg_id','=',$id)->get();
        // $albumList = DB::table('imagecenter')
        // ->join('album','album.album_id','=','imagecenter.album_id')
        // ->join('photographer','photographer.pg_id','=','imagecenter.pg_id')
        // ->where('photographer.pg_id','=',$id)
        // ->get();
        $myJSON = json_encode($albumList);
        return $myJSON;
    }

    public function getImageListById($id){
        $imageList = DB::table('imagecenter')->where('album_id','=',$id)->get();
        $myJSON = json_encode($albumList);
        return $myJSON;
    }
}