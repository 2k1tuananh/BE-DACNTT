<tr>
  <th  class="text-center">STT</th>
  <th  class="text-center" style="white-space: nowrap">
    Mã Môn
  </th>
  <th  class="text-center">Tên Môn</th>
  <th  class="text-center" style="white-space: nowrap">
    Số TC
  </th>
  
  <th  class="text-center">Thứ</th>
  <th  class="text-center">Ca</th>
  <th  class="text-center">Giáo viên</th>
</tr>
<?php $i=0; foreach($data as $info){ $i++;?>
<tr>
  <td class="text-center"><?=$i?></td>
  <td class="text-center"><?= $info['mamon']?></td>
  <td class="text-center"><?= $info['tenmon']?></td>
  <td class="text-center" ><?= $info['sotinchi']?></td>
  <td class="text-center" ><?= $info['thu']?></td>
  <td class="text-center" ><?= $info['ca']?></td>
  <td class="text-center" ><?= $info['hovaten']?></td>
</tr>
<?php }?>