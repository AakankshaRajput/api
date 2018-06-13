 <?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="<?php echo base_url();?>customer" class="btn btn-primary">Back</a>
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
			              <h3 class="box-title">Customer Add</h3>
			            </div>
			            <!-- /.box-header -->


			            <!-- form start -->
			            <form role="form" action="<?php echo site_url('customer/customer_form');?>" method="post" id="frm">
			              <div class="box-body">
			              	
			               	<div class="form-group">
			                  	<label for="exampleInputPassword1">User Id</label>
			                  	<input type="text" name="uid" class="form-control" id="uid" onkeyup="suggest(this.value)" placeholder="User Id">
			                  	<div id="txtHint"></div>
			                  	<span id="error1" style="color: red;">
			                  		
			                  	</span>
			                </div>
			              	 
			               	  <div class="form-group">
			                  	<label for="exampleInputPassword1">Customer Name</label>
			                  	<input type="text" name="name" class="form-control" id="name" placeholder="Customer Name"><span id="error2" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Mobile</label>
			                  <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile"><span id="error3" style="color: red;"></span>
			                </div>
			                <div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
			                  	<input type="email" name="email" class="form-control" id="email" placeholder="Enter email"><span id="error4" style="color: red;"></span>
			                </div>
							<div class="form-group">
			                  	<label for="exampleInputPassword1">Institute ID</label>
			                  	<input type="text" name="instituteId" class="form-control" id="instituteId" placeholder="Institute ID"><span id="error5" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  	<label for="exampleInputPassword1">Balance</label>
			                  	<input type="text" name="balance" class="form-control" id="balance" placeholder="Balance"><span id="error6" style="color: red;"></span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Category</label>
			                  <select name="category" class="form-control" id="category" placeholder="Category" required>
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
					$('#frm').submit(function(){

					validate = true;
					uid1 = /^[0-9]+/;
					name1 =  /^[A-Za-z ]+$/;
					mobile1 = /^[0-9]{10}$/;
					email1 = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
					
					balance1 = /^[0-9]+/;

					
					
					uid = $('#uid').val();
					name= $('#name').val();
					mobile = $('#mobile').val();
					email = $('#email').val();
					instituteId = $('#instituteId').val();
					balance = $('#balance').val();
					


						if(uid=='')
						{
							$('#error1').html('Please Enter Your User Id');		
							 validate = false;
						}
						else if(!uid1.test(uid))
						{
							$('#error1').html('Enter Only Digits');
							validate = false;
						}
						$('#uid').keypress(function(){
							$('#error1').html('');
						});


						if(name=='')
						{
						  $('#error2').html('Please Enter Your Full Name');	  
						  validate = false;
						}
						else if(!name1.test(name))
						{
							$('#error2').html('Use only Alphabates');	  
						  validate = false;
						}

						$('#name').keypress(function(){
							$('#error2').html('');
						});

						if(mobile=='')
						{
						  $('#error3').html('Please Enter Your Mobile Number');	  
						  validate = false;
						}
						else if(!mobile1.test(mobile))
						{
							$('#error3').html('Enter Only 10 Digits Number');
							validate = false;
						}
						$('#mobile').keypress(function(){
							$('#error3').html('');
						});




						if(email=='')
						{
						  $('#error4').html('Please Enter Your Email ID');	  
						  validate = false;
						}
						else if(!email1.test(email))
						{
							$('#error4').html('Please Enter Your Valid Email ID');
							validate = false;
						}
						$('#email').keypress(function(){
							$('#error4').html('');
						});


						if(instituteId=='')
						{
						  $('#error5').html('Please Enter Your Institute Id');	  
						  validate = false;
						}
						$('#instituteId').keypress(function(){
							$('#error5').html('');
						});



						if(balance=='')
						{
						  $('#error6').html('Please Enter Your Balance');	  
						  validate = false;
						}
						else if(!balance1.test(balance))
						{
							$('#error6').html('Enter only Digits');
							validate = false;
						}
						$('#balance').keypress(function(){
							$('#error6').html('');
						});




						return validate;
				});
				});
			</script>

<script type="text/javascript">
	function suggest(str)
		{
			 var xhttp;    
			 if (str == "") {
			   document.getElementById("txtHint").innerHTML = "";
			   return;
			 }
			 xhttp = new XMLHttpRequest();
			 xhttp.onreadystatechange = function() {
			   if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("txtHint").innerHTML = this.responseText;
			   }
			 };
			 xhttp.open("POST", "<?php echo base_url().'payment/userValue';?>?q="+str, true);
			 xhttp.send();
		}	
			</script>


