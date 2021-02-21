<!DOCTYPE html>
<html>
 <?php  $this->load->view("common/common_head"); ?>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <?php  $this->load->view("admin/common/common_header"); ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php  $this->load->view("admin/common/common_sidebar"); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            USER 
            <small>Manage User Data</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
            <li class="active">List user</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         <div class="row">
         <div class="col-md-12">
            <div class="col-md-12">
                <!-- <div class="col-md-2">
                 <select class="form-control select2" name="filter" id="standard_type"  onchange="choose_standard_type()" style="width: 100%;">
                                           <option value="">Select Age </option>
                                            <?php foreach($school_standard as $standard){
                                                ?>
                                                <option value="<?php echo $standard->tbank; ?>" <?php  if(isset($_GET["standard"]) && $_GET["standard"]==$standard->tbank){ echo "selected"; } ?>><?php echo $standard->tbank; ?></option>
                                                <?php
                                            } ?>
                                        </select>
                </div> -->
                <div class="col-md-2">
                 <a href="<?php echo site_url("student/list_student"); ?>" class="btn btn-primary pull-right">Clear Filter</a>
                </div> 
                <div class="col-md-2">
                 <a href="<?php echo site_url("student/student_print1"); ?>" class="btn btn-primary pull-right">Normal</a>
                </div>	
				<div class="col-md-2">
                 <a href="<?php echo site_url("student/student_print2"); ?>" class="btn btn-primary pull-right">Diabetics</a>
                </div>
				<div class="col-md-2">
                 <a href="<?php echo site_url("student/student_print3"); ?>" class="btn btn-primary pull-right">preDiabetics</a>
                </div>
				<div class="col-md-2">
                 <a href="<?php echo site_url("student/student_print4"); ?>" class="btn btn-primary pull-right">Astma</a>
                </div>				
            </div>  
         <!--   <div class="col-md-6">
                 
                 <div class="col-md-4">
                 
                 <a href="<?php echo site_url("student/student_print"); ?>" class="btn btn-primary "><i class="fa fa-print"></i> Print</a>
                </div>
            </div>  -->
         </div>
         
                <div class="col-md-12">
            <div class="box">
           
                <div class="box-header">
                
                <table id="example2" class="example table table-bordered table-hover display">
                    <thead>
                      <tr>                      
                        <th>BT</th>
                         <th>BP</th>
                        <th>RES</th>
                        <th>Glucose</th>
                        <th>HR</th>  
                      <th>Oxygen </th>
                      <th>Electro </th>
                      <th>Age</th>
                      <th>Phone</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                <?php foreach($student as $students){
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
            </div>
        </div>
        </div>
        </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
      <?php  $this->load->view("admin/common/common_footer"); ?>  

      
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

   <script src="<?php echo base_url($this->config->item("theme_admin")."/plugins/jQuery/jQuery-2.1.4.min.js"); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url($this->config->item("theme_admin")."/bootstrap/js/bootstrap.min.js"); ?>"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url($this->config->item("theme_admin")."/plugins/select2/select2.full.min.js"); ?>"></script>
    <!-- InputMask -->
    <script src="<?php echo base_url($this->config->item("theme_admin")."/plugins/input-mask/jquery.inputmask.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/plugins/input-mask/jquery.inputmask.date.extensions.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/plugins/input-mask/jquery.inputmask.extensions.js"); ?>"></script>
    <!-- bootstrap time picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/plugins/daterangepicker/daterangepicker.js"); ?>"></script>
   
    <script src="<?php echo base_url($this->config->item("theme_admin")."/plugins/timepicker/bootstrap-timepicker.min.js"); ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url($this->config->item("theme_admin")."/plugins/datatables/jquery.dataTables.min.js"); ?>"></script>
    <script src="<?php echo base_url($this->config->item("theme_admin")."/plugins/datatables/dataTables.bootstrap.min.js"); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url($this->config->item("theme_admin")."/dist/js/app.min.js"); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url($this->config->item("theme_admin")."/dist/js/demo.js"); ?>"></script>
     <script>

      $(function () {
        
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "order": [[ 0, "desc" ]],
          "info": true,
          "autoWidth": false
          
          
        });
        
        $("body").on("change",".tgl_checkbox",function(){
            var table = $(this).data("table");
            var status = $(this).data("status");
            var id = $(this).data("id");
            var id_field = $(this).data("idfield");
            var bin=0;
                                         if($(this).is(':checked')){
                                            bin = 1;
                                         }
            $.ajax({
              method: "POST",
              url: "<?php echo site_url("student/change_status"); ?>",
              data: { table: table, status: status, id : id, id_field : id_field, on_off : bin }
            })
              .done(function( msg ) {
                //alert(msg);
              }); 
        });
      });

  
table.buttons().container()
    .appendTo( $('.col-sm-6:eq(0)', table.table().container() ) );
    </script>
    <script>
    $(function(){
       $(".select2").select2();
    });
    </script>
  <script>
function get_url_segment(){
    
var get_array = Array();
var query = window.location.search.substring(1).split("&");

for (var i = 0, max = query.length; i < max; i++)
{
    if (query[i] === "") // check for trailing & with no param
        continue;

    var param = query[i].split("=");
    
    get_array[decodeURIComponent(param[0])] = decodeURIComponent(param[1] || "");
}
return get_array;
}
function choose_standard_type() {
    var url_segment = get_url_segment();
    
    var val = document.getElementById("standard_type").value;
    url_segment.standard = val;
    var join_url =join_url_segment(url_segment);
    window.location = "<?php echo site_url("student/list_student");?>?"+join_url;
}

function join_url_segment(g_array){
    
     var temp_array = Array();
     var i =0;
    Object.keys(g_array).forEach(function (key) {
        //alert(g_array[key]);
        temp_array[i] = key+"="+g_array[key];
        i++;
    });
    
    return temp_array.join("&");
}

</script> 

  </body>
</html>
