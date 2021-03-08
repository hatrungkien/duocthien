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
                            <h4 class="col-sm-8" align="left">CHÚ THÍCH</h4>
                            
                            <br>
                            
                        </div>
                        <div class="panel-body"> 
                            <div class="col-sm-12 cham-cong">
                                X: Đi làm
                            </div>
                            <div class="col-sm-12 cham-cong">
                                M: Đi muộn
                            </div>
                            <div class="col-sm-12 cham-cong">
                                S: Về sớm
                            </div>
                            <div class="col-sm-12 cham-cong">
                                MS: Đi muộn - Về sớm
                            </div>
                            <div class="col-sm-12 cham-cong">
                                1/2: Đi làm nửa ngày
                            </div>
                            <div class="col-sm-12 cham-cong">
                                P: Nghỉ  phép
                            </div>
                            <div class="col-sm-12 cham-cong">
                                K: Nghỉ không phép
                            </div>
                            <div class="col-sm-12 cham-cong">
                                CD: Nghỉ chế độ
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="panel panel-bd">
                        <div class="panel-heading">
                            <h4 class="col-sm-8" align="left">BẢNG CHẤM CÔNG</h4>
                            
                            <br>
                            
                        </div>
                        <div class="panel-body"> 
                            CHỖ IN BẢNG CHẤM CÔNG
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
