

$(function(){
    
    $('#start-novo-questionario').click(function(){
        $('#novoQuestionarioModal').load('/public/Home/novoQuestionarioModal',function(){
            $('#novoQuestionarioModal').modal('show');
        });
    });

});


function EditarPerguntas(){
    window.location = '/public/Perguntas';
}