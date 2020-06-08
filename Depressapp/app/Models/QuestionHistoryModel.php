<?php namespace App\Models;

use CodeIgniter\Model;

class QuestionHistoryModel extends Model
{
    protected $table = 'QuestionHistory';
    protected $primaryKey = 'cod_history';
    protected $returnType = 'App\Entities\QuestionHistory';
    protected $allowedFields = ['cod_question','cod_question_item','COD_USER','reply_date', 'replay_score','reply_text'];
    protected $useTimestamps = false;

}