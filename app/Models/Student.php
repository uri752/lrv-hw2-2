<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function group()
    {
        // Доработка - не забывать про код-стайл и ставить пробелы для читаемости кода
        return $this->belongsTo(Student::class, 'group_id', 'id');
        //return $this->belongsTo(Groups::class);
    }
}
