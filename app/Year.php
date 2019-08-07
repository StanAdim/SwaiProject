<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
   protected $guarded = [];
   protected  $attributes =
       [
           'name'=>'FIRST YEARS',
           'chair'=>'Mr Mkalimani',

       ];

   public function students()
   {
       return $this->hasMany(Student::class);
   }
}
