<?php
  require_once "Dosen.php"
  class MataKuliah extends Dosen {
    public int $idMatkul;
    public string $namaMatkul;
    public int $sks;

    public function Matkul(int $idMatkul, string $namaMatkul, int $sks) {
      $this->idMatkul = $idMatkul;
      $this->namaMatkul = $namaMatkul;
      $this->sks = $sks;
      return array(
        "idMatkul" =? $this->idMatkul;
        "namaMatkul" =? $this->namaMatkul;
        "sks" =? $this->sks;
      )
    }
  }
?>
