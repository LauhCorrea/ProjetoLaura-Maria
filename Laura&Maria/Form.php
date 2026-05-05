<?php
// Simulação de dados (normalmente viriam do banco)
$clientes = [
    "João Silva" => "João Silva",
    "Maria Souza" => "Maria Souza"
];

$livros = [
    1 => "Dom Casmurro",
    2 => "Caroline",
    3 => "Frankestein"
];
?>

<form method="post" action="Action.php">

    <h2>Realizar Venda</h2>

    <!-- Cliente -->
    <label>Cliente:</label>
    <select name="cliente">
        <?php foreach ($clientes as $id => $nome): ?>
            <option value="<?= $id ?>"><?= $nome ?></option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <!-- Livros -->
    <label>Livros:</label><br>
    <?php foreach ($livros as $id => $titulo): ?>
        <input type="checkbox" name="livros[]" value="<?= $id ?>">
        <?= $titulo ?><br>
    <?php endforeach; ?>

    <br>

    <!-- Preço total -->
    <label>Preço total:</label>
    <input type="text" name="preco">

    <br><br>

    <button type="submit">Finalizar Venda</button>

</form>