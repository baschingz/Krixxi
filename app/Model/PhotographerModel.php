﻿<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class PhotographerModel extends Model
{
    //protected $table = 'Photographer';  //รอ create DB

    public function getPhotographerList()
	{
        try
		{
            
        }
        catch(\Exception $ex)
		{
            return $ex;
        }

    }

    public function getPhotographerById($id)
	{
        try
		{
            
        }
        catch(\Exception $ex)
		{
            return $ex;
        }

    }

	public function getPhotographerByName($keyword)
	{
		try{
		
		}
		catch(\Exception $ex)
		{
			return $ex;
		}
	}

	public function getPhotographerByType($type)
	{
		try
		{
		
		}
		catch(\Exception $ex)
		{
		
		}
	}

}