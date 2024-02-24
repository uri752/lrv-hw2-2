<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;

    public function students()
    {
        return $this->hasMany(Students::class, 'group_id', 'id'); // Метод определяет отношения объекта Группы с объектами Студенты
        //return $this->hasMany(Students::class);
    }
}
