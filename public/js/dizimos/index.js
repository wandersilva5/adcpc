$(document).ready(function(){
    $('select[name=descricao]').change(function(){
        var userId = $(this).children("option:selected").val();
        // var userId = $('select[name=descricao]').val;
        $('#userID').val(userId);
        console.log(userId);
    });
});
