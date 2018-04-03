<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num1"/>
    M: <input type="text" name="num2"/>
    <input type="submit"/>
</form>
<ul>
    <?php
    if (isset($_GET['num1']) && isset($_GET['num2'])) {
        $num1 = intval($_GET['num1']);
        $num2 = intval($_GET['num2']);
        for ($row = 1; $row <= $num1; $row++) {
            $list = "List " . $row;
            echo "<li>$list";
            if ($num2>0) {
                echo "<ul>";
            }
            for ($col = 1; $col <= $num2; $col++) {
                $element = "Element " . $row ."." .$col;
                echo "<li>$element</li>";

            }
            if ($num2>0) {
                echo "</ul>";
            }
            echo "</li>";
        }
    }
    ?>
</ul>
</body>
</html>