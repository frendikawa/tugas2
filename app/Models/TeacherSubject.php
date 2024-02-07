<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeacherSubject extends Model
{
    use HasFactory;


    /**
     * Get the teacher that owns the TeacherSubject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }


    /**
     * Get the subject that owns the TeacherSubject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * Get all of the TeacherSubjectClassrooms for the TeacherSubject
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function TeacherSubjectClassrooms(): HasMany
    {
        return $this->hasMany(TeacherSubjectClassroom::class);
    }
}
