 <?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="<?php echo base_url();?>user" class="btn btn-primary">Back</a>
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
			              <h3 class="box-title">User Add</h3>
			            </div>
			            <!-- /.box-header -->
			            <!-- form start -->
			            <form role="form" action="<?php echo site_url('user/user_form');?>" method="post">
			              <div class="box-body">
			              	 <div class="form-group">
			                  <label for="exampleInputPassword1">Institute ID</label>
			                  <input type="text" name="institute" class="form-control" id="exampleInputPassword1" placeholder="Institute ID" required="Plz filled this field">
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputEmail1">Email address</label>
			                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required="Plz filled this field">
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Adhar No.</label>
			                  <input type="text" name="adhar_no" class="form-control" id="exampleInputPassword1" placeholder="Adhar No." required="Plz filled this field">
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Full Name</label>
			                  <input type="text" name="user_name" class="form-control" id="exampleInputPassword1" placeholder="Full Name" required="Plz filled this field">
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Mobile</label>
			                  <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Mobile" required="Plz filled this field">
			                </div>

			                
			                
			              <!-- /.box-body -->

			              <div class="box-footer">
			                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			              </div>
			            </form>
			          </div>
			          <!-- /.box -->

