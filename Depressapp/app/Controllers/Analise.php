<?php namespace App\Controllers;

include "Base.php";

class PerguntaAnalise{

}
class OpcoesAnalise{

}

class Analise extends BaseController{

	public function index()
	{
		return view('Analise/index');
    }
    
    public function View()
	{
        $questionHistoryModel = new \App\Models\QuestionHistoryModel();
        $questionModel = new \App\Models\MainQuestionsModel();
        $questionItensModel = new \App\Models\QuestionItensModel();
        // $perguntas = $questionModel->join('QuestionItens', 'MainQuestions.cod_question = QuestionItens.cod_question','inner')->findAll(); 
        $perguntas = $questionModel->orderBy('question_type','ASC')->findAll(); 
        $lista = [];


        $dt_ini = $this->request->getVar('dt_ini');
        $dt_end = $this->request->getVar('dt_end');

        foreach ($perguntas as $pergunta) {
            $item = new PerguntaAnalise();
            // $item->cod_question = $pergunta->cod_question;
            $item->question_desc = $pergunta->question_desc;
            // $item->question_type = $pergunta->question_type;
            // $item->question_mode = $pergunta->question_mode;
            $item->question_symp = $pergunta->question_symp;
            // $item->has_justification = $pergunta->has_justification;
            // $item->justification = $pergunta->justification;

            $item->options = [];

            $questionItens = $questionItensModel->where('cod_question',$pergunta->cod_question)->findAll();

            foreach ($questionItens as $qItem) {
                $option = new OpcoesAnalise();
                // $option->cod_question_item = $qItem->cod_question_item;
                $option->question_item_desc = $qItem->question_item_desc;
                if($dt_ini != null && $dt_end != null)
                    $history = $questionHistoryModel->where('reply_date >=',$dt_ini)->where('reply_date <=', $dt_end)->where('cod_question_item',$qItem->cod_question_item);
                else
                $history = $questionHistoryModel->where('cod_question_item',$qItem->cod_question_item);
                try {
                    $option->reply_total = $history->countAllResults();
                    $option->justification_list = $history->asArray()->where('cod_question_item',$qItem->cod_question_item)->where('justification !=', null)->select('justification')->findAll();
                    $option->reply_list = $history->asArray()->where('cod_question_item',$qItem->cod_question_item)->where('reply_text !=', null)->select('reply_text')->findAll();
    
                } catch (\Throwable $th) {
                    $option->reply_total = 0;
                    $option->justification_list = null;
                    $option->reply_list = null;
                }
              
                array_push($item->options, $option);
            }

           
            
            array_push($lista, $item);
        }

        $data["lista"]= $lista;

        // $TotalSintomas = $questionHistoryModel
        //                               ->asArray()
        //                               ->join('QuestionItens','QuestionHistory.cod_question_item = QuestionItens.cod_question_item', 'inner')
        //                               ->join('MainQuestions','QuestionHistory.cod_question=MainQuestions.cod_question', 'inner')
        //                               ->where('MainQuestions.question_type',1)
        //                               ->groupBy('MainQuestions.question_symp')
        //                               ->select('MainQuestions.question_symp sintoma, SUM(QuestionItens.question_item_desc) total')
        //                               ->findAll();

        // $totalDepressao = array_filter($TotalSintomas, function($item){
        //         if($item['sintoma'] == 0)
        //             return $item['total'];
        // });

        // $totalAnsiedade = array_filter($TotalSintomas, function($item){
        //     if($item['sintoma'] == 1)
        //         return $item['total'];
        // });

        // $totalStress = array_filter($TotalSintomas, function($item){
        //     if($item['sintoma'] == 2)
        //         return $item['total'];
        // });

        // $data["totalDepressao"]= $totalDepressao;
        // $data["totalAnsiedade"]= $totalAnsiedade;
        // $data["totalStress"]= $totalStress;


		return view('Analise/View',$data);
	}


	
}
