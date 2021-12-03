<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    // protected $appends = 'fullname';

    protected $fillable = [
        'firstname',
        'lastname',
        'username',
        'email',
        'password',
        'parent_id',
        'grade_id',
        'dateOfBirth',
        'gender',
        'phone',
        'address',
        'photo'
    ];
    
    protected $guarded = [];

    public function getFullnameAttribute()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    public function parent()
    {
        return $this->belongsTo(StuParent::class);
    }
    
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
