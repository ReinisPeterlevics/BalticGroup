<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    protected $fillable = [
        'user_id',
        'location_id',
        'quantity'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function location():BelongsTo{
        return $this->belongsTo(Location::class);
    }
}
