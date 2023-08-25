<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    protected $primaryKey = 'location_id';

    protected $fillable = [
        'name',
        'description',
        'country_id',
        'season_id',
        'hotel',
        'image',
        'small_image',
        'start_date',
        'end_date',
        'duration',
        'price',
        'spots_left',
        'departure_date',
        'return_date',
    ];

    public function country():BelongsTo{
        return $this->belongsTo(Country::class);
    }

    public function season():BelongsTo{
        return $this->belongsTo(Season::class);
    }

    public function order_location():HasMany{
        return $this->hasMany(OrderLocation::class);
    }

    public function location_activity():HasMany{
        return $this->hasMany(LocationActivity::class);
    }
}
