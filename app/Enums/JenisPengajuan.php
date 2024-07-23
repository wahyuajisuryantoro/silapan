<?php

namespace App\Enums;

enum JenisPengajuan: string
{
    case AktaKelahiran = "akta_kelahiran";
    case AktaKematian = "akta_kematian";
    case PindahDatang = "pindah_datang";
    case PindahKeluar = "pindah_keluar";
    case KehilanganKK = "kehilangan_kk";
}
