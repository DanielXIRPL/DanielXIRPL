<?php
    class Rpl 
    {
        public $siswa = "Daniel";
        public $alat  = "laptop";
        public $jumlah = 108;
        private $jurusan;
        function __construct()
        {
            echo "selamat datang dikelas Rpl";
        }

        public function pelajaran(){
            echo "pemrograman web";
        }
        public function lab($lokasi)
        {
           echo $lokasi;
        }

        public function  setjurusan($isi='')
        {
            $this->jurusan=$isi;
        }

        public function getjurusan()
        {
            return $this->jurusan;
        }
    }
    class Akuntansi {
        public $siswa = "siti";
        public $alat  = "Uang";
        public $jumlah = 324;
        function __construct()
        {
            echo "selamat datang dikelas Akuntansi";
        }
        public function pelajaran(){
            echo "akuntansi";
        }
        public function lab($lokasi)
        {
            echo $lokasi;
        }
        public function  setjurusan($isi='')
        {
            $this->jurusan=$isi;
        }

        public function getjurusan()
        {
            return $this->jurusan;
        }
    }
    class Multimedia {
        public $siswa = "yaqin";
        public $alat  = "kamera";
        public $jumlah = 324;
        function __construct()
        {
            echo "selamat datang dikelas Multimedia";
        }
        public function pelajaran(){
            echo "potoshop";
        }
        public function lab($lokasi)
        {
            echo $lokasi;
        }
        public function  setjurusan($isi='')
        {
            $this->jurusan=$isi;
        }

        public function getjurusan()
        {
            return $this->jurusan;
        }
    }
    class OTKP {
        public $siswa = "dwi";
        public $alat  = "kantor";
        public $jumlah = 216;
        function __construct()
        {
            echo "selamat datang dikelas OTKP";
        }
        public function pelajaran(){
            echo "perkantoran";
        }
        public function lab($lokasi)
        {
            echo $lokasi;
        }
        public function  setjurusan($isi='')
        {
            $this->jurusan=$isi;
        }

        public function getjurusan()
        {
            return $this->jurusan;
        }
    }
    class BDP {
        public $siswa = "egi";
        public $alat  = "kantor";
        public $jumlah = 324;
        function __construct()
        {
            echo "selamat datang dikelas BDP";
        }
        public function pelajaran(){
            echo "pemasaran";
        }
        public function lab($lokasi)
        {
            echo $lokasi;
        }
        public function setjurusan($isi='')
        {
            $this->jurusan=$isi;
        }

        public function getjurusan()
        {
            return $this->jurusan;
        }
    }
    class PBK {
        public $siswa = "farrel";
        public $alat  = "perban";
        public $jumlah = 108;
        function __construct()
        {
            echo "selamat datang dikelas PBK";
        }
        public function pelajaran(){
            echo "perbankan";
        }
        public function lab($lokasi)
        {
            echo $lokasi;
        }
        public function  setjurusan($isi='')
        {
            $this->jurusan=$isi;
        }

        public function getjurusan()
        {
            return $this->jurusan;
        }
    }

    $rpl = new Rpl;
    echo $rpl->siswa;
    echo $rpl->alat;
    echo $rpl->jumlah;
    $rpl->pelajaran();
    echo '<br>';
    $rpl->lab('lab bawah');
    echo '<br>';
    $rpl->setjurusan('pemrograman web')
    echo $rpl->getjurusan();

    $akuntansi = new Akuntansi;
    echo $akuntansi->siswa;
    echo $akuntansi->alat;
    echo $akuntansi->jumlah;
    $akuntansi->pelajaran();
    echo '<br>';
    $akuntansi->lab('lab bawah');
    echo '<br>';
    $akuntansi->setjurusan('akuntansi')
    echo $akuntansi->getjurusan();

    $multimedia = new Multimedia;
    echo $multimedia->siswa;
    echo $multimedia->alat;
    echo $multimedia->jumlah;
    $multimedia->pelajaran();
    echo '<br>';
    $multimedia->lab('lab bawah');
    echo '<br>';
    

    $otkp = new OTKP;
    echo $otkp->siswa;
    echo $otkp->alat;
    echo $otkp->jumlah;
    $otkp->pelajaran();
    echo '<br>';
    $otkp->lab('lab bawah');

    $bdp = new Bdp;
    echo $bdp->siswa;
    echo $bdp->alat;
    echo $bdp->jumlah;
    $bdp->pelajaran();
    echo '<br>';
    $bdp->lab('lab bawah');

    $pbk = new Pbk;
    echo $pbk->siswa;
    echo $pbk->alat;
    echo $pbk->jumlah;
    $pbk->pelajaran();
    echo '<br>';
    $pbk->lab('lab bawah');

    echo "Jumlah siswa SMKN 2 BUDURAN ",$rpl->jumlah + $akuntansi->jumlah + $multimedia->jumlah + $otkp->jumlah + $bdp->jumlah + $pbk->jumlah;

 

?>



