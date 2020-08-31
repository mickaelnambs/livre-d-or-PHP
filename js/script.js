$(document).ready(function(){
    recupMessage();
    $('.formulaire').submit(function(){
        var name = $('.name').val();
        var message = $('.message').val();

        $.post('send.php', {name:name,message:message}, function(data){
            $('.return').html(data).slideDown();
            $('.name').val('');
            $('.message').val('');
            recupMessage();
        });
    return false;
    });

    function recupMessage(data) {
        $.post('recup.php', function(data) {
            $('.afficher').html(data);
        });
    }

    setInterval(recupMessage,1000);
});