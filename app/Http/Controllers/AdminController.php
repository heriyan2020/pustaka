<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $book = Book::all()->count();
        $student = Student::all()->count();;
        $borrow = Borrow::all()->count();;
        return view('admin.pages.index', compact('book', 'student', 'borrow'));
    }
}