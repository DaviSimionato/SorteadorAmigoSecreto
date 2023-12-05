<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>
<body>
    <?php 
        function sortear() {
            $pessoas1 = ['Davi','João','Luis','Nathalia','Enzo','Rafael','Ph','Isabelle'];
            $pessoas2 = ['Davi','João','Luis','Nathalia','Enzo','Rafael','Ph','Isabelle'];
            $pessoasSort1 = [];
            $pessoasSort2 = [];
            while(sizeof($pessoas1) != 0) {
                $num1 = mt_rand(0,(sizeof($pessoas1) - 1));
                $num2 = mt_rand(0,(sizeof($pessoas2) - 1));
                if($pessoas1[$num1] == $pessoas2[$num2]) {
                    echo "<br>";
                    unset($pessoasSort1,$pessoasSort2);
                    sortear();
                    break;
                }else {
                    array_push($pessoasSort1,$pessoas1[$num1]);
                    array_push($pessoasSort2,$pessoas1[$num2]);
                    echo "{$pessoas1[$num1]} ---> {$pessoas2[$num2]} <br>";
                    unset($pessoas1[$num1]);
                    unset($pessoas2[$num2]);
                    $pessoas1 = array_values($pessoas1);
                    $pessoas2 = array_values($pessoas2);
                }
            }
            var_dump($pessoasSort1);
            echo "<br>";
            var_dump($pessoasSort2);
        }
        // sortear();
    ?>
</body>
</html>