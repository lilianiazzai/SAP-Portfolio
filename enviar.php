<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_cliente = $_POST['email'];
    $data = date("Y-m-d H:i:s");

    // O caminho do seu arquivo
    $arquivo = 'emails_newsletter.csv';

    // Prepara a linha: Data, E-mail
    $linha = $data . "," . $email_cliente . "\n";

    // Salva no arquivo (o 'a' significa adicionar ao final, sem apagar o que já existe)
    file_put_contents($arquivo, $linha, FILE_APPEND);

    echo "Inscrição realizada com sucesso!";
}
?>