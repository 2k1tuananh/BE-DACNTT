<?php
    class daotao{
        private $conn;
        private $result = null;

        public function __construct($conn) {
            $this->conn = $conn;
        }
        
        function executeResult($sql){
            $conn = mysqli_connect($this->hostname, $this->username, $this->pass, $this->dbname);
            
            $result = mysqli_query($conn, $sql);
            $list = [];
            while ($row = mysqli_fetch_array($result, 1)) {
                $list[] = $row;
            }
            mysqli_close($conn);
            
            return $list;
        }


        //thực hiện truy vấn
        public function execute($sql){
            $this->result = $this->conn->query($sql);
            return $this->result;
        }
        //thực hiện lấy dữ liệu
        public function getData(){
                   
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = [];
            }
            return $data;
        }
        public function dem(){
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }
            else{
                $num = 0;
            }
            return $num;
        }
        public function getAllData($table){
            $sql = "select * from $table";
            return $this->execute($sql);
        }

        public function getGiaoVienCN($machuyennganh)
        {
            $sql = "select magiangvien,hovaten from giangvien where chuyennganh = '$machuyennganh'";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;;
        }


         public function masinhvien()
        {
            $sql = "SELECT  masinhvien FROM `sinhvien` where id=(select MAX(id) from `sinhvien`)";
            $data=$this->execute($sql);
            if($this->dem()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = [];
            }
            return $data;
        }

        public function createstudent($masinhvien,$hovaten,$gioitinh,$CMND,$ngaysinh,$phone,$email,$chuyennganh,$giaovien,$diachi,$lop){
            $sql="INSERT INTO `sinhvien`(`masinhvien`, `hovaten`, `gioitinh`, `diachi`, `email`, `dienthoai`, `cmnd`, `ngaysinh`, `GVCN`, `chuyennganh`,  `password`,`lop`) 
            VALUES ('$masinhvien','$hovaten','$gioitinh','$diachi','$email','$phone','$CMND','$ngaysinh','$giaovien','$chuyennganh','$masinhvien','$lop')";
            
            return $this->execute($sql);
        }

        public function timkiemsinhvien($masinhvien){
            $sql = "select * from  `sinhvien`  where  (masinhvien LIKE '%$masinhvien%' or hovaten like '%$masinhvien%')";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function timkiemsinhvientheochuyennganh($machuyennganh){
            $sql = "select * from  `sinhvien`  where  chuyennganh = '$machuyennganh' ";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function timkiemmonhoctheomachuyennganh($machuyennganh){
            $sql = "SELECT giangvienmonhoc.magiangvien as magiangvien,monhoc.mamon as mamon,monhoc.tenmon as tenmon,giangvien.hovaten as hovaten,giangvienmonhoc.lop as malop,giangvien.chuyennganh as chuyennganh FROM `giangvienmonhoc` inner join giangvien on giangvienmonhoc.magiangvien = giangvien.magiangvien inner join monhoc on monhoc.mamon = giangvienmonhoc.mamon WHERE monhoc.chuyennganh  = '$machuyennganh' ";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function timkiemmonhoctheomamon($machuyennganh){
            $sql = "select * from monhoc where chuyennganh = '$machuyennganh' ";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function giaovienmonhoc()
        {
            $sql="SELECT * FROM `giangvienmonhoc` inner join giangvien on giangvienmonhoc.magiangvien = giangvien.magiangvien";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function listlop()
        {
            $sql="SELECT * FROM lop";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function capnhatgiaovienmonhoc($mamon,$magiangvien,$malop)
        {
            $sqlcheck = "select * from giangvienmonhoc where mamon = '$mamon'";
            $this->execute($sqlcheck);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            if($data == 0)
            {
                $insert = "INSERT INTO `giangvienmonhoc`(`magiangvien`, `mamon`, `lop`) VALUES ('$magiangvien','$mamon','$malop')";
                return $this->execute($insert);
            }
            else
            {
                $sql = "UPDATE `gv-sv-lop` SET `magiangvien`='$magiangvien',`malop` = '$malop' WHERE mamon = '$mamon'";
            
                $this->execute($sql);
                $sqlupdate = "UPDATE `giangvienmonhoc` SET `magiangvien`='$magiangvien',`lop`='$malop' WHERE mamon =  '$mamon'";
                return $this->execute($sqlupdate);
            }
           
        }

        public function timkiemmonhoc($timkiem)
        {
            $sql = "SELECT giangvienmonhoc.magiangvien as magiangvien,monhoc.mamon as mamon,monhoc.tenmon as tenmon,giangvien.hovaten as hovaten,giangvienmonhoc.lop as malop,giangvien.chuyennganh as chuyennganh FROM `giangvienmonhoc` inner join giangvien on giangvienmonhoc.magiangvien = giangvien.magiangvien inner join monhoc on monhoc.mamon = giangvienmonhoc.mamon WHERE  (monhoc.mamon like '%$timkiem%' or monhoc.tenmon like '%$timkiem%') ";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function listmonhoc()
        {
            $sql = "SELECT * from monhoc  ";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function timkiemmonhocbangmonhoc($timkiem)
        {
            $sql = "SELECT * from monhoc WHERE  (monhoc.mamon like '%$timkiem%' or monhoc.tenmon like '%$timkiem%') ";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function timkiemgiangvientheochuyennganh($timkiem)
        {
            $sql = "select * from  `giangvien`  where  chuyennganh = '$timkiem' ";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function timkiemgiangvien($timkiem)
        {
            $sql = "select * from  `giangvien`  where  (magiangvien like '%$timkiem%' or hovaten like '%$timkiem%') ";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function magiangvien()
        {
            $sql = "SELECT  magiangvien FROM `giangvien` where id=(select MAX(id) from `giangvien`)";
            $data=$this->execute($sql);
            if($this->dem()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = [];
            }
            return $data;
        }

        public function getLop($machuyennganh)
        {
            $sql = "select * from lopcn where chuyennganh = '$machuyennganh'";
            $this->execute($sql);
            if($this->dem()==0){
                $data=[];
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function monhocgiangvien()
        {
            $sql = "SELECT giangvienmonhoc.magiangvien as magiangvien,monhoc.mamon as mamon,monhoc.tenmon as tenmon,giangvien.hovaten as hovaten,giangvienmonhoc.lop as malop FROM `giangvienmonhoc` inner join giangvien on giangvienmonhoc.magiangvien = giangvien.magiangvien inner join monhoc on monhoc.mamon = giangvienmonhoc.mamon";
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        
        public function creategiangvien($magiangvien,$hovaten,$gioitinh,$CMND,$ngaysinh,$phone,$email,$chuyennganh,$diachi,$lop){
            $sql="INSERT INTO `giangvien`(`magiangvien`, `hovaten`, `gioitinh`, `diachi`, `email`, `dienthoai`, `cmnd`, `ngaysinh`, `chuyennganh`,  `password`,`ChuNhiem`) 
            VALUES ('$magiangvien','$hovaten','$gioitinh','$diachi','$email','$phone','$CMND','$ngaysinh','$chuyennganh','$magiangvien','$lop')";
            return $this->execute($sql);
        }

        public function capnhattt_gv($mgv,$tt){
            if($tt=='Đang dạy')
            {
                $sql="UPDATE `giangvien` SET `trangthai`=1 WHERE magiangvien='$mgv'";
            }
            else{
                $sql="UPDATE `giangvien` SET `trangthai`=0 WHERE magiangvien='$mgv'";
            }
            
            return $this->execute($sql);
        }
        public function getinfo_gvtt($tt){
            if($tt=="Tất cả"){
                $sql = "select * from giangvien";
            }
            else{
                if($tt=="Đang dạy"){
                    $sql = "select * from giangvien where trangthai=1";
                }
                else{
                    $sql = "select * from giangvien where trangthai=0";
                }
            }
            return $this->execute($sql);
        }
        
        public function uptrangthai($msv,$tt){
            $sql="UPDATE `sinhvien` SET `trangthai_sv`='$tt' WHERE masinhvien='$msv'";
            
            return $this->execute($sql);
        }
        public function getmcn($tcn){
            $sql="select * from chuyennganh where tenchuyennganh='$tcn'";
            $data=$this->execute($sql);
            if($this->dem()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = [];
            }
            return $data;
        }

        public function themmon($mm,$tm,$stc,$ca,$thu,$cn){
            $sql="INSERT INTO `monhoc`( `mamon`, `tenmon`, `sotinchi`, `chuyennganh`, `thu`, `ca`) 
            VALUES ('$mm','$tm','$stc','$cn','$thu','$ca')";
            return $this->execute($sql);
        }
        public function xoamon($mm){
            $sql="DELETE FROM `monhoc` WHERE mamon='$mm'";

            return $this->execute($sql);
        }
        public function xeplichthi_loccn($cn){
            $sql = "select * from monhoc where chuyennganh='$cn'";
            return $this->execute($sql);
        }
        public function capnhatlichthi($mm,$nt,$ct){
            $sql = "UPDATE `monhoc` SET `ngaythi`='$nt',`cathi`='$ct' WHERE mamon='$mm'";
            return $this->execute($sql);
        }
        public function timlichthi($key){
            $sql=" SELECT * FROM monhoc where monhoc.tenmon like '%$key%' or monhoc.mamon like '%$key%' ";
            return $this->execute($sql);
        }
        public function timlichthi_loccn($key,$machuyennganh){
            $sql=" SELECT * FROM monhoc where (monhoc.tenmon like '%$key%' or monhoc.mamon like '%$key%') and monhoc.chuyennganh='$machuyennganh' ";
            
            return $this->execute($sql);
        }

        public function selectchuyennganh($timkiem)
        {
            $sql = "select * from  `chuyennganh`  where  machuyennganh = '$timkiem' ";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function selectlistchuyennganh()
        {
            $sql = "select * from  `chuyennganh`   ";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function getsinhvien($ma)
        {
            $sql = "select * from sinhvien where `masinhvien`='$ma' ";
            
            $data=$this->execute($sql);
            if($this->dem()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = [];
            }
            return $data;
        }
        public function capnhatchuyennganh($machuyennganh,$tenchuyennganh)
        {
            $sql = "UPDATE `chuyennganh` SET `machuyennganh`='$machuyennganh',`tenchuyennganh`='$tenchuyennganh' WHERE machuyennganh = '$machuyennganh'";
            return $this->execute($sql);
        }
        public function capnhatmonhoc($mamon,$tenmon,$st,$cn,$thu,$ca)
        {
            $sql = "UPDATE `monhoc` SET `mamon`='$mamon',`tenmon`='$tenmon',`sotinchi`='$st',`chuyennganh`='$cn' ,`thu`='$thu',`ca`='$ca' WHERE mamon = '$mamon'";
            return $this->execute($sql);
        }

        public function selectlistmonhocdaotao()
        {
            $sql = "select * from  `monhoc`";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function selectlistsinhviendaotao()
        {
            $sql = "select * from  `sinhvien`";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function timkiemchuyennganh($timkiem)
        {
            $sql = "select * from  `chuyennganh`  where  (machuyennganh like '%$timkiem%' or tenchuyennganh like '%$timkiem%') ";
           
            $this->execute($sql);
            if($this->dem()==0){
                $data=0;
            }
            else{
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }
            return $data;
        }

        public function createchuyennganh($machuyennganh,$tenchuyennganh){
            $sql="INSERT INTO `chuyennganh`(`machuyennganh`, `tenchuyennganh`) VALUES ('$machuyennganh','$tenchuyennganh')";
           
            return $this->execute($sql);
        }

        public function getinfochuyennganh($machuyennganh)
        {
            $sql = "select * from chuyennganh where `machuyennganh`='$machuyennganh' ";
            $data=$this->execute($sql);
            if($this->dem()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = [];
            }
            return $data;
        }
        public function checkchuyennganh($machuyennganh)
        {
            $sql = "select * from chuyennganh where `machuyennganh`='$machuyennganh' ";
            $data=$this->execute($sql);
            if($this->dem()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = [];
            }
            return $data;
        }
        public function getinfomonhoc($mamonhoc)
        {
            $sql = "select * from monhoc where `mamon`='$mamonhoc' ";
            $data=$this->execute($sql);
            if($this->dem()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = [];
            }
            return $data;
        }

        public function getinfogiangvien($tk){
            $sql = "select * from giangvien where `magiangvien`='$tk' ";
            $data=$this->execute($sql);
            if($this->dem()!=0){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = [];
            }
            return $data;
        }
        public function themvaolichdkhoc($mm,$nbd,$nkt){
            $sql="INSERT INTO `lickdkhoc`(`mamon`, `ngaybatdau`, `ngayketthuc`) 
            VALUES ('$mm','$nbd','$nkt')";
            return $this->execute($sql);
        }
    }
    