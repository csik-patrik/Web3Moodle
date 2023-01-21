<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class CourseMember extends Model
{
    use HasFactory;
    use LogsActivity;

    protected $fillable = [
        'course_id',
        'user_id',
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'id', 'user_id');
    }

    public function course()
    {
        return $this->hasMany(Course::class, 'id', 'course_id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->setDescriptionForEvent(fn (string $eventName) => "This model has been {$eventName}")
        ->useLogName('Course member');
    }
}
