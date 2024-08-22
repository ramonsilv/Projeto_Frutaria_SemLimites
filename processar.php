<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/css/style.css">
  <link rel="shortcut icon" href="public/img/icone.png" type="image/x-icon">
  <title>Resultados - Vendas</title>
</head>

<body>
  <div class="container">
    <?php

    $maca = 3.00;
    $banana = 1.50;
    $laranja = 2.00;
    $uva = 4.00;

    // Recebendo as quantidades de frutas vendidas a partir do formulário pelo metodo POST
    $maca_vendida = (int) $_POST['maca'];
    $banana_vendida = (int) $_POST['banana'];
    $laranja_vendida = (int) $_POST['laranja'];
    $uva_vendida = (int) $_POST['uva'];

    // Calculando o total das vendas
    $total_maca = $maca_vendida * $maca;
    $total_banana = $banana_vendida * $banana;
    $total_laranja = $laranja_vendida * $laranja;
    $total_uva = $uva_vendida * $uva;

    $vendas_total = $total_maca + $total_banana + $total_laranja + $total_uva;

    // Calculando o total de frutas vendidas
    $total_frutas = $maca_vendida + $banana_vendida + $laranja_vendida + $uva_vendida;

    // Verificando se o total de vendas ultrapassou R$ 50,00 para aplicar o desconto de 10%
    if ($vendas_total > 50.00) {
      $desconto_10 = $vendas_total * 0.10;
      $vendas_total -= $desconto_10;
      $desconto_10aplicado = "Desconto de 10% aplicado: -R$ " . number_format($desconto_10, 2);
    } else {
      $desconto_10aplicado = "Nenhum desconto de 10% foi aplicado.";
    }

    // Verifica se o número total de frutas vendidas é maior que 20 para aplicar o desconto adicional de R$ 5,00
    if ($total_frutas > 20) {
      $desconto_5 = 5.00;
      $vendas_total -= $desconto_5;
      $desconto5_aplicado = "Desconto adicional de R$ 5,00 aplicado.";
    } else {
      $desconto5_aplicado = "Nenhum desconto adicional de R$ 5,00 foi aplicado.";
    }
    // Exibe o total final e os descontos aplicados
    echo "<h1>Resumo da Venda</h1><br><br>";
    echo "<h2>Total de frutas vendidas: $total_frutas</h2><br>";
    echo "<h3>$desconto_10aplicado</h3>";
    echo "<h3>$desconto5_aplicado</h3>";
    echo "<br><br><br><h2>Total sem desconto: R$ " . number_format($total_maca + $total_banana + $total_laranja + $total_uva, 2) . "</h2>";
    echo "<h2>Total final após descontos: R$ " . number_format($vendas_total, 2) . "</h2>";
    ?>
  </div>
</body>

</html>