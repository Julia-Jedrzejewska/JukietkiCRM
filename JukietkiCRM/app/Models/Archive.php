<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class Archive extends Model
{
    protected $table = 'archives';

    protected $fillable = [
        'order_status',
        'price',
        'end_date',
        'comment',
    ];

    public function client(): belongsTo{
        return $this->belongsTo(Client::class);
    }
}
