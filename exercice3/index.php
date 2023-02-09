<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br><br>
<h1 style="text-align: center;">ExerciceXP 3 Valid Integer.</h1>

<div class="container">

        <?php
        ///creation de la  function//////////
                function myFunction($num) {
        /// utilisation de l'instruction try/////
                try {
        ////on verifie le nombre avec la fonction filter_var /////
                if (!filter_var($num, FILTER_VALIDATE_INT)) {
                    throw new Exception("Not a valid integer");
                }
                } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
                } finally {
                echo "\nValidation Complete";
                }
            }
            
            $number = 2.5;
            myFunction($number);
        ?>
</div>

</body>
</html>