<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Icons extends Model
{
    use HasFactory;

    protected $fillable = ['icon_name'];



    //public function folder()
    //{
    //return $this->hasMany(Folder::class, 'folder_icon_id');
    //}
}
