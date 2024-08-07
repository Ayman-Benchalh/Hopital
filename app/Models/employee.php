<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class employee extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        "name",
        "email",
        "phone",
        "salary",
        "address",
        "qualification",
        "position",
        "status",
        "image",
    ];
    // public function doctor(): HasOne
    // {
    //     return $this->hasOne(Doctor::class, 'employee_id', 'id');
    // }

}
