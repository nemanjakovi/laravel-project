<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing
{



    public static function all()
    {

        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
             Lorem Ipsum has been the industrys
              standard dummy text ever since the 1500s, when an unknown printer took
               a galley of type and scrambled it to make a type specimen book'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
             Lorem Ipsum has been the industrys
              standard dummy text ever since the 1500s, when an unknown printer took
               a galley of type and scrambled it to make a type specimen book'
            ],
            [
                'id' => 3,
                'title' => 'Listing Three',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
             Lorem Ipsum has been the industrys
              standard dummy text ever since the 1500s, when an unknown printer took
               a galley of type and scrambled it to make a type specimen book'
            ]
        ];
    }


    public static function find($id)
    {
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}
