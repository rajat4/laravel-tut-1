<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_table extends Model
{
    // use HasFactory;
    public $table = "customer_data";
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}
