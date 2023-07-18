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
        'folder_icon_id',
    ];


    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }

    public function tasks()
    {
        $this->hasMany(Task::class, 'folder_id');
    }


    // for the folder icons
    public function icons()
    {
        $this->belongsTo(Folder_icon::class, 'folder_icon_id');
    }
}