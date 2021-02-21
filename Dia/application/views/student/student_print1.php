<!DOCTYPE html>
<html>
  <?php  $this->load->view("common/common_head"); ?>
  <body onload="window.print();">
    <div class="wrapper">
      <!-- Main content -->
      <section class="invoice">
        <!-- title row -->
        <div class="row">
          <div class="col-xs-12">
            <h2 class="page-header">
              <i class="fa fa-globe"></i> User Data
              <small class="pull-right">Date: <?php echo date('Y-m-d');?></small>
            </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
       
        <!-- Table row -->
        <div class="row">
          <div class="col-xs-12 table-responsive">
            <table id="example2" class="example table table-bordered table-hover display" >
                    <thead>
                      <tr>
                       <th>BT</th>
                       <th>BP</th>
                       <th>RES</th>
                       <th>Glucose</th>
                       <th>HR</th>  
                      <th>Oxygen </th>
                      <th>Electro</th>
                      <th>Age</th>
                      <th>Phone</th>
                      </tr>
                    </thead>
                    <tbody>
                <?php foreach($studentN as $students){
                    ?>
                    <tr>
                    <form method="post">
                      <td>
                        <?php echo $students->username; ?>
                        </td>
                        <td><?php echo $students->password; ?>
                      </td>
                        <td><?php echo $students->email; ?></td>
                        <td><?php echo $students->ph; ?></td>
                        <td><?php echo $password = $students->typ; ?></td> 
                        <td><?php echo $students->trno; ?></td>
						<td><?php echo $students->tramt; ?></td>
<td><?php echo $students->tbank; ?></td>
<td><?php echo $students->tdate; ?></td>
                           </form>
                    </tr>
                    <?php
                } ?>
                    </tbody>
                </table>
          </div><!-- /.col -->
        </div><!-- /.row -->


      </section><!-- /.content -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
   
  </body>
</html>
