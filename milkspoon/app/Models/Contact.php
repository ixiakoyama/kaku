<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     // Primary Key
     public $primaryKey = 'id';
     // Timestamps
     public $timestamps = true;
 
     protected $fillable = [
         'name',
         'email',
         'tel',
         'contents',
         'type'
     ];
}
