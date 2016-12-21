/**
 * Created by GHILAS on 12/03/2015.
 */

function afficherSuggestion(){
    var word = $('#text').val();

    if(word.length > 0){
        $.ajax({
            url: 'suggestion.php',
            type: 'POST',
            data: {keyword: word},
            success:function(data){
                $('#list').show();
                $('#list').html(data);
            }
        });
    }else{
        $('#list').hide();
    }
}

function modifierText(item){
    $('#text').val(item);
    $('#list').hide();
}