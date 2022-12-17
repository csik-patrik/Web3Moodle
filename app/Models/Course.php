<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'category_id',
        'owner_id'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
