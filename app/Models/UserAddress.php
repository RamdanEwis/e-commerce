<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = ['address', 'phone', 'name', 'surname', 'city', 'country', 'postal_code', 'user_id'];

    protected $table = 'user_addresses';

    /*Relationship user  */

    /**
     * @return BelongsTo
     */
    protected function user {

        return $this->belongsTo(User::class, 'user_id');

    }
}
