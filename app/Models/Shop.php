<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'images',
        'loacation',
        'city',
        'delivery',
        'pickup',
        'whatsapp',
        'description',
        'price',
        'rate',
    ];

    /**
     * Get all of the laundries for the Shop
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function laundries(): HasMany
    {
        return $this->hasMany(Laundry::class);
    }
}
