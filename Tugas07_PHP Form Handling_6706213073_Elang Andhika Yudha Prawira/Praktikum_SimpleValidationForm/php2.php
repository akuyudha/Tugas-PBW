<!DOCTYPE html>
<html>
    <?php
        echo "<h2>Your Input:</h2>";
        echo "Terima kasih, <b>". $_POST["name"]."</b><br>";
        echo "<br>";
        echo "E-mail kamu adalah: ". $_POST["email"]."<br>";
        echo "<br>";
        echo "Website kamu adalah  ". $_POST["website"]."<br>";
        echo "<br>";
        echo "Komentarmu ". $_POST["comment"]."<br>";
        echo "<br>";
        echo "Kamu adalah seorang ". $_POST["gender"]."<br>";
    ?>
</html>