<?php

// class contohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "halo" . self::$angka++ . "kali.";
//     }
// }

// echo contohStatic::$angka;
// echo "<br>";
// echo contohStatic::halo();
// echo "<hr>";
// echo contohStatic::halo();


class contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "halo." . self::$angka++ . "kali. <br>";
    }
}

$objek = new contoh;
echo $objek->halo();
echo $objek->halo();
echo $objek->halo();

echo "<hr>";

$objek2 = new contoh;
echo $objek2->halo();
echo $objek2->halo();
echo $objek2->halo();
