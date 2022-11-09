<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'payment_method', 'payment_status', 'payment_id', 'total_price', 'address', 'phone', 'email', 'name', 'surname', 'city', 'country', 'shipping_price', 'postal_code', 'user_id'];

    protected $table = 'orders';


    /**
     * @return BelongsTo
     */
    protected function order {

        return $this->belongsTo(Order::class);

    }

    /**
     * @return BelongsTo
     */
    protected function productColorSize{
        return $this->belongsTo(ProductColorSize::class);

    }

}
