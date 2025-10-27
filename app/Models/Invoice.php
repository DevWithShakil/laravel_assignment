<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'total',
        'discount',
        'vat',
        'payable',
        'user_id',
        'customer_id',
    ];

    // Relationship: An invoice belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship: An invoice belongs to a customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Relationship: An invoice can have many products (Many-to-Many)
    public function products()
    {
        return $this->belongsToMany(Product::class, 'invoice_products') // Specify pivot table
                    ->withPivot('qty', 'sale_price', 'user_id') // Include extra pivot columns
                    ->withTimestamps(); // If pivot table has timestamps
    }

    // Optional: Direct relationship to pivot table entries if needed
    public function invoiceProductEntries()
    {
        return $this->hasMany(InvoiceProduct::class);
    }
}
