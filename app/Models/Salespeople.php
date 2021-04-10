<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
class Salespeople extends Authenticatable
{
    use HasFactory, Notifiable;

    public $timestamps = false;
    protected $fillable = ['account', 'password', 'last_logined'];

    public function __construct()
    {
        parent::__construct();
        $this->table = config('migration.salespeople');
    }


}
