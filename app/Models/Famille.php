<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Famille extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
