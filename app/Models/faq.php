<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faq extends Model
{
    use HasFactory;

    // table名を指定 もしかして要らない？
    protected $table = 'faqs';
    public $timestamps = false;

    // カラムを指定
    protected $fillable = [
        'name', 'address'
    ];

    // データの追加？？
    public static $rules = array(
        'name' => 'required',
        'address' => 'required'
    );

    public function getDetail()
    {
        $txt = 'ID:' . $this->id . ' ' . $this->name . ' ' . $this->address;
        return $txt;
    }
}

