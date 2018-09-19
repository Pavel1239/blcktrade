<!doctype html>
<html lang="en">
<?php

include ("include/head.php")
?>

<body>
    <div class="wrapper">
        <?php
        require_once ("include/header.php");
        require_once ("include/sidebar.php");
        ?>
        <div class="main">

                <?php
                $id = $_GET['id'];
                $query = "SELECT * FROM clothes WHERE id =". $id;
                $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
                while($row = mysqli_fetch_array($result))
                {
                    echo "
                     <div class=\"clothes\">
                      <div  class=\"description\">";
                    echo "<li>".$row['name']."</li><br>";
                    echo "<li>$".$row['price']."</li><br>";
                    echo "<li>".$row['brand']."</li><br>";
                    echo "<li>".$row['description']."</li><br>";

                    echo "</div>";

                    $query_photo ="SELECT * FROM photo WHERE id_clothes =". $id;
                    $result_photo = mysqli_query($link, $query_photo) or die("Ошибка " . mysqli_error($link));
                    while($row_photo = mysqli_fetch_array($result_photo))
                    {
                    ?>
                    <div class="image">
                        <img src="img/<?php echo $row_photo['path']?>.png" alt="">
                    </div>
                    <?php
                }


                echo "</div>";
                }
                ?>

    </div>

    <?php
    include ("include/footer.php");
    ?>
</body>
</html>
