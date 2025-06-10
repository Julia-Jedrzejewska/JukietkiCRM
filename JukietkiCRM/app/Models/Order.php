<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\OrderStatus;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'client_id',
        'order_status' => OrderStatus::class,
        'price' => 'decimal:2',
        'order_items',
        'start_date' => 'date',
        'end_date' => 'date',
        'comment',
    ];
    public function client(): BelongsTo{
        return $this->belongsto(Client::class);
    }
}
