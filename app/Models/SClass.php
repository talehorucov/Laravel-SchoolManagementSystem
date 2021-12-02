<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SClass extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'classes';    

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
