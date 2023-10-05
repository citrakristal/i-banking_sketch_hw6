<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'user_profiles';

    protected $fillable = ['Nama', 'ttl', 'notelp', 'alamat'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
