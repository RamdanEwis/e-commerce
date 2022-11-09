<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;


    protected $fillable = ['status', 'payment_method', 'payment_status', 'payment_id', 'total_price', 'address', 'phone', 'email', 'name', 'surname', 'city', 'country', 'shipping_price', 'postal_code', 'user_id'];

    protected $table = 'orders';

    /*Relationship user  */

    /**
     * @return BelongsTo
     */
    protected function user {

        return $this->belongsTo(User::class, 'user_id');

    }

}
