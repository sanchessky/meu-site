<?php
// login.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obter dados do formulário
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    // Validar login e senha (exemplo simples)
    if ($login == 'Adm_sanches' && $senha == 'admin') {
        // Autenticação bem-sucedida
        header('Location: teste.html');
        exit();
    } else {
        // Falha na autenticação
        echo "<script>alert('Usuário ou senha incorretos'); window.location.href='index.html';</script>";
    }
} else {
    // Redirecionar para a página de login se acessar diretamente
    header('Location: teste.html');
    exit();
}
?>
