<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];
    protected $attributes = [
        'marriage'=>'1'
    ];

    public function year()
        {
          return $this->belongsTo(Year::class);
        }
    public function getMarriageAttribute($attribute)
        {
            return $this ->marriageOptions()[$attribute];
        }

    public function marriageOptions()
        {
          return [
              '1'=>'single',
              '2'=>'married',
              '3'=>'divorced'
          ];
        }




}
