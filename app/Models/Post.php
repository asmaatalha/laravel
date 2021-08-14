<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'nameProduct',
        'description',
        'categorie',
    ];
    
    protected $casts = [
        'create_at' => 'Y/m/d',
        'update_at' => 'datetime',
    ];
}
