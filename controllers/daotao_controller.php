<?php
require_once("./models/dbconfig.php");
class daotao_controller {
    public function run(){
        $this->db=new database();
        $this->db->connect();
        $action= filter_input(INPUT_GET,"action");
        if(method_exists($this,$action))
        {
            $this->$action();
        }
        else{
            $this->sinhvien();
        }
    }
    //danhsachsinhvien
    function sinhvien()
    {
        if(!empty($_POST["machuyennganh"])){ 

            $listGVCN = $this->db->getGiaoVienCN($_POST['machuyennganh']);
            foreach ($listGVCN as $infoCN)
            {
              echo '<option value="'.$infoCN['magiangvien'].'">'.$infoCN['hovaten'].'</option>'; 

            }
            require_once("./view/daotao/danhsachsinhvien.php");
        }
        $masinhvien=$this->db->masinhvien();
        $getmasv = substr($masinhvien['masinhvien'], 1); 
        $listStudent = $this->db->getAllData('sinhvien');
        $listCN = $this->db->getAllData('chuyennganh');
        $listLopCN = $this->db->getAllData('lopcn');
        require_once("./view/daotao/danhsachsinhvien.php");
    }
    function uptrangththai()
    {
        $listStudent=$this->db->uptrangthai($_GET['masinhvien'],$_GET['trangthai']);
        // require_once("./view/daotao/PDTTimKiemSinhVien.php");
    }
    function createstudent()
    {
       
        $data=$this->db->createstudent($_GET['masinhvien'], $_GET['hovaten'], $_GET['gioitinh'], $_GET['CMND'], $_GET['ngaysinh'], $_GET['phone'], $_GET['email'], $_GET['chuyennganh'], $_GET['giaovien'], $_GET['diachi'], $_GET['lop']);
        require_once("./view/daotao/danhsachsinhvien.php");

    }

    function timkiem()
    {
        $listStudent=$this->db->timkiemsinhvien($_GET['info']);
        require_once("./view/daotao/PDTTimKiemSinhVien.php");
       
    }
    function select()
    {
        
        if($_GET['info'] != "Tất cả")
        {
            
            $listStudent=$this->db->timkiemsinhvientheochuyennganh($_GET['info']);
            require_once("./view/daotao/PDTTimKiemSinhVien.php");
        }
        else{
            if( $_GET['info'] == "Tất cả"){
                
                $listStudent = $this->db->getAllData('sinhvien');
                require_once("./view/daotao/PDTTimKiemSinhVien.php");
            }
            else{
                // $masinhvien=$this->db->masinhvien();
                // $getmasv = substr($masinhvien['masinhvien'], 1); 
                // $listStudent = $this->db->getAllData('sinhvien');
                // $listCN = $this->db->getAllData('chuyennganh');
                // require_once("./view/daotao/danhsachsinhvien.php");
            }
        }
    }

    //phanconggiangdayy
    function giangday()
    {
        $listMonHoc = $this->db->getAllData('monhoc');
        $listChuyenNganh = $this->db->getAllData('chuyennganh');
        $listGiangVien = $this->db->getAllData('giangvien');
        //$listGiangVien = $this->db->giaovienmonhoc();
        //$listGiangVienMonHoc = $this->db->getAllData('gv-monhoc');
        
        require_once("./view/daotao/phanconggiangday.php");
    }

    //tochuclichdangkyhoc
    function lichdangkyhoc()
    {
        
        require_once("./view/daotao/ToChucLichDangKyHoc.php");
    }

    function banggiangday()
    {
        if($_GET['info'] != "Tất cả")
        {
           
            $listMonHoc=$this->db->timkiemmonhoctheomachuyennganh($_GET['info']);
            $listGiangVien = $this->db->getAllData('giangvien');
            require_once("./view/daotao/bangphanconggiangday.php");
        }
        else{
            if( $_GET['info'] == "Tất cả"){
                
                $listMonHoc = $this->db->getAllData('monhoc');
                $listGiangVien = $this->db->getAllData('giangvien');
                require_once("./view/daotao/bangphanconggiangday.php");
            }
            else{
                // $masinhvien=$this->db->masinhvien();
                // $getmasv = substr($masinhvien['masinhvien'], 1); 
                // $listStudent = $this->db->getAllData('sinhvien');
                // $listCN = $this->db->getAllData('chuyennganh');
                // require_once("./view/daotao/danhsachsinhvien.php");
            }
        }

        
    }
    function timkiemmonhoc()
    {
        $listMonHoc=$this->db->timkiemmonhoc($_GET['info']);
        
        $listGiangVien = $this->db->getAllData('giangvien');
        require_once("./view/daotao/bangphanconggiangday.php");
    }

    //danhsachgiangvien
    function giangvien()
    {
        if(isset($_GET['mgv'])){
            $info=$this->db->getinfogiangvien($_GET['mgv']);
            
            require_once("./view/daotao/modal_giaovien.php");
        }
        else
        {
            if(!empty($_POST["machuyennganh"])){ 

                $listGVCN = $this->db->getLop($_POST['machuyennganh']);
                if($listGVCN != 0)
                {
                    foreach ($listGVCN as $infoCN)
                    {
                      echo '<option value="'.$infoCN['malop'].'">'.$infoCN['tenlop'].'</option>'; 
        
                    }
                    echo '<option value="" >Không chủ nhiệm lớp nào</option>'; 
                    require_once("./view/daotao/DanhSachGiaoVien.php");
                }
                else{
                    echo '<option value="">Không chủ nhiệm lớp nào</option>'; 
                }
               
            }
            else{
                $magiangvien=$this->db->magiangvien();
                $getmgv = substr($magiangvien['magiangvien'], 2); 
                
                $listChuyenNganh = $this->db->getAllData('chuyennganh');
                $listGiangVien = $this->db->getAllData('giangvien');
                $listlopCN = $this->db->getAllData('lopcn');
                require_once("./view/daotao/DanhSachGiaoVien.php");
            }
        }    
    }
    function capnhattheotrangthai1()
    {
        $this->db->capnhattt_gv($_GET['magiangvien'],$_GET['trangthai']);
    }
    function sxtheotrangthai()
    {
        $listGiangVien =$this->db->getinfo_gvtt($_GET['info1']);
        require_once("./view/daotao/banggiangvien.php");
    }
    function banggiangvien()
    {
        if($_GET['info'] != "Tất cả")
        {
           
            $listGiangVien=$this->db->timkiemgiangvientheochuyennganh($_GET['info']);
            
            require_once("./view/daotao/banggiangvien.php");
        }
        else{
            if( $_GET['info'] == "Tất cả"){
                
                
                $listGiangVien = $this->db->getAllData('giangvien');
                require_once("./view/daotao/banggiangvien.php");
            }
            else{
                // $masinhvien=$this->db->masinhvien();
                // $getmasv = substr($masinhvien['masinhvien'], 1); 
                // $listStudent = $this->db->getAllData('sinhvien');
                // $listCN = $this->db->getAllData('chuyennganh');
                // require_once("./view/daotao/danhsachsinhvien.php");
            }
        }
    }

    function timkiemgiangvien()
    {
        
        $listGiangVien = $this->db->timkiemgiangvien($_GET['info']);
        
        require_once("./view/daotao/banggiangvien.php");
    }

    

    function creategiangvien()
    {
        $data=$this->db->creategiangvien($_GET['magiangvien'], $_GET['hovaten'], $_GET['gioitinh'], $_GET['CMND'], $_GET['ngaysinh'], $_GET['phone'], $_GET['email'], $_GET['chuyennganh'], $_GET['diachi'], $_GET['lop']);
        
        require_once("./view/daotao/DanhSachGiaoVien.php");
        
    }

    //danhsachmonhoc
    function danhsachmonhoc()
    {
        
        require_once("./view/daotao/Danhsachmonhoc.php");
    }

    //xeplichthi
    function xeplichthi()
    {
        
        require_once("./view/daotao/xeplichthi.php");
    }

}