<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
	<!--Write your PHP Script here-->
    <?php
    if (isset($_GET['num'])) {
        $num = intval($_GET['num']);
        $fib1 = 1;
        $fib2 = 0;
        $fib3 = 0;
        for ($i = 0; $i < $num; $i++) {
            $fib3 = $fib1 + $fib2;
            echo $fib3 . ' ';
            $fib1 = $fib2;
            $fib2 = $fib3;
        }
    }
    ?>
</body>
</html>