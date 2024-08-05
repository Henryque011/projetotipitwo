<?php

// RECONHECER ESTRUTURA PHPMAILER 
require_once("phpmailer/src/PHPMailer.php");
require_once("phpmailer/src/SMTP.php");
$ok = 0;

// Estrutura para envio de email
try{
    if(isset($_POST["email"])){

        $nome        = $_POST["nome"];
        $telefone    = $_POST["tel"];
        $email       = $_POST["email"];
        $mensagem    = $_POST["mensagem"];
        $assunto     = "CONTATO VIA SITE";

        $phpmail = new PHPMailer\PHPMailer\PHPMailer(); //Gerando variavel de email
        $phpmail-> isSMTP(); //envio por SMTP
        $phpmail-> SMTPDebug = 0;

        $phpmail-> Host = "smtp.hostinger.com"; //SMTP Servidor de Email
        $phpmail-> Port = 465; //Porta do Servidor SMTP

        $phpmail-> SMTPSecure = 'ssl'; //Certificado / Autenticação SMTP
        $phpmail-> SMTPAuth = true; //Caso necessite ser autenticadp

        $phpmail-> Username = "tipitwo@tipi02.smpsistema.com.br"; //Email SMTP
        $phpmail-> Password = "Senac@tipitwo01"; //Senha SMTP
        $phpmail-> IsHTML(true); //Trabalhar com estrutura HTML
        $phpmail-> setFrom("tipitwo@tipi02.smpsistema.com.br" , $nome); //Email do remetente
        $phpmail-> addAddress("tipitwo@tipi02.smpsistema.com.br" , $assunto); //Email do destinatário

        $phpmail-> Subject = $assunto; //Assunto enviado pelo método POST

        // Estutura do Email
        $phpmail-> msgHTML("Nome: $nome <br>
                            E-Mail: $email <br>
                            Telefone: $telefone <br>
                            Mensagem: $mensagem");

        $phpmail-> AltBody = "Nome: $nome \n
                            E-Mail: $email \n
                            Telefone: $telefone \n
                            Mensagem: $mensagem";

        if($phpmail -> send()){
            $ok=1;
            echo "Mensagem enviada com sucesso!";
            require_once("index.php");
        }else{
            $ok=2;
            echo "Não foi possivel enviar a mensagem. Erro: " .$phpmail->ErrorInfo;
        }
    }
}catch(Execption $e){
// Caso dê erro ao enviar o email 

}
?>