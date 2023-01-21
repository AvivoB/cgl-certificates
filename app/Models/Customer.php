<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    /**
     * Customers HasMany Certificates
     *
     * @return void
     */
    public function certificates(): HasMany
    {
        return $this->hasMany(Certificate::class);
    }


    
}
