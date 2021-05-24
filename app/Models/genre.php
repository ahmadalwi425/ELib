<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\book;

class genre extends Model
{
    use HasFactory;
    protected $table = 'genre';
    public function book(){
        return $this->hasMany(book::class, 'id');
    }
}
