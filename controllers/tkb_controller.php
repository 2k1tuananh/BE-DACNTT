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
        $data=$this->db->tkb();
        require_once("./view/tkbtoantruong.php");
    }

}