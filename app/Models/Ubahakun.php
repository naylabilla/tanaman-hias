<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Ubahakun extends Model {
  private $nama_pengguna;
  private $no_hp;
  private $alamat;
  private $nama_lengkap;
  private $password;
  private $new_pw;
  private $image;

  public function __construct ($nama_pengguna, $no_hp, $alamat, $nama_lengkap, $password, $new_pw, $image) {
    $this->nama_pengguna = $nama_pengguna;
    $this->no_hp = $no_hp;
    $this->alamat = $alamat;
    $this->nama_lengkap = $nama_lengkap;
    $this->password = $password;
    $this->new_pw = $new_pw;
    $this->image = $image;
  }

  public function getNama_pengguna() {
    return $this->nama_pengguna;
  }

  public function getno_hp() {
    return $this->no_hp;
  }

  public function getalamat() {
    return $this->alamat;
  }

  public function getnama_lengkap() {
    return $this->nama_lengkap;
  }

  public function getpassword() {
    return $this->password;
  }

  public function getnew_pw() {
    return $this->new_pw;
  }

  public function getimage() {
    return $this->image;
  }
  
}
?>
