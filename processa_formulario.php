<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['telefone']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    $linha = "Nome: $nome\nEmail: $email\nTelefone: $telefone\nMensagem: $mensagem\n---\n";

    $arquivo = 'mensagens.txt';

    if (file_put_contents($arquivo, $linha, FILE_APPEND)) {
        echo "Mensagem salva com sucesso!";
    } else {
        echo "Erro ao salvar a mensagem!";
    }
} else {
    echo "Método inválido!";
}
?>
