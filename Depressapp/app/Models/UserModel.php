<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {

    protected $table = 'User';
    protected $primaryKey = 'COD_USER';
    protected $returnType = 'App\Entities\User';
    protected $allowedFields = ['DES_EMAIL', 'DES_PASSWORD', 'last_acess', 'last_reply'];
    protected $useTimestamps = false;

	public function RetornarUsuarioEmailSenha($email, $senha){

    return $this->where("DES_EMAIL", $email)
		            ->where("DES_PASSWORD", md5($senha))
                ->first();
    }

    public function RetornarUsuarioCodigo($codigo){

		$this->db->where('COD_USER',$codigo);
		return $this->db->get("User")->row();
    }

    public function ListaUsuarios(){

        $this->db->select('*');
        $this->db->from('User');
		return $query = $this->db->get()->result_object();
     }

     public function Salvar($usuario){

		if(empty($usuario['COD_USER']) || $usuario['COD_USER'] == 0){
			$this->db->insert('User',$usuario);
		}else{
			$this->db->where('COD_USER', $usuario['COD_USER']);
		    $this->db->update('User', $usuario);
		}
	}

}
