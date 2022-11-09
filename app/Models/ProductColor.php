<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductColor extends Model
{
    use HasFactory;
    protected $fillable = ['color','product_id'];
    protected $table = 'product_colors';
    /*Relationship Category  */

    public function products{
        return $this->belongsTo(Product::class,'product_id');
    } //End Category

    /**
     * @return HasMany
     */
    protected function productColorSize{
        return $this->hasMany(ProductColorSize::class);

    }

}
