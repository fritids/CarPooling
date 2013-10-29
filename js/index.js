$.ajax({
            url:'index.php',
            dataType:'html',
            type:'GET',
            data:{azione:'ultimi_viaggi', index: '0', global:'1'},
            success:viaggio_visualizza
        });  