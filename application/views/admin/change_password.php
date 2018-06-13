 <?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="<?php echo base_url();?>dashboard" class="btn btn-primary">Back</a>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>/admin/#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

      <section class="content">
            <div class="row">
              <!-- left column -->
              <div class="col-md-offset-3 col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Change Password</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form name='frm' role="form" action="<?php echo site_url('admin/change');?>" method="post" id="frm" >
                    <div class="box-body">
                      
                      <div class="form-group">
                          <label for="exampleInputPassword1">Old Password</label>
                          <input type="text" name="old_password" class="form-control" id="password" placeholder="Enter Your Old Password">
                      </div>
                       
                        <div class="form-group">
                          <label for="exampleInputPassword1">New Password</label>
                          <input type="text" name="password" class="form-control" id="password" placeholder="Enter Your New Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="text" name="password" class="form-control" id="con_password" placeholder=" Enter Your Confirm Password"> 
                      </div>
                      <div id="error" style="color: red;"></div>
  
                  <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary" id="Submit">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- /.box -->


  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#Submit").click(function () {
            var password = $("#password").val();
            var confirmPassword = $("#con_password").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>

  
