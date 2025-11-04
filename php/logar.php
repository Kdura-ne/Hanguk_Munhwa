<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = trim($_POST['username']);
    $senha = trim($_POST['senha']);

    require_once 'connexion.php';

    $sql = "SELECT userId, userSenha FROM user WHERE userNick = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $userName);
    $stmt->execute();
    $stmt->store_result();

    if  ($stmt->num_rows > 0) {
        $stmt->bind_result($userId, $hashedSenha);
        $stmt->fetch();

        if (password_verify($senha, $hashedSenha)) {
            // tudo deu certo :)
            $_SESSION['msg_id'] = 7;
            $_SESSION['userId'] = $userId;
            header("Location: ../index.php");
            exit();
        } else {
            // senha incorreta :(
            $_SESSION['msg_id'] = 5;
            header("Location: ../pages/login.php");
        }
    } else {
        // email n cadastrado
        $_SESSION['msg_id'] = 6;
        header("Location: ../pages/login.php");
    }

    $stmt->close();
    $conn->close();
}
