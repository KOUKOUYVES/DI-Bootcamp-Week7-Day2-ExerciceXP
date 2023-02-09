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
<h1 style="text-align: center;">ExerciceXP 2 Print Your Age</h1>

<div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer Votre Nom</label>
                <input type="text" name="nom" class="form-control">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer Votre Age</label>
                <input type="number" name="age" class="form-control">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>

        <?php
            if(isset($_POST['submit']))  
            {  
                $nom = $_POST['nom']; 
                $age = $_POST['age']; 

        echo "Je suis $nom et j'ai $age ans.<br>";   
        }  
        ?>
</div>

</body>
</html>