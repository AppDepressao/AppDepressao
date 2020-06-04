<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'User';
    protected $primaryKey = 'COD_USER';
    protected $returnType = 'App\Entities\User';
    protected $allowedFields = ['DES_EMAIL', 'DES_PASSWORD', 'last_acess', 'last_reply'];
    protected $useTimestamps = false;

	public function RetornarUsuarioEmailSenha($email, $senha){

		$this->db->where("DES_EMAIL", $email);
		$this->db->where("DES_PASSWORD", md5($senha));
        $dados = $this->db->get("User")->row();
        
		return $dados;
	}


    

}