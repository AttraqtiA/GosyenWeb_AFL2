<?php

namespace App\Models;

use App\Models\Service;
use App\Models\Service_Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function services()
    {
        return $this->belongsToMany(Service::class)->using(Service_Client::class);
    }
}
