<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentType extends Model
{
    use HasFactory;

    protected $table ='payment_types';

    protected $primaryKey = 'payment_type_id';

    protected $fillable = [
        'name',
    ];

    public function order(): HasMany{
        return $this->hasMany(Order::class);
    }
}

