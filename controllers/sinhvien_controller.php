<?php
require_once("./models/dbconfig.php");
require_once("./models/giangvien.php");
class sinhvien_controller
{
    public function run()
    {
        $this->db = new database();
        $this->db->connect();
        $this->giangvien = new giangvien();
        $this->giangvien->connect();
        $action = filter_input(INPUT_GET, "action");
        if (method_exists($this, $action)) {
            $this->$action();
        } else {
            $this->main();
        }
    }
    function main()
    {
        if (isset($_SESSION['msv'])) {
            $data = $this->db->getinfosinhvien($_SESSION['msv']);
            if (isset($_POST['edit_sv'])) {
                $image = $_POST['image'];
                $gioitinh = $_POST['gioitinh'];
                $cmnd = $_POST['cmnd'];
                $dienthoai = $_POST['dienthoai'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $this->db->updatesinhvien($_SESSION['msv'], $image, $gioitinh, $cmnd, $dienthoai, $email, $diachi);
                header("Refresh:0");
            }

            require_once("./view/sinhvien/ThongTinCaNhan.php");
        } else {
            $data = $this->giangvien->getinfogiangvien($_SESSION['mgv']);
            if (isset($_POST['edit_gv'])) {
                $image = $_POST['image'];
                $gioitinh = $_POST['gioitinh'];
                $cmnd = $_POST['cmnd'];
                $dienthoai = $_POST['dienthoai'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $this->giangvien->updategiangvien($_SESSION['mgv'], $image, $gioitinh, $cmnd, $dienthoai, $email, $diachi);
                header("Refresh:0");
            }

            require_once("./view/giangvien/ThongTinCaNhanGiaoVien.php");
        }
    }


    function bangdiem()
    {
        $data = $this->db->getinfopoint($_SESSION['msv']);
        $tongtin = $this->db->tongtin($_SESSION['msv']);
        $tongdiem = $this->db->tongdiem($_SESSION['msv']);

        require_once("./view/sinhvien/BangDiemSinhVien.php");
    }

    function infoGiangVien()
    {
    }

    function lichthisinhvien()
    {
        $data = $this->db->getinfosinhvien($_SESSION['msv']);
        require_once("./view/sinhvien/lichthi.php");
    }
    function dangkyhoc()
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $giohientai=date('Y-m-d H:i:s');
        $data=$this->db->getdatalichdk($giohientai);
        $data1=$this->db->getdatamondk($_SESSION['msv']);
        $data2=$this->db->getmamondk($_SESSION['msv']);
        require_once("./view/sinhvien/DangKyHoc.php");
    }
    function dangkyhoc1()
    {
        $this->db->dangkyhoc($_GET['mamon'],$_GET['magv'],$_GET['malop'],$_SESSION['msv']);
        $data1=$this->db->getdatamondk($_SESSION['msv']);
        require_once("./view/sinhvien/DangKyHoc1.php");
    }
    function huydangkyhoc()
    {
        $this->db->huydangkyhoc($_GET['mamon'],$_GET['magv'],$_GET['malop'],$_SESSION['msv']);
        $data1=$this->db->getdatamondk($_SESSION['msv']);
        require_once("./view/sinhvien/DangKyHoc1.php");
    }
}
