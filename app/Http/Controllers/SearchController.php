<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SearchController extends Controller {

    public function getSelect() {
        $location = DB::table('location')->get();
        $cost = DB::table('cost')->get();
        $service = DB::table('service')->get();
        $typeproject = DB::table('typeproject')->get();

        $select = array($location,$cost,$service,$typeproject);
        $myJSON = json_encode($select);
        return $myJSON;
        // return 'hi';
    }

}

?>