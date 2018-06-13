 <?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
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
			              <h3 class="box-title">Discount </h3>
			            </div>
			            <!-- /.box-header -->
			            <!-- form start -->
			          
			            <form role="form" action="<?php echo site_url('institute/discount');?>" method="post">
			              <div class="box-body">
			              	<div class="form-group">
			                  <label for="exampleInputPassword1">Institute Id</label>
								<input type="text" name="instituteId" class="form-control" id="exampleInputPassword1" placeholder="Institute ID">
			                  	
			                </div>

			                <div class="form-group">
			                	<div class="col-md-4">
			                  		<label for="exampleInputPassword1">Fordrinks</label>
			                  		<input type="text" onchange="calc(this)"  class="form-control" id="fordrinks_val" placeholder="Food Name" required="Plz filled this field">
			                 	</div>
			              		<div class="col-md-4">
			              			
			                  		<label for="exampleInputPassword1">Discount</label>
			                  		<input type="text" onchange="calc(this)"  class="form-control" id="fordrinks_id" placeholder="Discount" required="Plz filled this field">
			                	</div>
			                	<div class="col-md-4">
			              			
			                  		<label for="exampleInputPassword1">Total</label>
			                  		<input type="text" name="fordrinks_discount" class="form-control" id="result" placeholder="Food Name" required="Plz filled this field">
			                	</div>

			            	</div>
			                <div class="form-group">
			                	<div class="col-md-4">
			                  		<label for="exampleInputPassword1">Forfood</label>
			                  		<input type="text" onchange="calc1(this)"  class="form-control" id="forfood_val" placeholder="User ID" required="Please filled this field">
			                	</div>
			                	<div class="col-md-4">

			                  		<label for="exampleInputPassword1">Discount</label>
			                  		<input type="text" onchange="calc1(this)"  class="form-control" id="forfood_id" placeholder="Food Name" required="Please filled this field">
			                	</div>
			                	<div class="col-md-4">

			                  		<label for="exampleInputPassword1">Total</label>
			                  		<input type="text" name="forfood_discount" class="form-control" id="result1" placeholder="Food Name" required="Please filled this field">
			                	</div>
			                </div>
			                
			                 <div class="form-group">
			                 	<div class="col-md-4">
			                  		<label for="exampleInputPassword1">ForPackages</label>
			                  		<input type="text" onchange="cal2(this)"  class="form-control" id="forpackages_val" placeholder="Food Discount" required="Please filled this field">
			                	</div>
			                	<div class="col-md-4">
			              			
			                  		<label for="exampleInputPasswo[0]rd1">Discount</label>
			                  		<input type="text" onchange="calc2(this)"  class="form-control" id="forpackages_id" placeholder="Food Name" required="Please filled this field">
			                	</div>
			                	<div class="col-md-4">
			              			
			                  		<label for="exampleInputPassword1">Total</label>
			                  		<input type="text" name="forpackages_discount" class="form-control" id="result2" placeholder="Food Name" required="Please filled this field">
			                	</div>
			                </div>
			              
			                
			              	 
			            </div>




			                
			              <!-- /.box-body -->

			              <div class="box-footer">
			                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			              </div>
			            </form>
			            
			          </div>
			          <!-- /.box -->

<script type="text/javascript">

function calc(form) {

var A = document.getElementById("fordrinks_val").value;
var B = document.getElementById("fordrinks_id").value;
if(A && B)
{var D = A*B/100;


document.getElementById("result").value = D;
}}

function calc1(form) {

var A = document.getElementById("forfood_val").value;
var B = document.getElementById("forfood_id").value;
if(A && B)
{var D = A*B/100;


document.getElementById("result1").value = D;
}}

function calc2(form) {

var A = document.getElementById("forpackages_val").value;
var B = document.getElementById("forpackages_id").value;
if(A && B)
{var D = A*B/100;


document.getElementById("result2").value = D;
}}


</script>
</script>