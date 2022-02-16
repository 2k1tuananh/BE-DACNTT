<table style="
                font-family: arial, sans-serif;
                font-size: 14px;
                border-collapse: collapse;
                width: 100%;
                margin-top: 10px;
              ">
                        <tr style="background-color: #e4e8e9">
                            <th style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                Mã sinh viên
                            </th>
                            <th style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                Họ tên
                            </th>
                            <th style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                Tình trạng
                            </th>
                            <th style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  "></th>
                        </tr>
                    <?php if($data1!=0){ $i=0; foreach($data1 as $value){$i++; ?>
                        <tr>
                            <td style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                <?= $value['masinhvien']?>
                            </td>
                            <td style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                <?= $value['hovaten']?>
                            </td>
                            <td style="
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                  ">
                                <script>
                                $(function(){
                                    $('#sapxep<?= $i?>').trigger('change'); //This event will fire the change event. 
                                        $('#sapxep<?= $i?>').change(function(){
                                            var data="<?= $value['masinhvien']?>";
                                            var data1="<?= $value['mamon']?>";
                                            var data2= $(this).val();
                                            var thongbao="Cập nhật thành công";
                                            alert(thongbao);
                                            $.get("./index.php",{controller:"point",action:"capnhattheotrangthai", masinhvien:data, mamon:data1, trangthai:data2}, function(data) {
                                            
                                        })                                                                                     
                                    });
                                });
                                </script>
                                <select id="sapxep<?= $i?>">
                                    <?php if($value['trangthai']==1){?>
                                    <option>Đang học</option>
                                    <option>Cấm thi</option>
                                    <?php } else{?>
                                    <option>Cấm thi</option>
                                    <option>Đang học</option>
                                    <?php } ?> 
                                </select>
                            </td>
                            <td style="
                                 border: 1px solid #dddddd;
                                 text-align: center;
                                 padding: 8px;
                                ">

                                <Button type="button" data-toggle="modal" data-target="#myModal2">
                                    <span style="padding: 5px; ">Đánh Giá</span>
                                </Button>

                                <Button class="chitiet" id="<?= $value['masinhvien']?>" style="margin-left: 5px;" type="button" data-toggle="modal"
                                    data-target="#myModal1">
                                    <span style="padding: 5px; ">Chi Tiêt</span>
                                </Button>

                               
                            </td>
                        </tr>
                        <?php }}?>
                        <script>
                        $(document).ready(function(){
                            $("button").click(function(){
                                    var masinhvien=$(this).attr("id")
                                    $.get("./index.php",{controller:"point",action:"QLHocSinhTheoMonHoc", msv:masinhvien}, function(data) {
                                    $("#myModal1").html(data);
                                })                                                                                     
                            });
                        });
                        </script>
                    </table>