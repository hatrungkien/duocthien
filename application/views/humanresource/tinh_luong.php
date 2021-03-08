<!-- Báo cáo thu chi Start -->
<div class="content-wrapper">
    <section class="content-header">
        
        <div class="header-title form-group" style="padding-top: 15px">
            <ol class="breadcrumb">
                <li><a href="#"><i class="pe-7s-home"></i> <?php echo display('home') ?></a></li>
                <li><a href="#"><?php echo display('customer') ?></a></li>
                <li class="active"><?php echo display('customer_ledger') ?></li>
            </ol>
        </div>
    </section>

    <!-- thông tin phụ thu -->
    <section class="content">
        <!-- Alert Message -->
        <?php
        $message = $this->session->userdata('message');
        if (isset($message)) {
            ?>
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $message ?>                    
            </div>
            <?php
            $this->session->unset_userdata('message');
        }
        $error_message = $this->session->userdata('error_message');
        if (isset($error_message)) {
            ?>
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <?php echo $error_message ?>                    
            </div>
            <?php
            $this->session->unset_userdata('error_message');
        }
        ?>
        <!-- bảng dữ liệu -->
            <div class="row">
                <div class="col-sm-3">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <h4 class="col-sm-8" align="left">DS BẢNG TÍNH LƯƠNG</h4>
                            <div class="col-sm-4">
                                <button class="btn btn-success">Tạo</button>
                                <button class="btn btn-success">Xoá</button>
                            </div>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div class="panel-body"> 
                            <div id="printableArea">

<!-- fix this data area -->
                            <!-- <?php if ($customer_name) { ?>
                                <div class="text-center">
                                    <h3> {customer_name} </h3>
                                    <h4><?php echo display('address') ?> : {address} </h4>
                                    <h4> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </h4>
                                </div>
                            <?php } ?> -->


                            <div class=""></div>
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <!-- checkbox để tạm -->
                                            <th class="text-center"><?php echo('#') ?></th>
                                            <th class="text-center"><?php echo('Tên bảng lương') ?></th>
                                            <th class="text-center"><?php echo('Thời gian') ?></th>
                                            <th class="text-center"><?php echo('Trạng thái') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <!-- Dữ liệu bảng hiển thị -->
                                    <!-- fix this data area -->
                                    <!-- sửa truy vấn -->
                                        <!-- <?php
                                        if ($ledgers) {
                                            $sl = 0;
                                            $debit = $credit = $balance = 0;
                                            foreach ($ledgers as $ledger) {
                                                $sl++;
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?php echo html_escape($ledger['VDate']); ?></td>
                                                    <td><?php echo html_escape($ledger['Narration']); ?></td>
                                                    <td>
                                                 
                                                    <?php echo html_escape($ledger['VNo']); ?>
                                                </td>
                                                   
                                                    <td align="right">
                                                        <?php
                                                        
                                                            echo (($position == 0) ? "$currency " : " $currency");
                                                            echo html_escape(number_format($ledger['Debit'], 2, '.', ','));
                                                            $debit += $ledger['Debit'];
                                                       
                                                        ?>
                                                    </td>
                                                    <td align="right">
                                                        <?php
                                                        
                                                            echo (($position == 0) ? "$currency " : " $currency");
                                                            echo html_escape(number_format($ledger['Credit'], 2, '.', ','));
                                                            $credit += $ledger['Credit'];
                                                      
                                                        ?>
                                                    </td>
                                                    <td align='right'>
                                                        <?php
                                                        $balance = $debit - $credit;
                                                        echo (($position == 0) ? "$currency " : " $currency");
                                                        echo html_escape(number_format($balance, 2, '.', ','));
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }else{
                                        ?>
                                        <tr><td colspan="6"><center>No Record Found</center></td></tr>
                                        
                                        <?php }?> -->
                                    
                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <h4 class="col-sm-8" align="left">THÔNG TIN LƯƠNG</h4>
                            
                            <br>
                            
                        </div>
                        <div class="panel-body"> 
                            <div id="printableArea">

<!-- fix this data area -->
                            <!-- <?php if ($customer_name) { ?>
                                <div class="text-center">
                                    <h3> {customer_name} </h3>
                                    <h4><?php echo display('address') ?> : {address} </h4>
                                    <h4> <?php echo display('print_date') ?>: <?php echo date("d/m/Y h:i:s"); ?> </h4>
                                </div>
                            <?php } ?> -->


                            <div class=""></div>
                            <div class="table-responsive">

                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <!-- checkbox để tạm -->
                                            <th class="text-center"><?php echo('#') ?></th>
                                            <th class="text-center"><?php echo('Ca làm việc') ?></th>
                                            <th class="text-center"><?php echo('Số ngày công') ?></th>
                                            <th class="text-center"><?php echo('Ngày công thực tế') ?></th>
                                            <th class="text-center"><?php echo('Số ngày nghỉ') ?></th>
                                            <th class="text-center"><?php echo('Số ngày nghỉ phép') ?></th>
                                            <th class="text-center"><?php echo('Lương làm thêm giờ') ?></th>
                                            <th class="text-center"><?php echo('Hoa hồng') ?></th>
                                            <th class="text-center"><?php echo('Thưởng') ?></th>
                                            <th class="text-center"><?php echo('Phạt') ?></th>
                                            <th class="text-center"><?php echo('Ghi chú') ?></th>
                                            <th class="text-center"><?php echo('Tạm ứng') ?></th>
                                            <th class="text-center"><?php echo('Tổng lương') ?></th>
                                            <th class="text-center"><?php echo('Thực lĩnh') ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <!-- Dữ liệu bảng hiển thị -->
                                    <!-- fix this data area -->
                                    <!-- sửa truy vấn -->
                                        <!-- <?php
                                        if ($ledgers) {
                                            $sl = 0;
                                            $debit = $credit = $balance = 0;
                                            foreach ($ledgers as $ledger) {
                                                $sl++;
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?php echo html_escape($ledger['VDate']); ?></td>
                                                    <td><?php echo html_escape($ledger['Narration']); ?></td>
                                                    <td>
                                                 
                                                    <?php echo html_escape($ledger['VNo']); ?>
                                                </td>
                                                   
                                                    <td align="right">
                                                        <?php
                                                        
                                                            echo (($position == 0) ? "$currency " : " $currency");
                                                            echo html_escape(number_format($ledger['Debit'], 2, '.', ','));
                                                            $debit += $ledger['Debit'];
                                                       
                                                        ?>
                                                    </td>
                                                    <td align="right">
                                                        <?php
                                                        
                                                            echo (($position == 0) ? "$currency " : " $currency");
                                                            echo html_escape(number_format($ledger['Credit'], 2, '.', ','));
                                                            $credit += $ledger['Credit'];
                                                      
                                                        ?>
                                                    </td>
                                                    <td align='right'>
                                                        <?php
                                                        $balance = $debit - $credit;
                                                        echo (($position == 0) ? "$currency " : " $currency");
                                                        echo html_escape(number_format($balance, 2, '.', ','));
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }else{
                                        ?>
                                        <tr><td colspan="6"><center>No Record Found</center></td></tr>
                                        
                                        <?php }?> -->
                                    
                                    </tbody>
                                    
                                </table>
                                
                            </div>
                            <div class="col-sm-12">
                                        <div class="col-sm-8"></div>
                                        <div class="col-sm-4">
                                            <i class="fa fa-flag" aria-hidden="true"></i>
                                            <label class="">Chưa thanh toán</label>
                                            <br>
                                            <i class="fa fa-flag" aria-hidden="true"></i>
                                            <label class="">Đã thanh toán</label>
                                        </div>
                                    </div>
                        </div>
                        </div>
                        
                    </div>
                </div>
            </div>


    </section>
</div>
<style type="text/css">
    .cham-cong{
        background-color: #00A65A ;
        border-radius: 5px;
        border: 1px solid white;
        font-size: 15px;
        color: white;
        height: 25px;
        vertical-align: middle;

    }
</style>
