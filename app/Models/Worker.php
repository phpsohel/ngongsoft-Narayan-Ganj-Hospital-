<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable = [
        'garment_id',
        'name',
        'phone',
        'email',
        'designation',
        'nid_no',
        'gender',
        'blood_group',
    ];
    public function garments(){
        return $this->belongsTo(Garments::class, 'garment_id', 'id');
    }
}
