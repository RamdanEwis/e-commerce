<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductColorSize extends Model
{
    use HasFactory;
    protected $fillable = ['product_size_id','stock','price','discount_price','product_color_id'];
    protected $table = 'product_color_size';

    /**
     * @return BelongsTo
     */
    public function color {
        return $this->belongsTo(ProductColor::class);

    }

    /**
     * @return BelongsTo
     */
    public function size{
        return $this->belongsTo(ProductSize::class);

    }



}
