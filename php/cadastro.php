<?php
ob_start();
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'connexion.php';
    $nome = trim($_POST['nome']);
    $userName = trim($_POST['nickname']);
    $senha = trim($_POST['senha']);
    $confirm = trim($_POST['confirmar-senha']);

    if (mb_strlen($senha) < 6) {
    $_SESSION['Error'] = 'A senha deve ter pelo menos 6 caracteres.';
    header('Location: ../pages/avisoSenha6.php');
    exit;
    }

    if ($conn->query("SELECT userNick FROM user WHERE userNick = '$userName'")->num_rows > 0) {
        // esse username ja ta cadastrado
        header("Location: ../pages/avisoUserExists.php");
        exit();
    }else if ($senha !== $confirm) {
        // as senhas nao coincidem
        header("Location: ../pages/avisoWrongPass.php");
        exit();
    }else{
        $senha = password_hash($senha, PASSWORD_BCRYPT);
        $sql = "INSERT INTO user (userNome, userNick, userSenha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $userName, $senha);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            // cadastro foiiii
            header("Location: ../index.php");
            $stmt->close();
            exit();
        } else {
            // erro ao cadastra :(
            header("Location: ../pages/avisoErroCad.php");
            $stmt->close();
            exit();
        }
    }
}
ob_end_flush();
?>