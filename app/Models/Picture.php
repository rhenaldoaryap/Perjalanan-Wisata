<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'galleries_id',
        'image'
    ];

    protected $hidden = [

    ];

    public function gallery() {
        return $this->belongsTo(Gallery::class, 'galleries_id', 'id');
    }
}
