<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'fathers_name',
        'phone',
        'gender',
        'nid',
        'joining_date',
        'salary',
        'img',
        'address',
        'position',
    ];

    public function advanceSalary()
    {
        return $this->hasOne(AdvanceSalary::class);
    }

}
