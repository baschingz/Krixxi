<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller {

    public function getSelect() {
        $location = DB::table('location')->get();
        $cost = DB::table('cost')->get();
        $service = DB::table('service')->get();

        $select = array($location,$cost,$service);
        $myJSON = json_encode($select);
        return $myJSON;
        // return 'hi';
    }

}

?>