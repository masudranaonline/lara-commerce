<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function divisions($country){
        if($country == 'Bangladesh')
            return json_decode(file_get_contents(storage_path('data/divisions.json')), true);
        else
            return [];
    }

    public function districts($division)
    {
        $districts =  json_decode(file_get_contents(storage_path('data/districts.json')), true);

        return  array_filter($districts, function($district) use ($division){
            if($district['division_id'] == $division){
                return $district;
            }
       });

    }


    public function upazillas($district)
    {
         $upazillas =  json_decode(file_get_contents(storage_path('data/upazillas.json')), true);

        return  array_filter($upazillas, function($upazilla) use ($district){
            if($upazilla['district_id'] == $district){
                return $upazilla;
            }
       });

    }




}
