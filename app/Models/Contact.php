<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
    protected $datetimes = ["created_at", "updated_at"];
    public $incrementing = true;
    public $timestamps = true;
    public $table = 'contacts';
    
    public $fillable = [
        'name',
        'number',
        'avatar',
        "address"
    ];
    
    protected $casts = [
        'name' => 'string',
        'number' => 'string',
        'address' => 'string',
        'avatar' => 'string'
    ];
}
