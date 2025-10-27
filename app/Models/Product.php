<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'price',
        'unit',
        'image',
    ];

    // Relationship: A product belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: A product belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship: A product can be in many invoices (Many-to-Many)
    public function invoices()
    {
        return $this->belongsToMany(Invoice::class, 'invoice_products') // Specify pivot table
                    ->withPivot('qty', 'sale_price', 'user_id') // Include extra pivot columns
                    ->withTimestamps(); // If pivot table has timestamps
    }
}
