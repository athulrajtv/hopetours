<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;
    protected $table = 'travels';
    protected $fillable = [
        'head',
        'price',
        'days',
        'title',
        'details',
        'month',
        'image',
        'information',
        'plan',
        'link',
    ];
}
