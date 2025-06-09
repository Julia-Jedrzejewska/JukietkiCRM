<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'id_client',
        'order_status',
        'price',
        'what_ordered',
        'start_date',
        'end_date',
        'comment',
    ];
    public function client(): belongsTo{
        return $this->belongsTo(Client::class);
    }
}
