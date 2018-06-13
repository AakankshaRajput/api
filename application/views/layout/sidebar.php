<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('admin_name')?></p>
          <a href="<?php echo base_url();?>/admin/#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
     
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <li class="active treeview">
          <a href="<?php echo base_url();?>/admin/#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo base_url();?>dashboard"><i class="fa fa-circle-o"></i> Dashboard</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>user">
            <i class="fa fa-files-o"></i>
            <span>Customer</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>user"><i class="fa fa-circle-o"></i>Customer</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>payment">
            <i class="fa fa-th"></i>
            <span>Payment</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>payment"><i class="label pull-right bg-green"></i> Payment</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>institute">
            <i class="fa fa-th"></i>
            <span>Institute List</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>institute"><i class="label pull-right bg-green"></i> Institute List</a></li>
            
          </ul>
        </li>
         <li class="treeview">
          <a href="<?php echo base_url();?>category">
            <i class="fa fa-th"></i>
            <span>Category</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>category"><i class="label pull-right bg-green"></i>Category</a></li>
            
          </ul>
          </li>
       <!--   <li class="treeview">
          <a href="<?php //echo base_url();?>/food_category">
            <i class="fa fa-th"></i>
            <span>Food Category</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php //echo base_url();?>food_category"><i class="label pull-right bg-green"></i>Food Category</a></li>
            
          </ul>
        </li> -->
        </li>
         <li class="treeview">
          <a href="<?php echo base_url();?>food_discount">
            <i class="fa fa-th"></i>
            <span>Food discount</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>food_discount"><i class="label pull-right bg-green"></i>Food Discont</a></li>
            
          </ul>
        </li>
        
       
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>