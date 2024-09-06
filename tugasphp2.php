<?php
echo "============♡✧Program menghitung gaji✧♡==============\n";
echo "\n";
// Mendefinisikan kelas
class PerhitunganGaji {
    public $level;
    public $gajiPerHari;
    public $hariKerja;
    // Constructor
    function __construct($level, $gajiPerHari, $hariKerja) {
        $this->level = $level;
        $this->gajiPerHari = $gajiPerHari;
        $this->hariKerja = $hariKerja;
    }
    // Method
    public function hitungGaji() {
        $gajiPokok = $this->gajiPerHari * $this->hariKerja;
        $bonus = 0;

        if ($this->hariKerja >= 17 && $this->hariKerja <= 20) {
            if ($this->level == "senior") {
                $bonus = $gajiPokok * 2;
            } elseif ($this->level == "junior") {
                $bonus = $gajiPokok * 1;
            }
        }

        return $bonus;
    }
}
// Instansiasi 
$karyawanA = new PerhitunganGaji("senior", 200000, 18);
echo "⇨ Gaji yang diterima karyawan senior: Rp." . $karyawanA->hitungGaji() . "\n";

$karyawanB = new PerhitunganGaji("junior", 150000, 18);
echo "⇨ Gaji yang diterima karyawan junior: Rp." . $karyawanB->hitungGaji() . "\n";
?>
