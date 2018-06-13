 <?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>
<style type="text/css">
  #left_side li{ float: left; margin-left: 30px; list-style: none; display: inline; }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url();?>/admin/#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url();?>customer/add" class="btn btn-primary">Add</a>
              <ul id="left_side">
                   <li>Day: <input type="date" name="date" oninput="submitvalue(this.value)"></li>
                    <li>Month To: <input type="date" name="date" 
                      id="m_date" onchange="submitmonth()"></li>
                    <li>from: <input type="date" id="l_date" name="date" 
                      onchange="submitmonth()"></li>
                    

                  
              </ul>
              <br><br>
              <?php if($this->session->flashdata('message')){ ?>
              <div class="alert alert-success" role="alert">
               <?php  echo $this->session->flashdata('message');?>
              </div>
              <?php }?>   
                     
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th> UID</th>
                  <th>Customer name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Institute Id</th>
                  <th>Balance</th>
                  <th>Category</th>
                  <th>Discount</th>
                  <th>Date</th>
                  <th>Block</th>
                  
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php  if($query!=''){ $total=1;
                foreach($query as $k=> $row){ ?>
                  <tr> 
                        
                      <td><?php echo $row->uid;?></td>
                      <td><?php echo $row->name; ?></td>
                      <td><?php echo $row->mobile; ?></td>
                      <td><?php echo $row->email; ?></td>
                      <td><?php echo $row->instituteId; ?></td>
                      <td><?php echo $row->balance; ?></td>
                      <td><?php echo $row->category; ?></td>

                      <td><a href="<?php echo base_url();?>/customer/discount/<?php echo $row->uid; ?>" class="btn btn-info">Discount</a></td>
                      <td><?php echo $row->created_at; ?></td>
                      <?php if($row->block==1){?>
                       <td><a href="javascript:void();" class="btn btn-danger">Block</td>
                        <?php } else {?>
                         <td><a href="javascript:void(0);" class="btn btn-success">Unlock</td>
                        <?php }?>
                      <td><!--<a href="" class="btn btn-info"><i class="fa fa-pencil"></i></a>-->
                        <a href="<?php echo base_url('customer/delete_row/')?><?php echo $row->customer_id;?>" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
                      <!--<DELETE FROM `user` WHERE `user`.`user_id` = 32;>-->
                      </td>
                      
                  </tr>
                  <?php  
                   } } else{ echo "Data Not found!"; }?>
                  
                  </tbody>
                                    
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
 
  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
  function submitvalue(argument)
  {

    window.location.href='<?php echo base_url('/filter?single=');?>'+argument;
  }

  function submitmonth(argument)
  {
    var val1=document.getElementById('m_date').value;
    var val2=document.getElementById('l_date').value;

    if(val1 && val2){
    window.location.href='<?php echo base_url('/filter/singleMonth?');?>first_day='+val1+'&last_data='+val2;
    }
  }
  $('.alert-success').hide(3000);

  
</script>
<?php $this->load->view('layout/footer');?>