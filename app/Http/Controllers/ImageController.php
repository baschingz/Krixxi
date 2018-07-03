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
        // return view('menu.MenuList',compact('imglist'));
    }
}