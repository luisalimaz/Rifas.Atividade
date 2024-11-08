<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Rifa</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f3e8ff; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 50px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { text-align: center; color: #6a0dad; }
        form { display: flex; flex-direction: column; }
        label { margin-top: 15px; color: #6a0dad; font-weight: bold; }
        input[type="text"], input[type="number"], input[type="date"] { padding: 10px; border: 1px solid #a680ff; border-radius: 5px; font-size: 16px; }
        button { margin-top: 20px; padding: 10px; background-color: #6a0dad; color: #fff; border: none; border-radius: 5px; font-size: 16px; cursor: pointer; }
        button:hover { background-color: #5a0cba; }
    </style>
</head>
<body>

<div class="container">
    <h1>Gerador de Rifa</h1>
    <form method="POST" action="rifa.php">
        <label for="prize">Prêmio:</label>
        <input type="text" id="prize" name="prize" required>

        <label for="draw_date">Data do Sorteio:</label>
        <input type="date" id="draw_date" name="draw_date" required>

        <label for="ticket_price">Valor do Número:</label>
        <input type="number" id="ticket_price" name="ticket_price" step="0.01" required>

        <label for="ticket_quantity">Quantidade de Números:</label>
        <input type="number" id="ticket_quantity" name="ticket_quantity" required>

        <button type="submit">Gerar Rifa</button>
    </form>
</div>

</body>
</html>
</html>