<?php

namespace App\Models\WEB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puja extends Model
{
    use HasFactory;

    protected $fillable = [
        'puja_name',
        'price',
        'title',
        'description',
        'date',
        'image',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'date' => 'array',
    ];

    # Puja Benefit
    public function puja_benefit()
    {
        return $this->hasMany(PujaBenefits::class);
    }
}
