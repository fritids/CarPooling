$(document).ready(function(){
    $('.riepilogo_viaggio').on("click",function(){
    var viaggio=$(this).attr('value');
    $.ajax({
            url:'index.php',
            dataType:'html',
            type:'GET',
            data:{controller:'ricerca', task:'riepilogo_viaggio', num_viaggio:viaggio},
            success:smista
        
        });
    });
    
   
$('#submit_ricerca').on("click",function(){
        $.ajax({
            url:'index.php',
            dataType:'html',
            type:'GET',
            data:{controller:'ricerca', task:'invio_ricerca', citta_partenza:$('#citta_partenza').val(), citta_arrivo:$('#citta_arrivo').val(), data_partenza:$('#data_partenza').val()},
            success:smista
        });    
    });


    

$('#cerca').on("click",function(){
    $.ajax({
            url:'index.php',
            dataType:'html',
            type:'GET',
            data:{controller:'ricerca', task:'cerca'},
            success:smista
        
        });
    });

/*$('.riepilogo_viaggio').on("click",function(){
    var viaggio=$(this).attr('value');
    $.ajax({
            url:'index.php',
            dataType:'html',
            type:'GET',
            data:{controller:'ricerca', task:'riepilogo_viaggio', num_viaggio:viaggio},
            success:smista
        
        });
    });*/

$('#offri').on("click",function(){
    $.ajax({
            url:'index.php',
            dataType:'html',
            type:'GET',
            data:{controller:'ricerca', task:'inserimento'},
            success:smista
        
        });
    });

$('#submit_offri').on("click",function(){
        $.ajax({
            url:'index.php',
            dataType:'html',
            type:'GET',
            data:{controller:'ricerca', task:'inserisci', citta_partenza:$('#citta_partenza').val(), citta_arrivo:$('#citta_arrivo').val(), data_partenza:$('#data_partenza').val(), note:$('#note').val()},
            success:smista
        });    
    });
}); 



function smista(data){
    $('#pagina_parziale').html(data).show('slow');
}

