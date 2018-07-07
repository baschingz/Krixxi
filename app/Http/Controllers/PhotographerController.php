<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\PhotographerModel;

class PhotographerController extends Controller {

    public function getPhotographerList() {
        $photoModel = new PhotographerModel();
        $photolist = $photoModel->getPhotographerList();
        $myJSON = json_encode($photolist);
        return $myJSON;
    }
    
    public function getPhotographerById($id) {
        // dd($id);
        // $photoModel = new PhotographerModel();
        // $photoList = $photoModel->getPhotographerById($id);
        $photlist = DB::table('photographer')
        ->join('location', 'location.loc_id', '=', 'photographer.loc_id')
        ->select('fullname','profile_img','description','penname','cover_img','fulltime','parttime','location.name')
        ->where('pg_id','=',$id)->get();
        $myJSON = json_encode($photlist);
        return $myJSON;
        // return $id;
    }

    public function getPhotographerByName($keyword) {
        
    }

    public function getPhotographerByType($type) {
        
    }

    public function getPhotographerBySearch(Request $keyword) {
         $loction = $keyword->location;
         $cost = $keyword->cost;
         $service =$keyword->service;
         $photolist = DB::table('photographer')->where('loc_id','=',$loction)->where($service,'>=',$cost)->where($service,'<=',$cost+999)->get();
        // dd($loction);
        $myJSON = json_encode($photolist);       
        return $myJSON;
        // return $keyword;
    }

}

?>