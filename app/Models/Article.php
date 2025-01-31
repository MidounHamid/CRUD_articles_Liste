<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = ['id'];

    use HasFactory;

    public function prix_ttc()
    {
        return $this->prix_ht * (1 + $this->tva / 100);
    }

    public function famille()
    {
        return $this->belongsTo(Famille::class);
    }
}
