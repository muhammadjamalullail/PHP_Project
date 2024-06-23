<?php 
  require_once "Mahasiswa.php";
  class Dosen extends Mahasiswa {
    public string $name;
    public int $NID;
    public string $study;

    public function __construct(string $name, int $NID, string $study) {
        $this->name = $name;
        $this->NID = $NID;
        $this->study = $study;
        return array(
          "Nama_dosen" => $this->name,
          "NID" => $this->NID,
          "Study" => $this->study
        )
    }
  }

  $dosen1 = new Dosen("fathul", 191002031, "Web 1");
  $dosen2 = new Dosen("Arafat", 191002050, "Pemrograman berbasis objek");
?>
