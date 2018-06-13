  <?php $this->load->view('layout/header');?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('layout/sidebar');?>

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
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url();?>food_discount/add" class="btn btn-primary">Add</a>
            </div>
            <!-- /.box-header -->
            
            <br><br>
            <?php if($this->session->flashdata('message')){ ?>
              <div class="alert alert-success" role="alert">
               <?php  echo $this->session->flashdata('message');?>
              </div>
              <?php }?>   
              

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Food Discount</th>
                  <th>Food Name</th>
                  <th>User ID</th>
                  <th>Institute ID</th>
                  <th>Category ID</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($query as $row){ ?>
                  <tr>   
                      <td><?php echo $row->food_discount; ?></td>
                      <td><?php echo $row->food_name; ?></td>
                      <td><?php echo $row->user_id; ?></td>
                      <td><?php echo $row->institute_id; ?></td>
                      <td><?php echo $row->category_id; ?></td>
                      
                      
                  </tr>
                  <?php } ?>
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
  
    <!-- /.content -->


  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    {
       $('.alert-success').hide(3000);
    }
  </script>
 
  
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('layout/footer');?>