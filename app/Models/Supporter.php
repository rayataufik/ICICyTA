<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supporter extends Model
{
    use HasFactory;

    protected $fillable = [
        'footer_id',
        'image_supporter',
    ];

    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }
}
