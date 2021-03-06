<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\imageModel;

class ImageController extends Controller {

    public function getImageList() {
        $imgModel = new imageModel();
        $imglist = $imgModel->getImageList();        
        $myJSON = json_encode($imglist);
        return $myJSON;
       
    }

    public function getAlbumById($id){
        $albumList = DB::table('album')
        ->join('photographer','photographer.pg_id','=','album.pg_id')        
        ->where('photographer.pg_id','=',$id)
        ->get(); 
        $myJSON = json_encode($albumList);
        return $myJSON;
    }

    public function getImageListById($id){
        $albumlist=[];
        $sum=array();
        $albumAll = array();
        $imageList = DB::table('imagecenter')->where('pg_id','=',$id)->get();
        $album = DB::table('album')
        ->join('photographer','photographer.pg_id','=','album.pg_id')        
        ->where('photographer.pg_id','=',$id)
        ->get(); 
        $albumSize = sizeof($album);
        for($i=0;$i<$albumSize;$i++)
        {
            $albumlist[] = array('albumcover'=>$album[$i]->cover,'albumname'=>$album[$i]->album_name,'albuminspire'=>$album[$i]->inspiration);
            for($j=0;$j<sizeof($imageList);$j++){
                if($album[$i]->album_id == $imageList[$j]->album_id){   
                    $sum[] = array('imgBase64'=>$imageList[$j]->imagecenter_base64);                   
                }                
            }
            $albumlist[] = array('album'=>$sum);           
            $sum=[];
            $albumAll[] = array('albumlist'=>$albumlist);
            $albumlist=[];
        }
       
        $myJSON = json_encode($albumAll);
        return $myJSON;
    }
}