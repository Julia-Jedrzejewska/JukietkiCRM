<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'name_surname',
        'phone_number',
        'email',
        'address',
        'comment',
    ];

    public function orders(): HasMany{
        return $this->hasMany(Order::class);
    }
}
