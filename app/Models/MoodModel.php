<?php
namespace App\Models;
use CodeIgniter\Model;
class MoodModel extends Model
{
    protected $table = 'moods';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = [
    'user_id',
    'mood',
    'journal',
    'mood_date',
    'created_at'
];
}