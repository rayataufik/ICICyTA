<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable = [
        'vanue_link',
        'visitor_link',
        'email',
        'phone',
        'linkedin',
        'instagram',
        'facebook',
    ];

    public function supporter()
    {
        return $this->hasMany(Supporter::class);
    }
}
