<?php namespace App\Models;

use CodeIgniter\Model;

class QuestionHistoryModel extends Model
{
    protected $table = 'QuestionHistory';
    protected $primaryKey = 'cod_history';
    protected $returnType = 'App\Entities\QuestionHistory';
    protected $allowedFields = ['reply_date', 'replay_score'];
    protected $useTimestamps = false;

}