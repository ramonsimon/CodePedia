<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubComments extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function User()
    {
        return $this->hasMany(User::class);
    }


}
