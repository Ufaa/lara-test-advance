<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address'];

    public static $rules = array(
        'name' => 'required',
        'address' => 'required',
    );
}
