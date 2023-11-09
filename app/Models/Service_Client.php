<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service_Client extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function service(): HasMany
    {
        return $this->hasMany(Service::class);
    }

    public function client(): HasMany
    {
        return $this->hasMany(Client::class);
    }
}