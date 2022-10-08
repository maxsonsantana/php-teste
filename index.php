<?php
    use MaxsonCarvalho\DigitalCep\Search;

    require_once "vendor/autoload.php";

    $busca = new Search;

    $resultado = $busca->getAddressFromZipCode('29162206');

    print_r($resultado);
?>