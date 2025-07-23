<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\ExpanseCategory;

class Expense extends Model
{
    protected $table = 'expenses';
    protected $fillable = [
        'price',
        'category',
        'link',
        'date',
        'comment',
    ];

}
