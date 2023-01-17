<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Function_db extends Model
{
    use HasFactory;
    protected $table = 'functions';

    protected $fillable = [

        'name',
        'salary',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}