
        <div id="TKB">
            <div id="dkh_msg"></div>
            <h2 style="text-align: center; font-weight: bold">
                Danh sách môn đã đăng ký
            </h2>
            <div class="tabledanhsachdangkihoc">
                <table class="tabletkb"  style="width: 700px;margin-bottom:50px; margin-top: 20px" cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                        <tr>

                            <th style="width: 40px">STT</th>

                            <th style="width: 160px">Tên môn</th>
                            <th style="width: 80px">Thứ</th>
                            <th style="width: 80px">Ca</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=0; foreach($data1 as $info){$i++; ?>
                        <tr>
                            <td style="
                      width: 30px;
                      text-align: center;
                      border-left: 1px solid #ccc;
                    ">
                                <?= $i?>
                            </td>

                            <td style="text-align: center"><?= $info['tenmon']?></td>
                            <td style="text-align: center"><?= $info['thu']?></td>
                            <td style="text-align: center"><?=$info['ca']?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </div>