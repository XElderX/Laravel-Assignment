<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Company extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name', 'email', 'website'
    ];
    
    public function employee(){
        return $this->hasMany(Employee::class);
    }
}

