<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvanceSalary extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'position',
        'month',
        'year',
        'advance'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
