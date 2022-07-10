<?php

namespace App\Models;

use App\Models\Book;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Borrow extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }
}