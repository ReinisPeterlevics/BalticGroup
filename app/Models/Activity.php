<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    use HasFactory;

    protected $table ='activities';

    protected $primaryKey = 'activity_id';

    protected $fillable = [
        'name',
        'description',
        'duration',
        'image',

    ];

    public function location(): HasMany{
        return $this->hasMany(Location::class);
    }
}
