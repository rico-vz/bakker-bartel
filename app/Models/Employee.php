<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'function_id',
        'first_name',
        'last_name',
        'date_of_birth',
        'email',
        'phone',
        'address',
        'employee_since',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function function()
    {
        return $this->belongsTo(Function_db::class);
    }
}