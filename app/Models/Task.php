<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
        'user_id',
        'forlder_id',
        'task_date',
        'reminder'
    ];


    public function user()
    {
        $this->belongsTo(User::class, 'user_id');
    }

    public function folders()
    {
        $this->belongsTo(Folder::class, 'folder_id');
    }
}
