<?php

namespace App\Models\WEB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PujaBenefits extends Model
{
    use HasFactory;

    # Puja
    public function puja_benefit () {
        return $this->belongsTo(Puja::class,'puja_id');
    }
}
