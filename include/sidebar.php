<div class="sidebar">
    <ul>
        <li><a class="feed" href="/">feed</a></li>
        <?php
        $query ="SELECT * FROM clothes";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        while($row = mysqli_fetch_array($result))
        {
            echo "<li><a href=\"\">".$row['brand']."</a></li><br>";
        }
        ?>
        <li><a href="">contact us</a></li>
    </ul>
</div>
