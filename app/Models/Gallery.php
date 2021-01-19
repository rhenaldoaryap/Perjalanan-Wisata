<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'about',
        'main_event',
        'language',
        'foods',
        'event_name',
        'meeting_point',
        'pax',
        'price'
    ];

    protected $hidden = [

    ];

    public function pictures() {
        return $this->hasMany(Picture::class, 'galleries_id', 'id');
    }
}
