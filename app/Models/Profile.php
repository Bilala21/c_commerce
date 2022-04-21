<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable =[
        "profileable_id",
        "profileable_type"
    ];


    public function profileAble(){
        return $this->morphTo();
    }
}
