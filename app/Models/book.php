<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Models\genre;
use App\Models\category;
use App\Models\User;
use App\Models\borrow;

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

    public function borrower(){
        return $this->belongsToMany(User::class, 'borrow', 'id_book', 'id_borrower')->withPivot('date_borrow','date_due','date_return','status');
    }

    public function librarian(){
        return $this->belongsToMany(User::class, 'borrow', 'id_book', 'id_librarian')->withPivot('date_borrow','date_due','date_return','status');

    }
    public function borrow(){
        return $this->hasMany(borrow::class, 'id');
    }
}
