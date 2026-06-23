<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Livros</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
            width: 400px;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
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

        <div id="cpfDiv">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" id="cpf">
        </div>

        <label for="livro">Livro</label>
        <input type="text" name="livro" id="livro" required>

        <label for="preco">Preço</label>
        <input type="number" name="preco" id="preco" required>

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
        </select>

        <label for="numeroCartao">Número do Cartão</label>
        <input type="text" name="numeroCartao" id="numeroCartao" required>

        <div id="parcelasDiv">
            <label for="numeroParcelas">Número de Parcelas</label>
            <input type="number" name="numeroParcelas" id="numeroParcelas" min="1" value="1">
        </div>

        <input type="submit" value="Finalizar Venda">

    </form>

</div>

<script>

const tipoCliente = document.getElementById("tipoCliente");
const cpfDiv = document.getElementById("cpfDiv");
const cpfInput = document.getElementById("cpf");

const pagamento = document.getElementById("pagamento");
const parcelasDiv = document.getElementById("parcelasDiv");
const parcelasInput = document.getElementById("numeroParcelas");

function atualizarCliente() {

    if (tipoCliente.value === "anonima") {
        cpfDiv.style.display = "none";
        cpfInput.required = false;
        cpfInput.value = "";
    } else {
        cpfDiv.style.display = "block";
        cpfInput.required = true;
    }

}

function atualizarPagamento() {

    if (pagamento.value === "debito") {
        parcelasDiv.style.display = "none";
        parcelasInput.required = false;
    } else {
        parcelasDiv.style.display = "block";
        parcelasInput.required = true;
    }

}

tipoCliente.addEventListener("change", atualizarCliente);
pagamento.addEventListener("change", atualizarPagamento);

atualizarCliente();
atualizarPagamento();

</script>

</body>
</html>