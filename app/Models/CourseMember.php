<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

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
        return $this->belongsToMany(User::class, 'id');
    }

    public function course()
    {
        return $this->belongsToMany(Course::class, 'id');
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->setDescriptionForEvent(fn(string $eventName) => "This model has been {$eventName}")
        ->useLogName('Course');
    }
}
