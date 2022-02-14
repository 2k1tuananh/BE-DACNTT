
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
    <th scope="col">Ca học</th>
    <th scope="col">Trạng thái</th>

    </tr>
    <?php $stt=0; foreach($mon as $info){ $stt++; ?>
    <tr>
    <td><?= $stt ?></td>
    <td><?= $info['mamon'] ?></td>
    <td><?= $info['tenmon'] ?></td>
    <td class="item-monhoc"><?= $info['sotinchi'] ?></td>
    
    <td class="item-monhoc"><?= $info['thu'] ?></td>
    <td class="item-monhoc"><?= $info['ca'] ?></td>
    
    <td class="item-monhoc">
        <button class="btnTimKiem" type="button" data-toggle="modal" data-target="#SuaMonHoc">Update</button>
        <button id="xoa<?= $stt ?>"type="button"  class="btnTimKiem" >Delete</button>
        
</td>
</tr>
<?php }?>
