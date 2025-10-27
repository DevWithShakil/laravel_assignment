<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'user_id',
    ];

    // Relationship: A customer belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: A customer can have many invoices
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
