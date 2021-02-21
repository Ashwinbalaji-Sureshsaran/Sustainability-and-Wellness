<aside class="main-sidebar" >
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          
          
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
           
       <?php if(_get_current_user_type_id($this)==0){ ?>
             <li>
              <a href="<?php echo site_url("admin/dashboard"); ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <small class="label pull-right bg-green"></small>
              </a>
               
            </li>
           <!--  <li>
              <a href="<?php echo site_url("requestdemo"); ?>">
                <i class="fa fa-reply"></i> <span>Demo Request</span> <small class="label pull-right bg-green"></small>
              </a>
               
            </li> -->
            <li>
              <a href="#">
                <i class="fa fa-user"></i> <span>User Management</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
                        <li><a href="<?php echo site_url("users/add_user"); ?>"><i class="fa fa-plus"></i>New User</a></li>
                        <li><a href="<?php echo site_url("users"); ?>"><i class="fa fa-list"></i>List Users</a></li>
              </ul>
            </li>
           <?php } ?> 
            
            
              <?php if(_get_current_user_type_id($this)==1){ ?>
              
             
              <li>
              <a href="#">
                <i class="fa fa-user"></i> <span>Employee Data</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
                        <li><a href="<?php echo site_url("student/list_student"); ?>"><i class="fa fa-list"></i>List User</a></li>
              </ul>
            </li>
            
            <li>
              <a href="<?php echo site_url("noticeboard/manage_noticeboard"); ?>">
                <i class="fa fa-tasks"></i> <span>Prediction </span> <small class="label pull-right bg-green"></small>
              </a> 
            </li> 
            
           
           <?php } ?>  
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>