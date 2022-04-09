<!DOCTYPE html>
<html>

<?php
    //1
    $string = "D3 Rekayasa Perangkat Lunak Aplikasi";

    echo "<br>".substr($string, 3);
    echo "<br>".substr($string, 8);
    echo "<br>".substr($string, 3,24);

    //2 replace
    $strings = array (
        'Saya adalah Abdullah',
        'Saya punya seekor kucing yang sangat lucu',
        'Setiap hari ku ajak dia bermain'
    );
    $search = array(
        'Abdullah',
        'kucing',
        'lucu',
        'bermain'
    );
    $replace = array (
        'Abdurrahman',
        'bebek',
        'gemuk',
        'berenang'
    );
    $replaced = str_replace ( $search, $replace, $strings );
    
    foreach ($replaced as $key => $value) {
    echo $value."<br>";
    }

    //3 gabungan
    $str = 'My Password';
    $user = 'username';
    echo sprintf("The md5 hashed password of %s is: %s\n", $str, md5($str.$user));
    echo '<br>';
    echo sprintf("The sha1 hashed password of %s is: %s\n",$str, sha1($str.$user));
    echo '<br>';
    echo sprintf("The gost hashed password of %s is: %s\n",$str, hash('gost', $str.$user));
    echo '<br>';

    //4 prima
    function cekPrima ($n, $m) {
        if ($n >= $m) {
            return false;
        }else {
            $jumlah = 0;
            for ($n; $n <= $m; $n++) {
                $counter = 0;
                for ($i = 1; $i <= $m; $i++) {
                    if ($n % $i ==0) {
                        $counter++;
                    }
                }
                if ($counter == 2) {
                    echo "$n, ";
                    $jumlah++;
                }    
            }
            echo 'ditemukan '.$jumlah.' bilangan prima<br>';
        }
    }
    cekPrima(1, 11);

    //5 prima efisien
    function isPrime ($number) {
        if ($number == 1) {
            return false;
        }
        if ($number == 2) {
            return true;
        }
        $x = sqrt($number);
        $x = floor($x);

        for ($i = 2; $i <= $x; $i++) {
            if($number % $i == 0) {
                break;
            }
        }
        
        if ($x == $i-1) {
            return true;
        }else {
            return false;
        }
    }
    function cekPrima2 ($n, $m) {
        $jumlah = 0;
        for ($i = $n; $i <= $m; $i++) {
            if (isPrime($i)) {
                echo $i.', ';
                $jumlah++;
            }
        }
        echo "<br> jumlah bilangan prima ".$jumlah."<br>";
    }
    cekPrima2 (0, 100);
?>
</html>