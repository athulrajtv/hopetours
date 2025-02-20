<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    // Specify the table name if it's not the plural of the model name
   protected $table = 'images';

   // Specify which columns can be mass assigned
   protected $fillable = [
       'gallery_id',
       'gallery',
   ];
}
