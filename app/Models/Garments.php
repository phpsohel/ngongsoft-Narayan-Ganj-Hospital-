<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Garments extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'licence_no',
        'photo',
        'status',
    ];
     public function workers(){
        return $this->hasOne(Worker::class);
    }

}
