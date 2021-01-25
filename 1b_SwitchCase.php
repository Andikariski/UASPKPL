<?php

class Calculator
{

    // Fungsi untuk melakukan penjumlahan
    public function penjumlahan($arrayBilangan)
    {
        $hasil = $arrayBilangan[0] + $arrayBilangan[1];
        echo 'Hasil Penjumlahan : ' . $hasil;
    }

    // Fungsi untuk melakukan pengurangan
    public function pengurangan($arrayBilangan)
    {
        $hasil = $arrayBilangan[0] - $arrayBilangan[1];
        echo 'Hasil Pengurangan : ' . $hasil;
    }

    // Fungsi untuk melakukan perkalian
    public function perkalian($arrayBilangan)
    {
        $hasil = $arrayBilangan[0] * $arrayBilangan[1];
        echo 'Hasil Perkalian   : ' . $hasil;
    }

    // Fungsi untuk melakukan pembagian
    public function pembagian($arrayBilangan)
    {
        $hasil = $arrayBilangan[0] / $arrayBilangan[1];
        echo 'Hasil Pembagian   : ' . $hasil;
    }


    // Fungsi untuk eksekusi program
    public function eksekusi($pilihan, $arrayBilangan)
    {
        switch ($pilihan) {
            case 'penjumlahan':
                $this->penjumlahan($arrayBilangan);
                break;
            case 'pengurangan':
                $this->pengurangan($arrayBilangan);
                break;
            case 'perkalian':
                $this->perkalian($arrayBilangan);
                break;
            case 'pembagian':
                $this->pembagian($arrayBilangan);
                break;
            default:
                echo 'Anda tidak memilih operasi';
        }
    }
}


//variabel arrayBilangan merupakan inputan 2 bilangan, array index 0 untuk bilangan pertama, array index 1 untuk bilangan kedua
$arrayBilangan = [10, 5];
$pilihan = new Calculator;
$pilihan->eksekusi('perkalian', $arrayBilangan);
