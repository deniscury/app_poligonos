<?php
    require __DIR__."/vendor/autoload.php";

    use src\Poligono;
    use src\poligonos\Quadrado;
    use src\poligonos\Retangulo;

    $poligono = new Poligono();
    $retangulo = new Retangulo();
    $quadrado = new Quadrado();

    $poligono->setForma((object)$retangulo);

    $poligono->getForma()->setAltura(5);
    $poligono->getForma()->setLargura(10);

    echo "<h3>Área do Retângulo: ".$poligono->getArea()."</h3>";

    $poligono->setForma((object)$quadrado);

    $poligono->getForma()->setTamanho(5);

    echo "<h3>Área do Quadrado: ".$poligono->getArea()."</h3>";
