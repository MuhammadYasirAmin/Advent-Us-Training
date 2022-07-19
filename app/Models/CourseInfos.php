<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInfos extends Model
{
    use HasFactory;
    protected $table = "course_infos";

    public function CourseVenueInfo()
    {
        return $this->hasMany(CourseVenuesInfos::class);
    }
}
