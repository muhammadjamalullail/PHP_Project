<?php
  require_once "Dosen.php"
  require_once "Mata_kuliah.php"
  class Mahasiswa extends Dosen {
    public string $name;
    public int $NPM;

    public function call($name, $NPM) {
      $this->name = $name;
      $this->NPM = $NPM;
      return "Hi, My name is $name, My number NPM is $NPM";
    }
  }
$mhs = new Mahasiswa();
$mhs1 = $this->call("Jamal", 2310010401);
$mhs2 = $this->call("Zidane", 2310014521);
?>
