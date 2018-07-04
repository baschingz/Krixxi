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
        $photoModel = new PhotographerModel();
        $photoList = $photoModel->getPhotographerById($id);
        $myJSON = json_encode($photoList);
        return $myJSON;
    }

    public function getPhotographerByName($keyword) {
        
    }

    public function getPhotographerByType($type) {
        
    }

    public function getPhotographerBySearch($keyword) {
        
    }

}

?>