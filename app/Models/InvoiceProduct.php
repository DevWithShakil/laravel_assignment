<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class InvoiceProduct extends Pivot // Typically extends Pivot for pivot tables
{
    use HasFactory;

    protected $table = 'invoice_products'; // Explicitly define table name

    protected $fillable = [
        'invoice_id',
        'product_id',
        'user_id',
        'qty',
        'sale_price',
    ];

    // Define relationships if you query this model directly
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user() // The user who added this entry (if needed)
    {
        return $this->belongsTo(User::class);
    }
}
