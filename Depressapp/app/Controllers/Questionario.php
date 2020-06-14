<?php namespace App\Controllers;

include "Base.php";

use \App\Models as Models;
use \App\Classes as Classes;
class Questionario extends BaseController{
	
	public function index()
	{
		
		return view('Questionario/index');
	}

	public function Resultados(){

		return view('Questionario/Resultados');

	}

	public function QuestionarioSocio(){

		 $perguntas = new Models\MainQuestionsModel();
		 $list = $perguntas->where('question_type', \App\Models\QuestionType::socio_demografico)->findAll();
		 $array = [];
		 $index = 0;
		 foreach ($list as $pergunta) {
			$item = new Classes\ArrayQuestion();
			$item->key = $pergunta->cod_question;
			$item->index = $index; 
			$item->reply_text = NULL;
			$item->justification = NULL;
			$index += 1;
			array_push($array,$item);
		 }
		$data["arrayPerguntas"] = \json_encode($array); 

		return view('Questionario/QuestionarioSocio',$data);
	}

	public function QuestionarioAutoAvaliativo(){

		$perguntas = new Models\MainQuestionsModel();
		$list = $perguntas->where('question_type', \App\Models\QuestionType::auto_avaliacao)->findAll();
		$array = [];
		$index = 0;
		foreach ($list as $pergunta) {
		   $item = new Classes\ArrayQuestion();
		   $item->key = $pergunta->cod_question;
		   $item->reply_text = NULL;
		   $item->justification = NULL;
		   $item->index = $index; 
		   $index += 1;
		   array_push($array,$item);
		}
	   $data["arrayPerguntas"] = \json_encode($array); 

	   return view('Questionario/QuestionarioAutoAvaliativo',$data);
   }

	

	public function loadPergunta(){

		$cod_question = $this->request->getVar('cod_question');
		$questionModel = new Models\MainQuestionsModel();

		$question = $questionModel->find($cod_question);


		$data["question"]= $question;


		$questionItemModel = new \App\Models\QuestionItensModel();
		$data["ListaOpcoes"] = $questionItemModel->where('cod_question', $cod_question)->findAll();
		
	

		return view('Questionario/_pergunta',$data);

	}

	public function SubmitQuestionario(){

		$var = $this->request->getVar('ListaRespostas');
		
		$ListaRespostas = json_decode($var, true);
		$questionHistoryModel = new \App\Models\QuestionHistoryModel();
		
			foreach ($ListaRespostas as $resposta) {
				$cod_question = $resposta['cod_question'];

				$questionHistory= new \App\Entities\QuestionHistory();

				$questionModel = new Models\MainQuestionsModel();
				

				$question = $questionModel->find($cod_question);

				switch($question->question_mode){
					case \App\Models\QuestionMode::multipla_escolha:
						$respostas_selecionadas = $resposta['cod_question_item'];
						foreach($respostas_selecionadas as $cod_question_item){
							$questionHistory->cod_question = $cod_question;
							$questionHistory->cod_question_item = $cod_question_item;
							$questionHistory->justification = $resposta['justification'];
							$questionHistory->reply_date = date('Y-m-d H:i:s');
							$questionHistory->COD_USER = 1;
							$questionHistory->replay_score = 0;
							$questionHistoryModel->save($questionHistory);
						}
					break;

					case \App\Models\QuestionMode::descritiva:
						$questionHistory->cod_question = $cod_question;
						$questionHistory->cod_question_item = $resposta['cod_question_item'];
						$questionHistory->justification = $resposta['justification'];
						$questionHistory->reply_date = date('Y-m-d H:i:s');
						$questionHistory->COD_USER = 1;
						$questionHistory->replay_score = 0;
						$questionHistory->reply_text = $resposta['reply_text'];
						$questionHistoryModel->save($questionHistory);
						
					break;
					case \App\Models\QuestionMode::unica_escolha:
						$questionHistory->cod_question = $cod_question;
						$questionHistory->cod_question_item = $resposta['cod_question_item'];
						$questionHistory->reply_date = date('Y-m-d H:i:s');
						$questionHistory->justification = $resposta['justification'];
						$questionHistory->COD_USER = 1;
						$questionHistory->replay_score = 0;
						$questionHistoryModel->save($questionHistory);
						
					break;

				}


				
			}
		return "true";


	}


}
