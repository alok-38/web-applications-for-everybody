<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Understanding Data Types in PHP</title>
</head>

<body>
    <?php
    // Coercive mode
    function sumOfInts(int ...$ints)
    {
        return array_sum($ints);
    }

    var_dump(sumOfInts(2, '3', 4.1));
    ?>
</body>

</html>