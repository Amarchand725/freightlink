<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyNetwork extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function hasNetwork()
    {
        return $this->hasOne(Network::class, 'id', 'network_id');
    }
}
