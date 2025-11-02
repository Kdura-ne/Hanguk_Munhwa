<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'connexion.php';
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirm = $_POST['confirmar-senha'];

    if ($conn->query("SELECT userEmail FROM user WHERE userEmail = '$email'")->num_rows > 0) {
        // esse email ja ta cadastrado
        $_SESSION['msg_id'] = 1;
        header("Location: ../html/cad.php");
        exit();
    }else if ($senha !== $confirm) {
        // as senhas nao coincidem
        $_SESSION['msg_id'] = 2;
        header("Location: ../html/cad.php");
        exit();
    }else{
        $senha = password_hash($senha, PASSWORD_BCRYPT);
        $sql = "INSERT INTO user (userNome, userEmail, userSenha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senha);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            // cadastro foiiii
            $_SESSION['msg_id'] = 4;
            header("Location: ../html/login.php");
            $stmt->close();
            exit();
        } else {
            // erro ao cadastra :(
            $_SESSION['msg_id'] = 3;
            header("Location: ../html/cad.php");
            $stmt->close();
            exit();
        }
    }

    
}