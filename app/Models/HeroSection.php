<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_date',
        'end_date',
        'location',
        'conference_title',
        'edas_link'
    ];

    public function sponsors()
    {
        return $this->hasMany(Sponsor::class);
    }
}
