<?php

if ($_GET != null) {
    $cnae = $_GET['cnae'];
    
    $url_api = file_get_contents("https://servicodados.ibge.gov.br/api/v2/cnae/classes/${cnae}");
    
    $result = json_decode($url_api, true);
    
    if ($result != []) {
        foreach ($result['observacoes'] as $obs) {
            $observacao .=  $obs . '<br/>';
        }
    } else {
        $erro = 'CNAE Inválido';
    }
}
