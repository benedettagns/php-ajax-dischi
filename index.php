<?php 

include 'db/database.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <img src="img/logo-spotify.png" alt="">
    </header>

    <div class="container">
        <?php 
        foreach($dischi as $key => $value) {
            echo "<div class=\"dischi-box\">";
            echo '<img' . 'src="' . $value['poster'] . '">'; 
            echo "<p class=\"transform\">" . $value['title'] . "</p>";
            echo "<p>" . $value['author'] . "</p>";
            echo "<p>" . $value['year'] . "</p>";
            echo "</div>";
        };
        ?>
        
    </div>
</body>
</html>