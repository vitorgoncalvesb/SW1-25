<?php
$produtos = array(
    array("Nome" => "Laptop", "Preço" => 1200, "Categoria" => "Eletrônicos"),
    array("Nome" => "Camiseta", "Preço" => 30, "Categoria" => "Vestuário"),
    array("Nome" => "Livro", "Preço" => 25, "Categoria" => "Livros"),
    array("Nome" => "Smartphone", "Preço" => 800, "Categoria" => "Eletrônicos"),
    array("Nome" => "Calça Jeans", "Preço" => 60, "Categoria" => "Vestuário"),
    array("Nome" => "Romance", "Preço" => 20, "Categoria" => "Livros"),
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Produtos</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        .eletrônicos {
            background-color: #e0f7fa;
        }
        .vestuário {
            background-color: #fce4ec;
        }
        .livros {
            background-color: #fffde7;
        }
    </style>
</head>
<body>
    <h2>Tabela de Produtos</h2>
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
        <?php foreach ($produtos as $produto): ?>
            <tr class="<?php echo strtolower($produto["Categoria"]); ?>">
                <td><?php echo $produto["Nome"]; ?></td>
                <td><?php echo $produto["Preço"]; ?></td>
                <td><?php echo $produto["Categoria"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>