<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Season extends Model
{
    use HasFactory;

    protected $table ='seasons';

    protected $primaryKey = 'season_id';

    protected $fillable = [
        'name',
    ];

    public function location(): HasMany{
        return $this->hasMany(Location::class);
    }
}
