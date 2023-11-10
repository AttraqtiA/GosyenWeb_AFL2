<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Service_Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function clients()
    {
        return $this->belongsToMany(Client::class)->using(Service_Client::class);
    }
}
