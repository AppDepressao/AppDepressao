<?= $this->extend('_Layout') ?>

<?= $this->section('content') ?>


<script>
    var _ArrayPerguntas = [];
    var _currentPergunta = 0;
    $(function(){
        _ArrayPerguntas = JSON.parse('<?php echo $arrayPerguntas ?>');
        CarregarPergunta();

    })

    function CarregarPergunta(type = null){
        index = _currentPergunta;
        if(type != null){
            switch(type){
                case 0: // -
                    if(index > 0)
                        index -= 1;
                    break;
                case 1: // +
                    if(index < _ArrayPerguntas.length)
                        index += 1;
                    break;
            }
        }

        $('#main-pergunta').load("/Questionario/loadPergunta",{cod_question: _ArrayPerguntas[index].key},function(){
            _currentPergunta = index;

            if(index == 0)
            $('#p-a').attr('disabled',true);
            else
                $('#p-a').removeAttr('disabled');

            if(index == _ArrayPerguntas.length - 1)
                $('#p-p').attr('disabled',true);
            else
                $('#p-p').removeAttr('disabled');
            })


    }

</script>

<div class="col-lg-12 col-md-12 col-sm-6 col-6">
    <div class="row" id="title-bar">
        <div class="col">
            <span class="view-title"> Questionário Sócio-Demográfico</span>
        </div>

    </div>
   
    <div class="row">
        <div class="col-12" id="main-pergunta">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <button class="btn btn-outline-dark" id="p-a" onclick="CarregarPergunta(0)"><i class="fa fa-angle-left"></i> Anterior</button>
            <button class="btn btn-outline-dark" id="p-p" onclick="CarregarPergunta(1)">Próximo <i class="fa fa-angle-right"></i></button>
            <button class="btn btn-success"><i class="fa fa-check"></i> Concluir</button>
        </div>
    </div>
</div>


<?= $this->endSection() ?>