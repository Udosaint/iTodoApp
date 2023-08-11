<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'icon',
    ];


    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }

    public function tasks()
    {
        $this->hasMany(Task::class, 'folder_id');
    }
}
