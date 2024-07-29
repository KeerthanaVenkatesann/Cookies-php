<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        body{
            display: flex;
            justify-content:center;
            align-items:center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <table>
        <?php
        $numbers = range(1, 8);
        $columns = 7;
        $rows = ceil(count($numbers) / $columns);

        for ($i = 0; $i < $rows; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $columns; $j++) {
                $index = $i * $columns + $j;
                if (isset($numbers[$index])) {
                    echo "<td>" . $numbers[$index] . "</td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
