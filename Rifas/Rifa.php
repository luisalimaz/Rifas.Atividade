<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rifa Gerada</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f3e8ff; margin: 0; padding: 0; }
        .container { max-width: 800px; margin: 50px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #6a0dad; }
        .summary { text-align: center; color: #5a0cba; }
        .ticket { border: 1px solid #d1b3ff; padding: 20px; margin: 15px 0; border-radius: 8px; background-color: #f9f4ff; }
        .ticket-header { font-weight: bold; color: #6a0dad; text-align: center; }
        .ticket-number { font-size: 24px; font-weight: bold; text-align: center; color: #5a0cba; margin: 10px 0; }
        .ticket-info { margin-top: 10px; }
        .ticket-info p { margin: 5px 0; color: #4b0082; }
        hr { border: none; border-top: 1px dashed #d1b3ff; margin: 10px 0; }
    </style>
</head>
<body>

<div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Capturando dados do formulário
        $prize = $_POST['prize'];
        $draw_date = $_POST['draw_date'];
        $ticket_price = $_POST['ticket_price'];
        $ticket_quantity = $_POST['ticket_quantity'];

        echo "<h1>Rifa Gerada - Ação Entre Amigos</h1>";
        echo "<div class='summary'>";
        echo "<p><strong>Prêmio:</strong> " . htmlspecialchars($prize) . "</p>";
        echo "<p><strong>Data do Sorteio:</strong> " . htmlspecialchars($draw_date) . "</p>";
        echo "<p><strong>Valor de Cada Número:</strong> R$ " . number_format($ticket_price, 2, ',', '.') . "</p>";
        echo "<p><strong>Quantidade de Números:</strong> " . htmlspecialchars($ticket_quantity) . "</p>";
        echo "</div>";

        // Gerando e exibindo cada número da rifa
        for ($i = 1; $i <= $ticket_quantity; $i++) {
            echo "<div class='ticket'>";
            echo "<div class='ticket-header'>Ação Entre Amigos</div>";
            echo "<div class='ticket-number'>Número: " . str_pad($i, 4, '0', STR_PAD_LEFT) . "</div>";
            echo "<div class='ticket-info'>";
            echo "<p><strong>Prêmio:</strong> " . htmlspecialchars($prize) . "</p>";
            echo "<p><strong>Valor:</strong> R$ " . number_format($ticket_price, 2, ',', '.') . "</p>";
            echo "<p><strong>Data:</strong> " . htmlspecialchars($draw_date) . "</p>";
            echo "<hr>";
            echo "<p><strong>Nome:</strong> ________</p>";
            echo "<p><strong>Endereço:</strong> ________</p>";
            echo "<p><strong>Fone:</strong> ________</p>";
            echo "</div>";
            echo "</div>";
        }
    }
    ?>
</div>

</body>
</html>