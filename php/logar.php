<?php
ob_start();

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
            $_SESSION['userId'] = $userId;
            header("Location: ../index.php");
            exit();
        } else {
            // senha incorreta :(
            header("Location: ../pages/avisoWrongPassLog.php");
            exit();
        }
    } else {
        // email n cadastrado
        header("Location: ../pages/avisoNoCad.php");
        exit();
    }

    $stmt->close();
    $conn->close();
}

ob_end_flush();
?>
