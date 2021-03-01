<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gouvernement extends Model
{
    use HasFactory;
     
    public function cities(){
        return $this -> hasmany(city::class);
    }

   public function Country(){
       return $this -> belongsTo(country::class);
   }
}

