<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "title","category","description","image","content","rating","created_at","updated_at"
    ];
}
