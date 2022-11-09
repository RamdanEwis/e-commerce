<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','main_price','main_discount','category_id'];

    protected $table = 'products';

    /*Relationship Category  */
    public function category{

       return $this->belongsTo(Category::class,'category_id');

    } //End Category

    /**
     * @return HasMany
     */
    protected function productColorSize{
        return $this->hasMany(ProductColorSize::class);

    }
    /**
     * @return HasMany
     */
    protected function color{
        return $this->hasMany(ProductColor::class);

    }
    /**
     * @return HasMany
     */
    protected function size{
        return $this->hasMany(ProductSize::class);

    }
}
