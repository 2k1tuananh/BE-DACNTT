<style>
      td {
            text-align: center;
        }
        th {
            text-align: center;
        }
</style>
<table style="font-family: arial, sans-serif;
        font-size: 14px;
        border-collapse: collapse;
        width: 100%;
        margin-top: 20px;">

                <tr style="background-color: #e4e8e9;">
                    <th  class="text-center">
                        Họ tên
                    </th>
                    <th  class="text-center">
                        Mã sinh viên
                    </th>
                    <th  class="text-center">
                        Môn học
                    </th>
                    <th  class="text-center">
                        Điểm quá trình
                    </th>
                    <th  class="text-center">
                        Điểm cuối kỳ
                    </th>
                    <th  class="text-center">
                        Điểm tổng kết
                    </th>
                    <th  class="text-center">

                    </th>
                </tr>
                <script>
                        $(".btnCapNhat").click(function(){
                            var masinhvien=".masinhvien"+$(this).attr("id");
                            var tenmon=".tenmon"+$(this).attr("id");
                            var diemquatrinh="#diemquatrinh"+$(this).attr("id");
                            var diemcuoiky="#diemcuoiky"+$(this).attr("id");
                            var infomsv= $(`${masinhvien}`).attr('id');
                            var infotm= $(`${tenmon}`).attr('id');
                            var infodqt = $(`${diemquatrinh}`).val();
                            var infodck= $(`${diemcuoiky}`).val();
                            if(parseFloat(infodqt)>=7 && parseFloat(infodck)>parseFloat(infodqt))
                            {
                                var infodtk= infodck;
                            }
                            else{
                                var infodtk= infodqt*0.4+infodck*0.6;
                            }
                            $.get("./index.php",{controller:"point",action:"updiem", masinhvien:infomsv, diemquatrinh:infodqt, tenmon:infotm, diemcuoiky:infodck, diemtongket:infodtk}, function(data) {
                                $("#bangdiem").html(data);
                            })   
                        });
                </script>
                <?php if($svl2!=0){ $stt=0; foreach ($svl2 as $info){ $stt++; ?>
                    <tr>
                    <td class="hovaten<?= $stt?>" id="<?= $info['hovaten']?>"name="hovaten"  class="text-center">
                        <?= $info['hovaten']?>
                    </td>
                    <td class="masinhvien<?= $stt?>" id="<?= $info['masinhvien']?>" name="masinhvien"  class="text-center">
                        <?= $info['masinhvien']?>
                    </td>
                    <td class="tenmon<?= $stt?>" id="<?= $info['tenmon']?>" name="tenmon"  class="text-center">
                        <?= $info['tenmon']?>
                    </td>
                    <td   class="text-center">
                        <input id="diemquatrinh<?= $stt?>" name="diemquatrinh<?= $stt?>" style="background-color: #f3f6f7; border: none;" value="<?= $info['diemquatrinh']?>" type="number" step="0.01" min="0"
                            max="10">
                    </td>
                    <td   class="text-center">
                        <input id="diemcuoiky<?= $stt?>" name="diemcuoiky<?= $stt?>"t style="background-color: #f3f6f7; border: none;" value="<?= $info['diemcuoiky']?>" type="number" step="0.01" min="0"
                            max="10">
                    </td>
                    <td name="diemtongket"  class="text-center">
                        <p class="text-center" style="background-color: #f3f6f7; border: none;" ><?= $info['diemtongket']?></p>
                    </td>
                    <td name="">
                            <button style="margin: 0 2px 0 2px;" class="btn btnCapNhat" id="<?= $stt ?>"> Cập nhật</button>
                        </td>
                </tr>      
                <?php }} ?>
                </div>
                
            </table>