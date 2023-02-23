<?php
 
$nome = '';
 
if (isset($nome) && empty($nome) == false) {
    echo $nome;
}
 
function retornarEnderecoFormatado($endereco, $quantidade_lixo)
{
    return 'Endereço: ' . $endereco . '. Quantidade de lixo: ' . $quantidade_lixo . '.';
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Meu Documento</title>
</head>
 
<body class="bg-gray-100">
    <form action="codigo2.php" method="GET" class="w-full max-w-[768px] flex flex-col p-10 border shadow mx-auto mt-10 bg-white space-y-3">
        <?php
        if (isset($_GET['endereco']) && isset($_GET['quantidadeLixo'])) :
        ?>
            <div><b>Endereço:</b> <?php echo $_GET['endereco'] ?></div>
            <div><b>Quantidade de Lixo:</b> <?php echo $_GET['quantidadeLixo'] ?></div>
            <a href="index.php" class="text-blue-500 font-bold">Voltar</a>
        <?php
        return;
        endif;
        ?>
 
        <input type="text" name="endereco" placeholder="Endereço" class="py-2 px-2 border border-gray-300 outline-none">
        <input type="text" name="complemento" placeholder="Complemento" class="py-2 px-2 border border-gray-300 outline-none">
        <input type="number" name="quantidadeLixo" placeholder="Quantidade de lixo" class="py-2 px-2 border border-gray-300 outline-none">
        <button type="submit" class="bg-blue-500 text-white font-bold py-2">Enviar</button>
    </form>
</body>
 
</html>