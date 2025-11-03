<?php
session_start();

if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../pages/quiz.php');
    exit;
}

require_once 'connexion.php';

$user_id = $_SESSION['userId'] ?? null;
if (!$user_id) {
    header('Location: ../pages/login.php');
    exit;
}

$correct_answers = [
    1 => 'c', 2 => 'b', 3 => 'a', 4 => 'b', 5 => 'd',
    6 => 'a', 7 => 'd', 8 => 'a', 9 => 'c', 10 => 'b'
];

$userAnswers = [];
$score = 0;

for ($cont = 1; $cont <= 10; $cont++) {
    $key = 'q' . $cont;
    $answer = isset($_POST[$key]) ? trim($_POST[$key]) : null;

    $userAnswers[$key] = $answer;

    if($answer !== null && isset($correct_answers[$cont]) && $answer === $correct_answers[$cont]) {
        $score++;
    }
}

$jsonAnswers = json_encode($userAnswers);

$stmt = $conn->prepare("INSERT INTO quiz (particId, quizScore, quizAnswers) VALUES (?, ?, ?)");
if ($stmt) {
    $stmt->bind_param("iis", $user_id, $score, $jsonAnswers);
    $stmt->execute();
    $stmt->close();
}

$_SESSION['quizScore'] = $score;
$_SESSION['userAnswers'] = $userAnswers;
$_SESSION['Success'] = 'Prova enviada com sucesso!';

header('Location: ../pages/quiz_result.php');
exit;
?>