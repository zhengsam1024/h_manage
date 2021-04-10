<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configure extends Model
{
    use HasFactory;

    protected $table = 'configures';
    public $timestamps = false;
    protected $fillable = ['name', 'value'];
}
