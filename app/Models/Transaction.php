<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'galleries_id',
        'users_id',
        'price',
        'transaction_total',
        'transaction_status'
    ];

    protected $hidden = [

    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class, 'galleries_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
