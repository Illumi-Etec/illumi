<?php

// importação das bibliotecas e dos arquvios do PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

// Se é cliente - true | false
$cliente = $_POST['NossoCliente'];
$nomeCliente = $_POST['nomeCliente'];
$nomeEmpresa = $_POST['nomeEmpresa'];
$emailCliente = $_POST['emailContato'];
$contato = $_POST['telefoneContato'];
$interesse = $_POST['servicoInteresse'];

if (empty($cliente) || empty($nomeCliente) || empty($nomeEmpresa) || empty($contato) || empty($interesse)) {
    header('Location: ../index.php?error=1#formulario');
} else {
    $dados = array(
        'nomeCliente' => $nomeCliente,
        'isCliente' => $cliente,
        'nomeEmpresa' => $nomeEmpresa,
        'emailCliente' => $emailCliente,
        'numContato' => $contato,
        'interesse' => $interesse
    );

    $mail = new PHPMailer(true); // Passando true para ativar o tratamento de exceção

    try {
        // Configurações do e-mail
        $mail->isSMTP(); // Define o método de envio como SMTP
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP do Gmail
        $mail->SMTPAuth = true; // Habilita autenticação SMTP
        $mail->Username = 'mh16122006@gmail.com'; // E-mail do Gmail
        $mail->Password = 'uyiy eyua jnoo ovra '; // Senha de App do Gmail
        $mail->SMTPSecure = 'tls'; // Segurança tls
        $mail->Port = 587; // Porta SMTP do Gmail

        $mail->setFrom($dados['emailCliente'], 'Illumi');
        $mail->addAddress(''); // Adicione aqui o E-mail de destinário
        $mail->isHTML(true);
        $mail->Subject = 'Formulário cliente';
        $mail->Body =   "<style>h1{ text-align: center;} p{margin-left: auto;}</style>
                        <h1>Formulário Cliente</h1><br>
                        <p><b>Nome: " . $dados['nomeCliente'] ."</b></p>
                        <p><b>Nome da empresa: " . $dados['nomeEmpresa'] ."</b></p>
                        <p><b>E-mail: " . $dados['emailCliente'] ."</b></p>
                        <p><b>Tel.: " . $dados['numContato'] ."</b></p>
                        <p><b>Serviço de interesse: " . $dados['interesse'] ."</b></p>
                        <p><b>Já é cliente: " . $dados['isCliente'] ."</b></p>";
        $mail->AltBody = 'nome: ' . $dados['nomeCliente'] . '\né cliente: ' . $dados['isCliente'] . ', emailCliente: ' . $dados['nomeEmpresa'] . ', email do cliente: ' . $dados['emailCliente'] . ', tel. cliente: ' . $dados['numContato'] . ', serviço: ' . $dados['interesse'];
        $mail->CharSet = 'UTF-8';

        $mail->send();
        header('Location: ../index.php#formulario');
    } catch (Exception $e) {
        header('Location: ../index.php?error=2#formulario');
    }
}
