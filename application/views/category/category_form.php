 <?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="<?php echo base_url();?>category" class="btn btn-primary">Back</a>
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
			              <h3 class="box-title">Category </h3>
			            </div>
			            <!-- /.box-header -->
			            <!-- form start -->
			            <form role="form" action="<?php echo site_url('category/category_form');?>" method="post" id="frm3">
			              <div class="box-body">
			              	 <div class="form-group">
			                  <label for="exampleInputPassword1">Category</label>
			                  <select name="category_name" class="form-control" id="exampleInputPassword1" placeholder="Category" required>
			                  	<option value="">Please Select</option>
			                  	<option>Student</option>
			                  	<option>Staff</option>
			                  	<option>VIP</option>
			                  	<option>Black</option>
			                  </select>

			                </div>
			                <div class="form-group">
			                  	<label for="exampleInputPassword1">Fordrinks</label>
			                  	<input type="text" name="fordrinks" class="form-control" id="fordrinks" placeholder="Fordrinks"><span id="error1" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  	<label for="exampleInputPassword1">Forfood</label>
			                  	<input type="text" name="forfood" class="form-control" id="forfood" placeholder="Forfood"><span id="error1" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  	<label for="exampleInputPassword1">Fordrinks</label>
			                  	<input type="text" name="forpackages" class="form-control" id="forpackages" placeholder="Forpackages"><span id="error1" style="color: red;"></span>
			                </div>
			                
			                
			                
			              <!-- /.box-body -->

			              <div class="box-footer">
			                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			              </div>
			            </form>
			          </div>
			          <!-- /.box -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
			<script>
				$(document).ready(function() {
					$('#frm3').submit(function(){

					validate = true;
					discount1 = /^[0-9]{2}$/;
					
					discount = $('#discount').val();
					
						
						if(discount=='')
						{
							$('#error1').html('Enter Discount');		
							 validate = false;
						}
						
						
						$('#discount').keypress(function(){
							$('#error1').html('');
						});

							return validate;
						
				});
				});
			</script>

