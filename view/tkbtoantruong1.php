<tr>
  <th scope="col">STT</th>
  <th scope="col" style="white-space: nowrap">
    Mã Môn
  </th>
  <th scope="col">Tên Môn</th>
  <th scope="col" style="white-space: nowrap">
    Số TC
  </th>
  
  <th scope="col">Thứ</th>
  <th scope="col">Ca</th>
  <th scope="col">Giáo viên</th>
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