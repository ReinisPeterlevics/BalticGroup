<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $primaryKey = 'order_id';

    protected $fillable = [
        'customer_first_name',
        'customer_last_name',
        'customer_email',
        'customer_phone_number',
        'payment_type_id',
        'total_cost',
        'notes',
    ];

    // public function user():BelongsTo{
    //     return $this->belongsTo(User::class);
    // }

    public function payment_type():BelongsTo{
        return $this->belongsTo(PaymentType::class);
    }
}
