<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $with = ['user'];

    protected $fillable = [
        'product_name',
        'category',
        'condition',
        'price',
        'availability',
        'images',
        'details',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    // app/Product.php

public function wishlists()
{
    return $this->hasMany(Wishlist::class);
}

}
