<tr>
                            <th scope="col">STT</th>
                            <th scope="col" style="white-space: nowrap">
                              Mã Môn
                            </th>
                            <th scope="col">Tên Môn</th>
                            <th scope="col">Ngày Thi</th>
                            <th scope="col">Ca Thi</th>
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
                            <td ><select id="ca<?= $i?>" class="form-control" >
                              <option ><?= $value['cathi']?></option>
                              <option >1-2</option>
                              <option >1-3</option>
                              <option >1-5</option>
                              <option >6-7</option>
                              <option >6-9</option>
                              <option >6-10</option>
                                </select></td>
                            <td ><Button id="btcapnhat<?= $i?>" class="btnTimKiem">Cập Nhập</Button></td>
                            <script>
                              $(function(){
                                  $('#btcapnhat<?= $i?>').trigger('click'); //This event will fire the change event. 
                                      $('#btcapnhat<?= $i?>').click(function(){
                                          var data="<?= $value['mamon']?>";
                                          var data1= $(ngaythi<?= $i?>).val();
                                          var data2= $(ca<?= $i?>).val();
                                          var thongbao="Cập nhật thành công";
                                          alert(thongbao );
                                          $.get("./index.php",{controller:"daotao",action:"capnhatlichthi", mamon:data,ngaythi:data1, cathi:data2}, function(data) {
                                      })                                                                                     
                                  });
                              });
                            </script>
                          </tr>
                          <?php } ?>