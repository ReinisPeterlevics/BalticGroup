<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderLocation extends Model
{
    protected $table = 'order_locations';

    protected $primaryKey = 'order_location_id';

    protected $fillable = [
        'order_id',
        'location_id',
        'person_count',
        'subtotal',
    ];

    public function order():BelongsTo{
        return $this->belongsTo(Order::class);
    }

    public function location():BelongsTo{
        return $this->belongsTo(Location::class);
    }
}
