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
        require_once("./view/daotao/danhsachsinhvien.php");
    }

    function createstudent()
    {
       
        $data=$this->db->createstudent($_GET['masinhvien'], $_GET['hovaten'], $_GET['gioitinh'], $_GET['CMND'], $_GET['ngaysinh'], $_GET['phone'], $_GET['email'], $_GET['chuyennganh'], $_GET['giaovien'], $_GET['diachi']);
        header('location:index.php?controller=daotao');
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

    //phanconggiangday
    function giangday()
    {
        $listMonHoc = $this->db->getAllData('monhoc');
        $listChuyenNganh = $this->db->getAllData('chuyennganh');
        $listGiangVien = $this->db->getAllData('giangvien');
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
            
            require_once("./view/daotao/bangphanconggiangday.php");
        }
        else{
            if( $_GET['info'] == "Tất cả"){
                
                $listMonHoc = $this->db->getAllData('monhoc');
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
}