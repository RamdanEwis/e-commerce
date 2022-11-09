<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','main_price','main_discount','parent_id'];
    protected $table = 'categories';


    /**
     * @return HasMany
     */
    protected function child{
        return $this->hasMany(Category::class,'parent_id');

    }

    /**
     * @return HasMany
     */
    protected function products{
        return $this->hasMany(Product::class,'category_id');

    }

}
