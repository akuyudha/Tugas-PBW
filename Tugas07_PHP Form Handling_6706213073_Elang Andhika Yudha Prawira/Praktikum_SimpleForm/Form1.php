<!DOCTYPE html>
<html>
    <body>
        <h2>Student Union Form</h2>
        <form method = "post", action = "php1.php">
            Nama: <input type="text" name="name">
            <br><br>
            E-mail: <input type="text" name="email">
            <br><br>
            Website: <input type="text" name="website">
            <br><br>
            Komentar: <textarea name="comment" rows="5" cols="40"></textarea>
            <br><br>
            Jenis Kelamin:
            <input type="radio" name="gender" value="perempuan">Perempuan
            <input type="radio" name="gender" value="laki-laki">Laki-laki
            <input type="radio" name="gender" value="lainnya">Lainnya
            <br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>