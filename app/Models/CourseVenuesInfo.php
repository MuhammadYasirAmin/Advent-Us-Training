<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseVenuesInfo extends Model
{
    use HasFactory;
    protected $table = "course_venues_infos";

    public function course_infos()
    {
        return $this->belongsTo(CourseInfo::class);
    }
}
