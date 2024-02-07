<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AcademicYear extends Model
{
    use HasFactory;


    /**
     * Get all of the classroom for the AcademicYear
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classroom(): HasMany
    {
        return $this->hasMany(Classroom::class);
    }
}
