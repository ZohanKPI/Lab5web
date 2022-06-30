<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $bookList = [
       1 => 'Science',
       2 => 'Nature',
       3 => 'Math',
       4 => 'Physics',
       5 => 'Biology'
    ];

    public function getAll()
    {
        return $this->bookList;
    }

    public function getBookById($id)
    {
        return isset($this->bookList[$id]) ? $this->bookList[$id]: [];
    }

    public function add($name)
    {
        array_push($this->bookList, $name);
    }

    public function removeBookById($id)
    {
        unset($this->bookList[$id]);
    }
}
