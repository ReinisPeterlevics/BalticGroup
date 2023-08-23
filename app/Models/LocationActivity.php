<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LocationActivity extends Model
{
    protected $table = 'location_activities';

    protected $primaryKey = 'location_activity_id';

    protected $fillable = [
        'location_id',
        'activity_id',
    ];

    public function location():BelongsTo{
        return $this->belongsTo(Location::class);
    }

    public function activity():BelongsTo{
        return $this->belongsTo(Activity::class);
    }
}
