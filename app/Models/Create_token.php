<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Create_token extends Model
{
    use HasFactory;

    protected $table = "create_token";
    protected $primaryKey = "id";

    protected $fillable = [
        'warranty_info',
        'name',
        'mobile',
        'email',
        'invoice_no',
        'invoice_date',
        'product_name',
        'serial_no',
        'model_no',
        'address',
        'issue',
        'status',
        'is_completed',
        'is_delivered'

    ];

    protected $casts = [
        'invoice_date'=>'datetime',
        'status'=>'boolean',
        'is_completed'=>'boolean',
        'is_delivered'=>'boolean'
    ];
}
