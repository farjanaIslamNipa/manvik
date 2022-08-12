<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'position',
        'month',
        'year',
        'salary'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

}
