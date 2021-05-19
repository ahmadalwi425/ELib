<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\genre;
use App\Models\category;

class book extends Model
{
    use HasFactory;
    protected $table = 'book';
    public $timestamps = false;
    public function category(){
        return $this->belongsTo(category::class, 'id_category');
    }
    public function genre(){
        return $this->belongsTo(genre::class, 'id_genre');
    }
    protected $guarded = [];
}
