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
        if ($this->statusPembayaran($statusPembayaran) == TRUE) {
            if ($this->lokasiPengiriman($alamatPengiriman) == TRUE) {
                if ($this->metodePembayaran($metodePembayaran) == TRUE) {
                    return 'Transaksi Selesai Di Proses';
                } else {
                    return 'Metode pembayaran tidak di dukung';
                }
            } else {
                return 'Lokasi Pengiriman tidak di ketahui';
            }
        } else {
            return 'Pembayaran belum lunas';
        }
    }
}


$transaksi = new BelanjaOnline;
$cek = $transaksi->main('Lunas', 'Yogyakarta', 'Transfer');
echo $cek;
