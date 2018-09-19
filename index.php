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
      $query = "SELECT * FROM clothes ORDER BY id DESC";
      $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
      while($row = mysqli_fetch_array($result))
      {
          echo "
           <div class=\"clothes\">
            <div  class=\"description_index\">";
          echo "<li><a href='product.php?id=".$row['id']."'>".$row['name']."</a></li><br>";
          echo "<li>$".$row['price']."</li><br>";
          echo "<li>".$row['brand']."</li><br>";
          echo "</div>";
          $id = $row['id'];

          ?>
          <div class="image">
            <?php
             echo "<a href='product.php?id=".$row['id']."'><img src='img/".$row['image'].".png' alt=''></a>";
 ?>

          </div>
      </div>
          <?php
      }
      ?>

    </div>

    <?php
    include ("include/footer.php");
    ?>
</body>
</html>
