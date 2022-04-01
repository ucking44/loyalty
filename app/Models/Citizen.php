<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citizen extends Model
{
    use HasFactory;

    protected $table = 'citizens';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'ward_id',
        'name',
        'gender',
        'address',
        'phone'
    ];

    public function ward()
    {
        return $this->belongsTo(Ward::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

