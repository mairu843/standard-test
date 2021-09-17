<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function getFullNameAttribute()
    {
        return $this->last_name . $this->first_name;
    }

    // protected $fillable = ['last_name', 'first_name', 'email', 'postcode', 'address', 'building-name', 'opinion'];
    protected $fillable = ['fullname', 'email', 'postcode', 'address', 'building-name', 'opinion'];
}
