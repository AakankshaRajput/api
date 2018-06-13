 <?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="<?php echo base_url();?>food_category" class="btn btn-primary">Back</a>
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
			              <h3 class="box-title">Food Category </h3>
			            </div>
			            <!-- /.box-header -->
			            <!-- form start -->
			            <form role="form" action="<?php echo site_url('food_discount/food_form');?>" method="post">
			              <div class="box-body">
			              	<div class="form-group">
			                  <label for="exampleInputPassword1">Packages </label>
								<select name="package" class="form-control" id="exampleInputPassword1" placeholder="Category Name" required>
			                  	<option value="">Please Select</option>
			                  	<option>Student</option>
			                  	<option>Staff</option>
			                  	<option>VIP</option>
			                  	<option>Black</option>
			                  </select>
			                </div>
			              	 
			               
			                <div class="form-group">
			                	<div class="col-md-6">
			                  		<label for="exampleInputPassword1">Fordrinks</label>
			                  		<input type="text" name="fordrinks" class="form-control" id="exampleInputPassword1" placeholder="Food Name" required="Plz filled this field">
			                 	</div>
			              		<div class="col-md-6">
			              			
			                  		<label for="exampleInputPassword1">Discount</label>
			                  		<input type="text" name="fordrinks_discount" class="form-control" id="exampleInputPassword1" placeholder="Food Name" required="Plz filled this field">
			                	</div>
			            	</div>
			                <div class="form-group">
			                	<div class="col-md-6">
			                  		<label for="exampleInputPassword1">Forfood</label>
			                  		<input type="text" name="forfood" class="form-control" id="exampleInputPassword1" placeholder="User ID" required="Plz filled this field">
			                	</div>
			                	<div class="col-md-6">

			                  		<label for="exampleInputPassword1">Discount</label>
			                  		<input type="text" name="fordrinks_discount" class="form-control" id="exampleInputPassword1" placeholder="Food Name" required="Plz filled this field">
			                	</div>
			                </div>

			                 <div class="form-group">
			                 	<div class="col-md-6">
			                  		<label for="exampleInputPassword1">ForPackages</label>
			                  		<input type="text" name="forpackages" class="form-control" id="exampleInputPassword1" placeholder="Food Discount" required="Plz filled this field">
			                	</div>
			                	<div class="col-md-6">
			              			
			                  		<label for="exampleInputPassword1">Discount</label>
			                  		<input type="text" name="fordrinks_discount" class="form-control" id="exampleInputPassword1" placeholder="Food Name" required="Plz filled this field">
			                	</div>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">User</label>
								<input type="text" name="package" class="form-control" id="exampleInputPassword1" placeholder="Category Name" required>
			                  	
			                </div>
			              	 
			            </div>




			                
			              <!-- /.box-body -->

			              <div class="box-footer">
			                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			              </div>
			            </form>
			          </div>
			          <!-- /.box -->

