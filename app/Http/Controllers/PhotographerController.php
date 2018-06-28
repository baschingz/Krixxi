<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\PhotographerModel;

class  PhotographerController extends Controller
{
	
    public function getPhotographerList()
	{
        $photoModel = new PhotographerModel();
		$photolist = $photoModel->getPhotographerList();
		return view('Photographer.photographerList', compact('$photolist'));
    }

	 public function getPhotographerById($id)
	{
	 
	}

	 public function getPhotographerByName($keyword)
	{
		
	}

	public function getPhotographerByType($type)
	{
	
	}
}

?>