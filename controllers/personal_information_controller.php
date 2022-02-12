<?php
require_once("./models/dbconfig.php");
class personal_information_controller {
    public function run(){
        $this->db=new database();
        $this->db->connect();
        $action= filter_input(INPUT_GET,"action");
        if(method_exists($this,$action))
        {
            $this->$action();
        }
        else{
            $this->main();
        }
    }
    function main(){
        if(isset($_SESSION['msv']))
          {
            $data=$this->db->getinfosinhvien($_SESSION['msv']);
            if( isset($_POST['edit_sv']) ){
                $image = $_POST['image'];
                $gioitinh = $_POST['gioitinh'];
                $cmnd = $_POST['cmnd'];
                $dienthoai = $_POST['dienthoai'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $this->db->updatesinhvien($_SESSION['msv'],$image,$gioitinh,$cmnd,$dienthoai,$email,$diachi);
                header("Refresh:0");


            }


            // require_once("./view/ThongTinCaNhan.php");

            require_once("./view/sinhvien/ThongTinCaNhan.php");
          }
         else{
            $data=$this->db->getinfogiangvien($_SESSION['mgv']);
            if(isset($_POST['edit_gv']) ){
                $image = $_POST['image'];
                $gioitinh = $_POST['gioitinh'];
                $cmnd = $_POST['cmnd'];
                $dienthoai = $_POST['dienthoai'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $this->db->updategiangvien($_SESSION['mgv'],$image,$gioitinh,$cmnd,$dienthoai,$email,$diachi);
                header("Refresh:0");
    
    
            }

        //    require_once("./view/ThongTinCaNhanGiaoVien.php");
        require_once("./view/giangvien/ThongTinCaNhanGiaoVien.php");

         }
        
        
    }
   

    function bangdiem(){
        $data=$this->db->getinfopoint($_SESSION['msv']);
        $tongtin=$this->db->tongtin($_SESSION['msv']);
        $tongdiem=$this->db->tongdiem($_SESSION['msv']);

=======
        // require_once("./view/BangDiemSinhVien.php");

        require_once("./view/sinhvien/BangDiemSinhVien.php");
    }

    function infoGiangVien()
    {
        
    }
}