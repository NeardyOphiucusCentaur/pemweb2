<?php
/**
 * Kelas Nilai Mahasiswa untuk menghitung nilai akhir mahasiswa
 */
class NilaiMahasiswa {
    public $nama;
    public $matkul;
    public $nilai_uts;
    public $nilai_uas;
    public $nilai_tugas;
    public const presentase_uts = 0.25;
    public const presentase_uas = 0.30;
    public const presentase_tugas = 0.45;
    public const kkm = 60;

    public function getNilaiAkhir () {
        $nilai = self::presentase_uts * $this->nilai_uts 
                + self::presentase_uas * $this->nilai_uas 
                + self::presentase_tugas * $this->nilai_tugas;
        return $nilai;
    }

    public function kelulusan () {
        if ($this->getNilaiAkhir() >= self::kkm) {
            return "LULUS";
        } else {
            return "TIDAK LULUS";
        }
    }

}
?>