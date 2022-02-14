<?php
require_once("./models/dbconfig.php");
class tkb_controller {
    public function run(){
        $this->db=new database();
        $this->db->connect();
        $action= filter_input(INPUT_GET,"action");
        if(method_exists($this,$action))
        {
            $this->$action();
        }
        else{
            $this->tkb_toantruong();
        }
    }
    //danhsachsinhvien
    function tkb_toantruong()
    {
        $_SESSION['chuyennganh']="Tất cả";
        $data=$this->db->tkb();
        $datacn=$this->db->getAllData("chuyennganh");
        require_once("./view/tkbtoantruong.php");
    }
    function tkb_toantruong_loccn()
    {
        $_SESSION['chuyennganh']=$_GET['info1'];
        if($_GET['info1']=="Tất cả"){
            $data=$this->db->tkb();
        }
        else{
            $macn=$this->db->getmcn($_GET['info1']);
            $data=$this->db->tkb_loccn($macn['machuyennganh']);
        }
        require_once("./view/tkbtoantruong1.php");
    }
    function tkb_toantruong_timkiem()
    {
        if($_SESSION['chuyennganh']=="Tất cả"){
            $data=$this->db->tkb_timkiem($_GET['key']);
        }
        else{
            $macn=$this->db->getmcn($_SESSION['chuyennganh']);
            $data=$this->db->tkb_timkiemtheocn($_GET['key'],$macn['machuyennganh']);
        }
        require_once("./view/tkbtoantruong1.php");
    }
}