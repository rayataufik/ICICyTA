<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallPaper extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'cfp_title',
        'cfp_description',
        'cfp_image',
        'tour_title',
        'tour_poster',
        'background_image',
    ];


    public function contents()
    {
        return $this->hasMany(Content::class);
    }
}
