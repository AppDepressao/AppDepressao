


<div class="col-lg-12 col-md-12 col-sm-6 col-6">
    <div class="row">
        <div class="col">
            <h4>- Pergunta: </h4>
            <h4><?php echo $Descricao?></h4>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <?php foreach ($ListaOpcoes as $opcao): ?>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="opcao_radio" id="opcao_<?php echo $opcao->cod_question_item?>" />
                    <label class="form-check-label" for="opcao_<?php echo $opcao->cod_question_item?>"><?php echo $opcao->question_item_desc?></label>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    
</div>

