<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
    public $timestamps=false;
protected $table = 'employee';
// column sa table
protected $fillable = [
'employee_firstname','employee_lastname','id'
];
}