<?php
    $data = '{"Concepto":"Curso de PHP", "subtotal":"200", "ID":"1"}';
    $url = "https://tareas-electrica-app.firebaseio.com/prueba.json";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);  
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/plain'));

    //Estos dos seria para que no salga error
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    

    //$response = curl_exec($ch);

    if( curl_errno($ch) ) {
        echo 'Error: '. curl_errno($ch);
    }else {
        echo 'Ya inserta';
    }

?>