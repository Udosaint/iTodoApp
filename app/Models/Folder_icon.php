<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder_icon extends Model
{
    use HasFactory;

    protected $fillable = ['icon'];



    public function folders()
    {
        return $this->belongsToMany(Folder::class, 'folder_icon_id');
    }
}
