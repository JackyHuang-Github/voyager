<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cgy extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'desc', 'enabled'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
