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
              <a href="<?php echo base_url();?>institute/add" class="btn btn-primary">Add</a>
              <!--<ul id="left_side">
                   <li>Day: <input type="date" name="date" oninput="submitvalue(this.value)"></li>
                    <li>Month To: <input type="date" name="date" 
                      id="m_date" onchange="submitmonth()"></li>
                    <li>from: <input type="date" id="l_date" name="date" 
                      onchange="submitmonth()"></li>
                  
              </ul>-->

              <br><br>
              <?php if($this->session->flashdata('message')){ ?>
              <div class="alert alert-success" role="alert">
               <?php  echo $this->session->flashdata('message');?>
              </div>
              <?php }?>  
                <?php if($this->session->flashdata('delete')){ ?>
              <div class="alert alert-danger" role="alert">
               <?php  echo $this->session->flashdata('delete');?>
              </div>
              <?php }?>
              
              
               
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Institute ID</th>
                  <th>Institute Name</th>
                  <th>Discount</th>
                  <th>Category</th>
                  <th>Package</th>
                  <th>Balance</th>
                  <th>Minimum Purchase</th>
                  <th>Discount</th>
                  <th>Date</th>
                  <th>Action</th>
                 
                  
                </tr>
                </thead>
                <tbody>
                <?php $total=0;
                foreach($institute as $k=> $row){ ?>
                  <tr> 
                      <td><?php echo $row->institute_id; ?></td>  
                      <td><?php echo $row->institute_name; ?></td>
                      <td><?php echo $row->discount; ?></td>
                      <td><?php echo $row->category; ?></td>
                      <td><?php echo $row->package; ?></td>
                      <td><?php echo $row->payment; ?></td>
                      <td><?php echo $row->min_purchase; ?></td>
                      <td><a href="<?php echo base_url();?>/institute/discount/<?php echo $row->institute_id; ?>" class="btn btn-info">Discount</a></td>
                      
                      <td><?php echo $row->current_date_inst; ?></td>
                      <td><a href="<?php echo base_url().'institute/edit/'. $row->ins_id; ?>" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                       <a href="<?php echo base_url('institute/delete_row/')?><?php echo $row->ins_id;?>" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
                  </tr>
                  <?php  
                   } ?>
                  
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
  $('.alert-danger').hide(3000);
</script>
<?php $this->load->view('layout/footer');?>