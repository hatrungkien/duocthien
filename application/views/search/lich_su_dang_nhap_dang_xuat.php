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

        <div class="row">
            <div class="col-sm-12">
            <!-- Phần tiêu đề form và các nút chọn trên cùng -->
            <!-- fix this data area -->
            <!-- sửa đường dẫm và các permission tương ứng -->
                
            </div>
        </div>
<!-- Phần các lựa chọn tìm kiếm và lựa chọn về ngày tháng -->
<!-- fix this data area -->
<!-- sửa đường dẫn, hàm truy vấn cho lựa chọn tìm kiếm -->
             <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4 class="col-sm-10" align="left">THỐNG KÊ DOANH SỐ NHÂN VIÊN - LOẠI GIÁ</h4>
                        
                        <br>
                        <br>
                        
                    </div>
                    <div class="panel-body"> 
                        <?php echo form_open('Ccustomer/customer_ledgerData', array('class' => '', 'id' => 'validate')) ?>
                        <?php $today = date('Y-m-d'); ?>
                        
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <label for="nha_thuoc" class="col-sm-2 col-form-label"> <?php echo('Cửa hàng') ?><i class="text-danger">*</i></label>
                                <div class="col-sm-4">
                                      <select class="col-sm-12" name="nha-thuoc" id="nha-thuoc">
                                        <option value="Chon-tat-ca">Chọn tất cả</option>
                                        <option value="Nha-thuoc-Hai-Yen">Nhà thuốc Hải Yến</option>
                                      </select>
                                </div>
                                <label for="nha_thuoc" class="col-sm-2 col-form-label"> <?php echo('Nhân viên') ?><i class="text-danger">*</i></label>
                                <div class="col-sm-4">
                                      <select class="col-sm-12" name="nhan-vien" id="nhan-vien">
                                        <option value="Kien">Trung Kiên</option>
                                        <option value="Thinh-peo">Thịnh Péo</option>
                                      </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div class="form-group row">
                                <label for="nha_thuoc" class="col-sm-2 col-form-label"> <?php echo('In theo') ?><i class="text-danger">*</i></label>
                                <div class="col-sm-4">
                                      <select class="col-sm-12" name="nha-thuoc" id="nha-thuoc">
                                        <option value="Chon-tat-ca">Không theo ca</option>
                                        <option value="Nha-thuoc-Hai-Yen">Theo ca</option>
                                      </select>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button class="col-sm-12 btn btn-success col-form-label">Lấy dữ liệu</button>
                        </div>
                        
                        <?php echo form_close() ?>
                        <br>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- bảng dữ liệu -->
             <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <h4 class="col-sm-10" align="left"></h4>
                        <div class="col-sm-2">
                            <button class="col-sm-12 btn-success btn col-form-label" type="submit">Xuất Excel</button>
                        </div>
                        <br>
                        <br>
                        
                    </div>
                    <div class="panel-body"> 
                        <div class="col-sm-12" id="printableArea">

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
                                            <th class="text-center"><?php echo('Quầy thuốc') ?></th>
                                            <th class="text-center"><?php echo('Ngày') ?></th>
                                            <th class="text-center"><?php echo('Tên nhân viên') ?></th>
                                            <th class="text-center"><?php echo('Thời gian đăng nhập') ?></th>
                                            <th class="text-center"><?php echo('Thời gian đăng xuất') ?></th>
                                            <th class="text-center"><?php echo('Thời gian ca làm việc') ?></th>
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
        </div>


    </section>
</div>
