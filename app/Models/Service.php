<?php

namespace App\Models;

use App\Models\Client;
use App\Models\ClientService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function client()
    {
        return $this->belongsToMany(Client::class, 'client_services');
    }
}
