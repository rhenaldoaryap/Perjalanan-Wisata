<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staffs extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'title',
        'course'
    ];

    protected $hidden = [

    ];

    public function staffpictures() {
        return $this->hasMany(StaffPictures::class, 'staffs_id', 'id');
    }
}
