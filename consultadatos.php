<?php
    $url = "https://tareas-electrica-app.firebaseio.com/prueba.json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Estos dos seria para que no salga error
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);

    curl_close($ch);

    //print_r($response);
    $data = json_decode($response, true);

    foreach($data as $key => $value) {
        echo $data[$key]["Concepto"]. '<br>';
    }

?>