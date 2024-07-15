<?php

namespace App\Models\WEB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PujaBenefits extends Model
{
    use HasFactory;

    protected $fillable = [
        'puja_id',
        'benefits_header',
        'benefits_description',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'benefits_header' => 'array',
        'benefits_description' => 'array',
    ];


    # Puja
    public function puja_benefit () {
        return $this->belongsTo(Puja::class,'puja_id');
    }
}
