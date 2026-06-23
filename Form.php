<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            width: 350px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

</head>

<body>

    <div class="container">

        <h1>Venda de Livros</h1>

        <form action="Action.php" method="post">

            <label for="tipoCliente">Tipo de Cliente</label>
            <select name="tipoCliente" id="tipoCliente">
                <option value="anonima">Pessoa Anônima</option>
                <option value="cliente">Pessoa Cliente</option>
            </select>

            <label for="cliente">Nome do Cliente</label>
            <input type="text" name="cliente" id="cliente" required>

            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf">

            <label for="livro">Livro</label>
            <input type="text" name="livro" id="livro" required>

            <label for="preco">Preço</label>
            <input type="text" name="preco" id="preco" required>

            <label for="genero">Gênero</label>
            <select name="genero" id="genero">
                <option value="Romance">Romance</option>
                <option value="Drama">Drama</option>
                <option value="Suspense">Suspense</option>
                <option value="Fantasia">Fantasia</option>
                <option value="Terror">Terror</option>
            </select>

            <label for="pagamento">Forma de Pagamento</label>
            <select name="pagamento" id="pagamento">
                <option value="credito">Cartão de Crédito</option>
                <option value="debito">Cartão de Débito</option>
                <label>Número do Cartão:</label>
                <input type="text" name="numeroCartao" required>
            </select>

            <input type="submit" value="Finalizar Venda">

        </form>

    </div>

</body>

</html>