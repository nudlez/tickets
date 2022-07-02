<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'shift_date', 
        'total_replies',
    ];

    public function ticket(){
        return $this->hasMany(Ticket::class);
    }
}
