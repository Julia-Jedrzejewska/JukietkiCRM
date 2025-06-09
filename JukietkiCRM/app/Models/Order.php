<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'client_id',
        'order_status',
        'price',
        'order_items',
        'start_date',
        'end_date',
        'comment',
    ];
    public function client(): BelongsTo{
        return $this->belongsto(Client::class);
    }
}
