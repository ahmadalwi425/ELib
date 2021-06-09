<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\level;
use App\Models\book;
use App\Models\borrow;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'id_level',
        'profile',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function level(){
        return $this->belongsTo(level::class, 'id_level');
    }
    
    public function book_librarian(){
        return $this->belongsToMany(book::class, 'borrow', 'id_librarian', 'id_book')->withPivot('date_borrow','date_due','date_return','status');
    }

    public function book_borrower(){
        return $this->belongsToMany(book::class, 'borrow', 'id_borrower', 'id_book')->withPivot('date_borrow','date_due','date_return','status');
    }
    public function borrow(){
        return $this->hasMany(borrow::class, 'id');
    }
}
