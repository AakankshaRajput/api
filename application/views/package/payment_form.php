 <?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="<?php echo base_url();?>payment" class="btn btn-primary">Back</a>
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
			              <h3 class="box-title">Payment Details</h3>
			            </div>
			            <!-- /.box-header -->
			            <!-- form start -->
			            <form role="form" action="<?php echo site_url('payment/payment_form');?>" method="post">
			              <div class="box-body">
			              	<div class="form-group">
			                  <label for="exampleInputEmail1">User Id</label>
			                  <input  type="number" name="uid" class="form-control" id="uid" onkeyup="suggest(this.value)" placeholder="User Id" required="Plz filled this field">
			                  <span id="txtHint" style="color:red;"></span>
			                  <span id="error" style="color: red; display: none">* Input digits (0 - 9)</span>
			                </div>

			                <div class="form-group">
			                  <label for="exampleInputEmail1">Customer Name</label>
			                  <input  type="text" name="name" class="form-control" id="name" onkeyup="suggestion(this.value)" placeholder="Customer Name" required="Plz filled this field">
			                  <span id="txtHint2" style="color:red;"></span>
			                  
			                </div>

			                <div class="form-group">
			                  <label for="exampleInputEmail1">Fordrinks</label>
			                  <input onkeypress="return IsNumeric(event);"  type="number" name="fordrinks" class="form-control" id="exampleInputEmail1" placeholder="Fordrinks" required="Plz filled this field">
			                  <span id="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Forfood</label>
			                  <input onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" type="number" name="forfood" class="form-control" id="exampleInputPassword1" placeholder="Forfood" required="Plz filled this field">
			                  <span id="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
			                </div>
			                <div class="form-group">
			                  <label for="exampleInputPassword1">Forpackage</label>
			                  <input onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" type="number" name="forpackages" class="form-control" id="exampleInputPassword1" placeholder="Forpackage" required="Plz filled this field">
			                  <span id="error" style="color: Red; display: none">* Input digits (0 - 9)</span>
			                </div>
			                

			                
			                
			              <!-- /.box-body -->

			              <div class="box-footer">
			                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
			              </div>
			            </form>
			          </div>
			          <!-- /.box -->
<script type="text/javascript">
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        function IsNumeric(e) {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
            document.getElementById("error").style.display = ret ? "none" : "inline";
            return ret;
        }
    </script>
   

    <script>
			function suggest(str) {
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
			 xhttp.open("POST", "<?php echo base_url().'payment/checkValue';?>?q="+str, true);
			 xhttp.send();
			}



			function suggestion(str) {
			 var xhttp;    
			 if (str == "") {
			   document.getElementById("txtHint2").innerHTML = "";
			   return;
			 }
			 xhttp = new XMLHttpRequest();
			 xhttp.onreadystatechange = function() {
			   if (this.readyState == 4 && this.status == 200) {
			     document.getElementById("txtHint2").innerHTML = this.responseText;
			   }
			 };
			 xhttp.open("POST", "<?php echo base_url().'payment/checkName';?>?p="+str, true);
			 xhttp.send();
			}

</script>
