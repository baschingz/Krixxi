<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;


class imageModel extends Model {
    protected $table = 'imageindex';

    public function getImageList()
    {
        try {
            $imglist = imageModel::all();
            return $imglist;
        } catch (\Exception $ex) {
            return $ex;
        }
    }
}