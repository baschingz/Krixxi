<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class PhotographerModel extends Model {

    protected $table = 'Photographer';

    public function getPhotographerList() {
        try {
            $photolist = PhotographerModel::all();
            return $photolist;
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function getPhotographerById($id) {
        try {
            $photolist = PhotographerModel::where('pg_id','=',$id)->firstOrFail();
            return $photolist;
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function getPhotographerByName($keyword) {
        try {
            
        } catch (\Exception $ex) {
            return $ex;
        }
    }

    public function getPhotographerByType($type) {
        try {
            
        } catch (\Exception $ex) {
            
        }
    }

    public function getPhotographerBySearch($keyword) {
        try {
            $photolist = PhotographerModel::select();
        } catch (\Exception $ex) {
            return $ex;
        }
    }
}
