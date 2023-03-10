<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable=['text'];
    
    public function page(){
       return $this->belongsTo(page::class);
    }
}
