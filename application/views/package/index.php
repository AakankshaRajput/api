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
              <a href="<?php echo base_url();?>payment/add" class="btn btn-primary">Add</a>
            </div>

            <br><br>
              <?php if($this->session->flashdata('message')){ ?>
              <div class="alert alert-success" role="alert">
               <?php  echo $this->session->flashdata('message');?>
              </div>
              <?php }?>   
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>UID</th>
                  <th>Customer Name</th>
                  <th>Fordrinks</th>
                  <th>Forfood</th>
                  <th>Forpackages</th>
                  <th>Date</th>
                  
                  <!--<th>Action</th>-->
                </tr>
                </thead>
                <tbody>
                <?php foreach($query as $row){ ?>
                  <tr>  
                      <td><?php echo $row->uid; ?></td> 
                      <td><?php echo $row->name; ?></td>
                      <td><?php echo $row->fordrinks; ?></td>
                      <td><?php echo $row->forfood; ?></td>
                      <td><?php echo $row->forpackages; ?></td>
                      <td><?php echo $row->updated_at; ?></td>
                      
                     <!--  <td><a href="" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url('payment/delete_row/'); ?><?php echo $row->packages_id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
                        <a href="" class="btn btn-success"><i class="fa fa-plus "></i> </a>
                      </td> -->
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