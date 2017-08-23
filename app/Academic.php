<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected  $table = 'academics';
    protected $fillable = ['academic'];// manageCourses.blade.php file script
    protected $primaryKey = 'academic_id';
    public  $timestamps = false;
}
