<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\book;

class borrow extends Model
{
    use HasFactory;

    protected $table = 'borrow';

    public $timestamps = false;
    protected $guarded = [];
    public function user_borrow(){
        return $this->belongsTo(User::class, 'id_borrower');
    }
    public function user_librarian(){
        return $this->belongsTo(User::class, 'id_librarian');
    }
    public function book(){
        return $this->belongsTo(book::class, 'id_book');
    }
}
