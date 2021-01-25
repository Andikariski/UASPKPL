<?php
class BelanjaOnline
{
    function statusPembayaran($statusPembayaran)
    {
        if ($statusPembayaran == 'Lunas') {
            return TRUE;
        }
    }
    function lokasiPengiriman($alamatPengiriman)
    {
        if ($alamatPengiriman == 'Yogyakarta') {
            return TRUE;
        }
    }
    function metodePembayaran($metodePembayaran)
    {
        if ($metodePembayaran == 'Transfer') {
            return TRUE;
        }
    }


    function main($statusPembayaran, $alamatPengiriman, $metodePembayaran)

    {
        if ($this->statusPembayaran($statusPembayaran) == false) {
            return 'Transaksi Gagal, Pembayaran belum lunas';
        }
        if ($this->lokasiPengiriman($alamatPengiriman) == false) {
            return 'Transaksi Gagal, Lokasi pengiriman tidak di ketahui';
        }
        if ($this->metodePembayaran($metodePembayaran) == false) {
            return 'Transaksi Gagal, Metode pembayaran tidak di dukung';
        }
        return 'Transaksi Selesai Di Proses';
    }
}

$transaksi = new BelanjaOnline;
$cek = $transaksi->main('Lunas', 'Yogyakarta', 'Transfer');
echo $cek;
