<?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="<?php echo base_url();?>food_discount" class="btn btn-primary">Back</a>
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
			              <h3 class="box-title">Food Discount </h3>
			            </div>
			            <!-- /.box-header -->
			            <!-- form start -->
			            <form role="form" action="<?php echo site_url('food_discount/food_form');?>" method="post" id="frm4">
			              <div class="box-body">
			              	 
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Food Discount</label>
			                  <input type="text" name="food_discount" class="form-control" id="food_discount" placeholder="Food Discount"><span id="error1" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Food Name</label>
			                  <input type="text" name="food_name" class="form-control" id="food_name" placeholder="Food Name"><span id="error2" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">User ID</label>
			                  <input type="text" name="user_id" class="form-control" id="user_id" placeholder="User ID"><span id="error3" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Institute ID</label>
			                  <input type="text" name="institute_id" class="form-control" id="institute_id" placeholder="Institute ID"><span id="error4" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Category Name</label>
								<select name="category_id" class="form-control" id="category_id" placeholder="Category Name" required>
			                  	<option value="">Please Select</option>
			                  	<option>Student</option>
			                  	<option>Staff</option>
			                  	<option>VIP</option>
			                  	<option>Black</option>
			                  </select>
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
					$('#frm4').submit(function(){

					validate = true;
					food_discount1 = /^[0-9]{2}$/;
					food_name1 = /^[A-Za-z ]+$/;
					user_id1 = /^[0-9]+$/;
					institute_id1 = /^[A-Za-z0-9]+$/

					
					food_discount = $('#food_discount').val();
					food_name = $('#food_name').val();
					user_id = $('#user_id').val();
					institute_id = $('#institute_id').val();

						if(food_discount=='')
						{
						  $('#error1').html('Enter Discount');	  
						  validate = false;
						}
						$('#food_discount').keypress(function(){
							$('#error1').html('');
						});

						if(food_name=='')
						{
						  $('#error2').html('Please Enter Your Food Name');	  
						  validate = false;
						}
						else if(!food_name1.test(food_name))
						{
							$('#error2').html('Use only Alphabates');	  
						  validate = false;
						}

						$('#food_name').keypress(function(){
							$('#error2').html('');
						});

						if(user_id=='')
						{
						  $('#error3').html('Enter User ID');	  
						  validate = false;
						}
						else if(!user_id1.test(user_id))
						{
							$('#error3').html('Use only Digits');	  
						  validate = false;
						}

						$('#user_id').keypress(function(){
							$('#error3').html('');
						});


						if(institute_id=='')
						{
						  $('#error4').html('Enter Institute ID');	  
						  validate = false;
						}
						else if(!institute_id1.test(institute_id))
						{
							$('#error4').html('Spaces are not allowed');	  
						  validate = false;
						}

						$('#institute_id').keypress(function(){
							$('#error4').html('');
						});


						
						return validate;
				});
				});
			</script>


