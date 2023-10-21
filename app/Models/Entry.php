<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;
    // protected $table = 'entries';
    public $timestamps = false;
    protected $fillable = ['title', 'content'];
}
