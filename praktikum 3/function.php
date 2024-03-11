<?php

function tambah ($nilai1, $nilai2)
{
    echo $nilai1 + $nilai2 ."<br>";
}

tambah(1, 2);

function hitungUmur($tahunLahir, $tahunSekarang = 2024)
{
     echo $tahunSekarang - $tahunLahir;

}

hitungUmur (2004);