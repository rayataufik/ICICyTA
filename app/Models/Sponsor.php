<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = ['hero_section_id', 'sponsor_image'];

    public function heroSection()
    {
        return $this->belongsTo(HeroSection::class);
    }
}
