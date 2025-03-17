<?php


function evaluateQuiz(array $questions, array $answers): int {
    $score = 0;
    foreach ($questions as $index => $question) {
        if (isset($answers[$index]) && $answers[$index] === $question['correct']) {
            $score++;
        }
    }
    return $score;
}


$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];

$answers = [];


foreach ($questions as $index => $q) {
    echo ($index + 1) . ". " . $q['question'] . "\n";
    $answers[$index] = trim(readline("Your answer: "));
}


$score = evaluateQuiz($questions, $answers);
$total = count($questions);


echo "\nYou scored $score out of $total.\n";


if ($score === count($questions)) {
    echo "Excellent job!\n";
} elseif ($score > 1) {
    echo "Good effort!\n";
} else {
    echo "Better luck next time!\n";
}
