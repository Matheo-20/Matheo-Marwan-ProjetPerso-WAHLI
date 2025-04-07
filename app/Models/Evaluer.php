<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluer extends Model
{
    protected $table = 'evaluers'; 
    protected $fillable = ['client_id', 'plat_id', 'commentaire', 'note'];
}
