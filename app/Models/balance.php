<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;
    
    // Specify the table name explicitly
    protected $table = 'balances';
    
    protected $fillable = ['id', 'username', 'saldo'];
}
