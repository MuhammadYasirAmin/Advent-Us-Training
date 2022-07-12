<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInfo extends Model
{
    use HasFactory;
    protected $table = "course_infos";

    public function CourseVenueInfo()
    {
        return $this->hasMany(CourseVenuesInfo::class);
    }
}
