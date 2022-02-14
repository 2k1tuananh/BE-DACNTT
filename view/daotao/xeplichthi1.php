
                          <tr>
                            <th scope="col">STT</th>
                            <th scope="col" style="white-space: nowrap">
                              Mã Môn
                            </th>
                            <th scope="col">Tên Môn</th>
                            <th scope="col">Ngày Thi</th>
                            <th scope="col">Trạng Thái</th>
                          </tr>
                          <?php $i=0; foreach($mon as $value){ $i++?>
                          <tr>
                            <td><?= $i?></td>
                            <td><?= $value['mamon']?></td>
                            <td><?= $value['tenmon']?></td>
                            <td >
                              <input id="ngaythi<?= $i?>" value="<?= date($value['ngaythi'])?>" type="date"/>
                               
                            </td>
                            <td ><Button class="btnTimKiem">Cập Nhập</Button></td>
                          </tr>
                          <?php } ?>
                       