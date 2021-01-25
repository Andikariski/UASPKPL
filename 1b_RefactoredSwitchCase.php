<?php

interface CalculatorInterface
{
    public function eksekusi($arrayBilangan);
}


class Penjumlahan implements
    CalculatorInterface
{
    public function eksekusi($arrayBilangan)
    {
        $hasil = $arrayBilangan[0] + $arrayBilangan[1];
        echo 'Hasil Penjumlahan : ' . $hasil;
    }
}

class Pengurangan implements
    CalculatorInterface
{
    public function eksekusi($arrayBilangan)
    {
        $hasil = $arrayBilangan[0] - $arrayBilangan[1];
        echo 'Hasil Pengurangan : ' . $hasil;
    }
}

class Perkalian implements
    CalculatorInterface
{
    public function eksekusi($arrayBilangan)
    {
        $hasil = $arrayBilangan[0] * $arrayBilangan[1];
        echo 'Hasil Perkalian : ' . $hasil;
    }
}

class Pembagian implements
    CalculatorInterface
{
    public function eksekusi($arrayBilangan)
    {
        $hasil = $arrayBilangan[0] / $arrayBilangan[1];
        echo 'Hasil Pembagian : ' . $hasil;
    }
}

class tidakMemilih implements
    CalculatorInterface
{
    public function eksekusi($arrayBilangan)
    {
        echo 'Anda Tidak Memilih Operasi Calculator';
    }
}


class Calculator
{
    public static function pilihan($pilihan)
    {
        switch ($pilihan) {
            case 'penjumlahan':
                return new Penjumlahan;
                break;
            case 'pengurangan':
                return new Pengurangan;
                break;
            case 'perkalian':
                return new Perkalian;
                break;
            case 'pembagian':
                return new Pembagian;
                break;
            default:
                return new tidakMemilih;
        }
    }
}


//variabel arrayBilangan merupakan inputan 2 bilangan, array index 0 untuk bilangan pertama, array index 1 untuk bilangan kedua
$arrayBilangan = [10, 5];

// Operasi Jika memilih penjumlahan
Calculator::pilihan('penjumlahan')->eksekusi($arrayBilangan);
echo '<br>';

// Operasi Jika memilih pengurangan
Calculator::pilihan('pengurangan')->eksekusi($arrayBilangan);
echo '<br>';

// Operasi Jika memilih perkalian
Calculator::pilihan('perkalian')->eksekusi($arrayBilangan);
echo '<br>';

// Operasi Jika memilih pembagian
Calculator::pilihan('pembagian')->eksekusi($arrayBilangan);
