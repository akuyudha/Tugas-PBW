<!DOCTYPE html>
<html>
    <?php
        echo "Terima kasih , <b>". $_POST["name"]."</b><br>";
        echo "E-mail kamu adalah: ". $_POST["email"]."<br>";
        echo "Website kamu adalah ". $_POST["website"]."<br>";
        echo "Komentarmu ". $_POST["comment"]."<br>";
        echo "Kamu adalah seorang ". $_POST["gender"]."<br>";
    ?>
</html>