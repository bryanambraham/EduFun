<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'image',
        'published_date',
        'description',
        'summary',
    ];

    public function writer(){
        return $this->belongsTo(Writer::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
