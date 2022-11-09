<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductSize extends Model
{
    use HasFactory;
    protected $fillable = ['size','product_id'];
    protected $table = 'product_sizes';
    /*Relationship Category  */

    public function products{
        return $this->belongsTo(Product::class);
    } //End Category

    /**
     * @return HasMany
     */
    protected function productColorSize{
        return $this->hasMany(ProductColorSize::class);

    }
}
