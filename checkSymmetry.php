<?php
include_once "Classes/Queue.php";
include_once "Classes/Stack.php";

function checkSymmetry($str)
{
    $stack = new Stack(strlen($str));
    $queue = new Queue(strlen($str));

    for ($i = 0; $i < strlen($str); $i++) {
        $stack->push(substr($str, $i, 1));
        $queue->enqueue(substr($str, $i, 1));
    }

    while (!$stack->isEmpty()) {
        if ($stack->pop() != $queue->dequeue()) {
            return "Asymmetrical string!";
        }
        return "Symmetrical string!";
    }
}

$str = "able was I ere I saw elba";
echo checkSymmetry($str);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Kiểm tra chuỗi đối xứng sử dụng Queue</title>
</head>
<body>

</body>
</html>
