<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';
    protected $fillable = ['name', 'first_name', 'registration_number', 'cycle', 'level', 'year', 'photo'];
}
