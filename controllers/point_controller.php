<?php
require_once("./models/dbconfig.php");
class point_controller {
    public function run(){
        $this->db=new database();
        $this->db->connect();
        $action= filter_input(INPUT_GET,"action");
        if(method_exists($this,$action))
        {
            $this->$action();
        }
        else{
            $this->nhapdiem();
        }
    }
    function nhapdiem()
    {
        $svl=$this->db->getinfo_svl($_SESSION['mgv']);
        $_SESSION['mamon']="Tất cả";
        if(isset($_GET['Ajax_action']) && $_GET['info']!="Tất cả")
        {
            $mamon=$this->db->getinfo_mamon($_GET['info']);
            $_SESSION['mamon']=$mamon['mamon'];
            $svl2=$this->db->getinfo_svmon($_SESSION['mgv'],$mamon['mamon']);
            require_once("./view/giangvien/qlbangdiemsinhvien.php");
        }
        else{
            if( isset($_GET['Ajax_action'])&& $_GET['info']=="Tất cả"){
                $svl2=$this->db->getinfo_svl($_SESSION['mgv']);
                require_once("./view/giangvien/qlbangdiemsinhvien.php");
            }
            else{
                $mon=$this->db->getinfo_mon($_SESSION['mgv']);
                require_once("./view/giangvien/NhapDiemSinhVien.php");
            }
        }

    }

    function sapxep()
    {
        if($_GET['info']=="Thấp -> cao"){
            $_SESSION['sapxep']='getinfo_thapcao';
            $svl2=$this->db->getinfo_thapcao($_SESSION['mgv'],$_SESSION['mamon']);
            require_once("./view/giangvien/qlbangdiemsinhvien.php");
        }
        else{
            $_SESSION['sapxep']='getinfo_caothap';
            $svl2=$this->db->getinfo_caothap($_SESSION['mgv'],$_SESSION['mamon']);
            require_once("./view/giangvien/qlbangdiemsinhvien.php");
        }
    }

    function sapxep1()
    {
        $_SESSION['sapxep']=$_GET['info'];
        $svl2=$this->db->getinfo_all($_SESSION['mgv'],$_SESSION['mamon'],$_GET['info']);
        require_once("./view/giangvien/QLHocSinhTheoMonHoc1.php");
    }
    function timkiem()
    {
        if($_GET['info']==''){
            if($_SESSION['sapxep']=='getinfo_thapcao')
            {
                $svl2=$this->db->getinfo_thapcao($_SESSION['mgv'],$_SESSION['mamon']);
                require_once("./view/giangvien/qlbangdiemsinhvien.php");
            }
            else
            {
                $svl2=$this->db->getinfo_caothap($_SESSION['mgv'],$_SESSION['mamon']);
                require_once("./view/giangvien/qlbangdiemsinhvien.php");
            }
        
        }
        else{
            if($_SESSION['sapxep']=='getinfo_thapcao')
            {
                $svl2=$this->db->getinfo_tkthapcao($_SESSION['mgv'],$_SESSION['mamon'], $_GET['info']);
                require_once("./view/giangvien/qlbangdiemsinhvien.php");
            }
            else
            {
                $svl2=$this->db->getinfo_tkcaothap($_SESSION['mgv'],$_SESSION['mamon'], $_GET['info']);
                require_once("./view/giangvien/qlbangdiemsinhvien.php");
            }
        }
    }

    function updiem()
    {

        $mamon=$this->db->getinfo_mamon($_GET['tenmon']);
        $data=$this->db->updiem($mamon['mamon'], $_GET['masinhvien'], $_GET['diemquatrinh'], $_GET['diemcuoiky'], $_GET['diemtongket']);
        if(!isset($_SESSION['sapxep']) || ($_SESSION['sapxep'])=='getinfo_thapcao')
        {
            $svl2=$this->db->getinfo_thapcao($_SESSION['mgv'],$_SESSION['mamon']);
            require_once("./view/giangvien/qlbangdiemsinhvien.php");
        }
        else
        {
            $svl2=$this->db->getinfo_caothap($_SESSION['mgv'],$_SESSION['mamon']);
            require_once("./view/giangvien/qlbangdiemsinhvien.php");
        }

    }
    
    function QLHocSinhTheoMonHoc()
    {
        $_SESSION['mamon']="Tất cả";
        $_SESSION['trangthai']="Tất cả";
        if(isset($_GET['msv'])){
            $info=$this->db->getinfosinhvien($_GET['msv']);
            $data=$this->db->getinfopoint($_GET['msv']);
            $tongtin=$this->db->tongtin($_GET['msv']);
            $tongdiem=$this->db->tongdiem($_GET['msv']);
            require_once("./view/giangvien/modal_diem.php");
        }
        else{
            $mon=$this->db->getinfo_mon($_SESSION['mgv']);
            $data=$this->db->getinfo_svl_tt($_SESSION['mgv'],$_SESSION['mamon'],$_SESSION['trangthai']);
            require_once("./view/giangvien/QLHocSinhTheoMonHoc.php");
        }
    }
    function sxtheomon()
    {
        if( $_GET['info']=="Tất cả"){
            $data1=$this->db->getinfo_svl_tt($_SESSION['mgv'],$_SESSION['mamon'],$_SESSION['trangthai']);
            require_once("./view/giangvien/QLHocSinhTheoMonHoc1.php");
        }
        else{
            $mamon=$this->db->getinfo_mamon($_GET['info']);
            $_SESSION['mamon']=$mamon['mamon'];
            $data1=$this->db->getinfo_svl_tt($_SESSION['mgv'],$mamon['mamon'],$_SESSION['trangthai']);
            require_once("./view/giangvien/QLHocSinhTheoMonHoc1.php");
        }
    }
    function sxtheotrangthai()
    {
        $_SESSION['trangthai']=$_GET['info'];
        if( $_GET['info']=="Tất cả"){
            $data1=$this->db->getinfo_all($_SESSION['mgv'],$_SESSION['mamon'],$_GET['info']);
            require_once("./view/giangvien/QLHocSinhTheoMonHoc1.php");
        }
        else{
            $data1=$this->db->getinfo_all($_SESSION['mgv'],$_SESSION['mamon'],$_GET['info']);
            require_once("./view/giangvien/QLHocSinhTheoMonHoc1.php");
        }
    }
    function timkiem1()
    {
        $data1=$this->db->getinfo_tk($_SESSION['mgv'],$_SESSION['mamon'],$_GET['info'],$_SESSION['trangthai']);
        require_once("./view/giangvien/QLHocSinhTheoMonHoc1.php");
    }
    function capnhattheotrangthai()
    {
        $this->db->capnhattt($_GET['masinhvien'],$_GET['mamon'],$_GET['trangthai']);
        echo"AAAAAAAAAAAAAAAAA";
        // require_once("./view/giangvien/QLHocSinhTheoMonHoc1.php");
    }
}