<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StaffPictures extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'staffs_id',
        'image'
    ];

    protected $hidden = [

    ];

    public function staff() {
        return $this->belongsTo(Staffs::class, 'staffs_id', 'id');
    }
}
