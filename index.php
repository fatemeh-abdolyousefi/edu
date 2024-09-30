<?php
$questions = [
    0 => [
        'question' => '10+5=?',
        'options' => [15, 5, 3, 2],
        'answer' => 0,
    ],
    1 => [
        'question' => '2!=?',
        'options' => [4, 3, 5, 2],
        'answer' => 3,
    ],
    2 => [
        'question' => '2*2=?',
        'options' => [1, 3, 4, 2],
        'answer' => 2,
    ],
    3 => [
        'question' => '2/2=?',
        'options' => [1, 3, 4, 2],
        'answer' => 0,
    ],
    4 => [
        'question' => '5-3=?',
        'options' => [1, 2, 3, 5],
        'answer' => 1,
    ],
    5 => [
        'question' => '10/2=?',
        'options' => [5, 10, 2, 1],
        'answer' => 0,
    ],
    6 => [
        'question' => '7+3=?',
        'options' => [8, 9, 10, 11],
        'answer' => 2,
    ],
    7 => [
        'question' => '6*6=?',
        'options' => [36, 30, 42, 24],
        'answer' => 0,
    ],
    8 => [
        'question' => '9/3=?',
        'options' => [3, 6, 9, 12],
        'answer' => 0,
    ],
    9 => [
        'question' => '8+2=?',
        'options' => [8, 9, 10, 12],
        'answer' => 2,
    ],
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Quiz</h1>
    <form action="result.php" method="post">
        <?php $n = 1; ?>
        <?php foreach ($questions as $qkey => $question): ?>
            <div class="card mb-2">
                <div class="card-body">
                    <h3><?php echo $n; $n++; ?>) <?php echo $question['question']; ?></h3>
                    <?php foreach ($question['options'] as $key => $option): ?>
                        <div class="form-check">
                            <input class="form-check-input" value="<?php echo $key; ?>" type="radio" name="options_<?php echo $qkey; ?>"
                                   id="options_<?php echo $qkey; ?>_<?php echo $key; ?>">
                            <label class="form-check-label" for="options_<?php echo $qkey; ?>_<?php echo $key; ?>">
                                <?php echo $option; ?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary w-100">Submit</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
