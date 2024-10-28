<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'call_paper_id',
        'title_content',
        'description_content'
    ];

    public function callPaper()
    {
        return $this->belongsTo(CallPaper::class);
    }
}
