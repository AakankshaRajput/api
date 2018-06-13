 <?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="<?php echo base_url();?>institute" class="btn btn-primary">Back</a>
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
			              <h3 class="box-title">Institute Update</h3>
			            </div>
			            <!-- /.box-header -->
			            <?php $total=0;
                		foreach($institute as $row){ ?>
                   
                      
			            <!-- form start -->
			            <form role="form" action="<?php echo site_url('institute/update');?>" method="post" id="frm2">
			              <div class="box-body">
			              	 
			                <div class="form-group">
			                  <label for="exampleInputEmail1">Institute Name</label>
			                  <input type="text" name="institute_name" class="form-control" id="institute_name" placeholder=" Institute name" value="<?php echo $row->institute_name;?>"><span id="error1" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Discount</label>
			                  <input type="text" name="discount" class="form-control" value="<?php echo $row->discount;?>" id="discount" placeholder="Discount"><span id="error2" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Category</label>
			                  <select name="category" class="form-control" id="category" placeholder="Category" required="Plz filled this field">
			                  	<option value="<?php echo $row->category;?>"><?php echo $row->category;?></option>
			                  	<option>Student</option>
			                  	<option>Staff</option>
			                  	<option>VIP</option>
			                  	<option>Black</option>
			                  </select>

			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Package</label>
			                  <select name="package" class="form-control" id="package" placeholder="Package" required="Plz filled this field">
			                  	<option value="<?php echo $row->package;?>"><?php echo $row->package;?></option>
			                  	<option>Fordrinks</option>
			                  	<option>Forfood</option>
			                  	<option>Forpackages</option>
			                  	<option>Other</option>
			                  </select>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Balance</label>
			                  <input type="text" name="payment" class="form-control" id="payment"  value="<?php echo $row->payment;?>" placeholder="Balance"><span id="error3" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Minimum Purchase</label>
			                  <input type="text" name="min_purchase" class="form-control" id="min_purchase" placeholder="Minimum Purchase" value="<?php echo $row->min_purchase;?>"><span id="error4" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Date</label>
			                  <input type="date" name="current_date_inst" class="form-control" id="current_date_inst" placeholder="Date" value="<?php echo $row->current_date_inst;?>">
			                </div>

			                <input type="hidden" name="id" value="<?php echo $row->ins_id;?>">
			                <input type="hidden" name="institute_id" value="<?php echo $row->institute_id;?>">
			                
			              <!-- /.box-body -->

			              <div class="box-footer">
			                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			              </div>
			            </form>
			            <?php } ?>
			          </div>
			          <!-- /.box -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
			<script>
				$(document).ready(function() {
					$('#frm2').submit(function(){

					validate = true;
					institute_name1 = /^[A-Za-z ]+$/;
					discount1 = /^[0-9]{2}$/;
					payment1 = /^[0-9]$/;
					min_purchase1 = /^[0-9]$/;
					

					
					institute_name = $('#institute_name').val();
					discount = $('#discount').val();
					payment = $('#payment').val();
					min_purchase = $('#min_purchase').val();


						
						
						
						if(institute_name=='')
						{
						  $('#error1').html('Enter Institute Name ');	  
						  validate = false;
						}
						else if(!institute_name1.test(institute_name))
						{
							$('#error1').html('Use Only Alphabates');
							validate = false;
						}
						$('#institute_name').keypress(function(){
							$('#error1').html('');
						});

						if(discount=='')
						{
							$('#error2').html('Enter Discount');		
							 validate = false;
						}
						
						$('#discount').keypress(function(){
							$('#error2').html('');
						});

						if(payment=='')
						{
						  $('#error3').html('Enter Balance');	  
						  validate = false;
						}
						

						$('#payment').keypress(function(){
							$('#error3').html('');
						});

						
						if(min_purchase=='')
						{
						  $('#error4').html('Enter Minimum Purchase');	  
						  validate = false;
						}
						
						$('#min_purchase').keypress(function(){
							$('#error4').html('');
						});

						return validate;
				});
				});
			</script>


