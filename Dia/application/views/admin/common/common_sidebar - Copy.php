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
			
			<li>
              <a href="<?php echo site_url("school/profile"); ?>">
                <i class="fa fa-refresh"></i> <span>சுயவிவரம்</span> <small class="label pull-right bg-green"></small>
              </a>
               
            </li>
			 <li>
              <a href="<?php echo site_url("history/manage_history"); ?>">
                <i class="fa fa-tasks "></i> <span>வரலாறு</span> <small class="label pull-right bg-green"></small>
              </a>
               
            </li>
			<li>
              <a href="<?php echo site_url("staff/manage_staff"); ?>">
                <i class="fa fa-calendar-check-o"></i> <span>நிர்வாகிகள் </span> <small class="label pull-right bg-green"></small>
              </a>
             
            </li>
			<li> 
              <a href="<?php echo site_url("achiever/manage_achiever"); ?>">
                <i class="fa fa-briefcase"></i> <span>சாதனையாளர்கள்</span> <small class="label pull-right bg-green"></small>
              </a>
                
            </li>
			<li>
              <a href="<?php echo site_url("socialservice/manage_socialservice"); ?>">
                <i class="fa fa-calendar-o"></i> <span>சமூகப்பணி </span> <small class="label pull-right bg-green"></small>
              </a>
               
            </li>
			<li>
              <a href="<?php echo site_url("events/manage_events"); ?>">
                <i class="fa fa-tasks"></i> <span>நிகழ்ச்சிகள்</span> <small class="label pull-right bg-green"></small>
              </a> 
            </li> 
			<li>
              <a href="<?php echo site_url("information/manage_information"); ?>">
                <i class="fa fa-pencil-square-o"></i> <span>தகவல்கள் </span> <small class="label pull-right bg-green"></small>
              </a> 
            </li>
			<li>
              <a href="<?php echo site_url("help/manage_help"); ?>">
                <i class="fa fa-calendar"></i> <span>உதவிகள்</span> <small class="label pull-right bg-green"></small>
              </a>
               <ul class="treeview-menu">
                        <li><a href="<?php echo site_url("help/manage_help"); ?>"><i class="fa fa-plus"></i>உதவி வேண்டுபவர்</a></li>
						<li><a href="<?php echo site_url("help/manage_help"); ?>"><i class="fa fa-list"></i>உதவி பரிந்துரைப்பவர்</a></li>
                        <li><a href="<?php echo site_url("help/manage_help"); ?>"><i class="fa fa-list"></i>உதவ முன்வருபவர்</a></li>
              </ul>
            </li>
			<li>
              <a href="<?php echo site_url("donation/manage_donation"); ?>">
                <i class="fa fa-money"></i> <span>நன்கொடை</span> <small class="label pull-right bg-green"></small>
              </a> 
            </li>
			 <li>
              <a href="<?php echo site_url("marriagehall/manage_marriagehall"); ?>">
			  <i class="fa fa-book"></i><span>திருமண மண்டபம்</span><small class="label pull-right bg-green"></small> 
			  </a>
             </li>
			 <li>
              <a href="<?php echo site_url("marriagecenter/manage_marriagecenter"); ?>">
                <i class="fa fa-pencil-square-o"></i> <span>திருமண தகவல் மையம்</span> <small class="label pull-right bg-green"></small>
              </a> 
            </li>
			<li>
              <a href="<?php echo site_url("marriagecenter/manage_marriagecenter"); ?>">
                <i class="fa fa-pencil-square-o"></i> <span>இதர அமைப்புகள்</span> <small class="label pull-right bg-green"></small>
              </a> 
            </li>
			<li>
              <a href="<?php echo site_url("marriagecenter/manage_marriagecenter"); ?>">
                <i class="fa fa-pencil-square-o"></i> <span>வேலை வாய்ப்புகள்</span> <small class="label pull-right bg-green"></small>
              </a> 
			  <ul class="treeview-menu">
                        <li><a href="<?php echo site_url("teacher/add_teacher"); ?>"><i class="fa fa-plus"></i>வேலை தேடுபவர்</a></li>
						<li><a href="<?php echo site_url("teacher/upload_teacher"); ?>"><i class="fa fa-list"></i>வேலை கொடுப்பவர்</a></li>
                        
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-graduation-cap"></i> <span>நாடார் மஹாஜனம்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher/upload_teacher"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher/add_teacher"); ?>"><i class="fa fa-plus"></i>சாதாரண உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher/list_teacher"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-book"></i> <span> மஹாஜன  இதழ்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher3/upload_teacher3"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher3/add_teacher3"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher3/list_teacher3"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
             
              <li>
              <a href="#">
                <i class="fa fa-user"></i> <span> </span>கல்வித்தந்தை <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher4/upload_teacher4"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher4/add_teacher4"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher4/list_teacher4"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
            
             <li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>உறவின்முறை</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher5/upload_teacher5"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher5/add_teacher5"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher5/list_teacher5"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
            
            <li>
              <a href="#">
                <i class="fa fa-money"></i> <span>மகளிர் மன்றம்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher1/upload_teacher1"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher1/add_teacher1"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher1/list_teacher1"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
               </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>காமராஜ் யுவகேந்திரா</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher6/upload_teacher6"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher6/add_teacher6"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
						<li><a href="<?php echo site_url("teacher6/list_teacher6"); ?>"><i class="fa fa-plus"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
          <li>
              <a href="#">
                <i class="fa fa-user"></i> <span>கல்வி நிறுவனங்கள்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher7/upload_teacher7"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher7/add_teacher7"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
						<li><a href="<?php echo site_url("teacher7/list_teacher7"); ?>"><i class="fa fa-plus"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
			<li>
              <a href="#">
                <i class="fa fa-user"></i> <span>பாண்டியனார் தொழிற்சங்கம்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher2/upload_teacher2"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher2/add_teacher2"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher2/list_teacher2"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-user"></i> <span>மகளிர் மேம்பாட்டு மையம்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher8/upload_teacher8"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher8/add_teacher8"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher8/list_teacher8"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
			
			
			
			
           <?php } ?> 
            
            
              <?php if(_get_current_user_type_id($this)==1){ ?>
               <li>
              <a href="<?php echo site_url("school/dashboard"); ?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <small class="label pull-right bg-green"></small>
              </a>
               
            </li>
               <li>
              <a href="<?php echo site_url("school/profile"); ?>">
                <i class="fa fa-refresh"></i> <span>சுயவிவரம்</span> <small class="label pull-right bg-green"></small>
              </a>
               
            </li>
			 <li>
              <a href="<?php echo site_url("history/manage_history"); ?>">
                <i class="fa fa-tasks "></i> <span>வரலாறு</span> <small class="label pull-right bg-green"></small>
              </a>
               
            </li>
			<li>
              <a href="<?php echo site_url("staff/manage_staff"); ?>">
                <i class="fa fa-calendar-check-o"></i> <span>நிர்வாகிகள் </span> <small class="label pull-right bg-green"></small>
              </a>
             
            </li>
			<li> 
              <a href="<?php echo site_url("achiever/manage_achiever"); ?>">
                <i class="fa fa-briefcase"></i> <span>சாதனையாளர்கள்</span> <small class="label pull-right bg-green"></small>
              </a>
                
            </li>
			<li>
              <a href="<?php echo site_url("socialservice/manage_socialservice"); ?>">
                <i class="fa fa-calendar-o"></i> <span>சமூகப்பணி </span> <small class="label pull-right bg-green"></small>
              </a>
               
            </li>
			<li>
              <a href="<?php echo site_url("events/manage_events"); ?>">
                <i class="fa fa-tasks"></i> <span>நிகழ்ச்சிகள்</span> <small class="label pull-right bg-green"></small>
              </a> 
            </li> 
			<li>
              <a href="<?php echo site_url("information/manage_information"); ?>">
                <i class="fa fa-pencil-square-o"></i> <span>தகவல்கள் </span> <small class="label pull-right bg-green"></small>
              </a> 
            </li>
			<li>
              <a href="<?php echo site_url("help/manage_help"); ?>">
                <i class="fa fa-calendar"></i> <span>உதவிகள்</span> <small class="label pull-right bg-green"></small>
              </a>
               <ul class="treeview-menu">
                        <li><a href="<?php echo site_url("help/manage_help"); ?>"><i class="fa fa-plus"></i>உதவி வேண்டுபவர்</a></li>
						<li><a href="<?php echo site_url("help/manage_help"); ?>"><i class="fa fa-list"></i>உதவி பரிந்துரைப்பவர்</a></li>
                        <li><a href="<?php echo site_url("help/manage_help"); ?>"><i class="fa fa-list"></i>உதவ முன்வருபவர்</a></li>
              </ul>
            </li>
			<li>
              <a href="<?php echo site_url("donation/manage_donation"); ?>">
                <i class="fa fa-money"></i> <span>நன்கொடை</span> <small class="label pull-right bg-green"></small>
              </a> 
            </li>
			 <li>
              <a href="<?php echo site_url("marriagehall/manage_marriagehall"); ?>">
			  <i class="fa fa-book"></i><span>திருமண மண்டபம்</span><small class="label pull-right bg-green"></small> 
			  </a>
             </li>
			 <li>
              <a href="<?php echo site_url("marriagecenter/manage_marriagecenter"); ?>">
                <i class="fa fa-pencil-square-o"></i> <span>திருமண தகவல் மையம்</span> <small class="label pull-right bg-green"></small>
              </a> 
            </li>
			<li>
              <a href="<?php echo site_url("marriagecenter/manage_marriagecenter"); ?>">
                <i class="fa fa-pencil-square-o"></i> <span>இதர அமைப்புகள்</span> <small class="label pull-right bg-green"></small>
              </a> 
            </li>
			<li>
              <a href="<?php echo site_url("marriagecenter/manage_marriagecenter"); ?>">
                <i class="fa fa-pencil-square-o"></i> <span>வேலை வாய்ப்புகள்</span> <small class="label pull-right bg-green"></small>
              </a> 
			  <ul class="treeview-menu">
                        <li><a href="<?php echo site_url("teacher/add_teacher"); ?>"><i class="fa fa-plus"></i>வேலை தேடுபவர்</a></li>
						<li><a href="<?php echo site_url("teacher/upload_teacher"); ?>"><i class="fa fa-list"></i>வேலை கொடுப்பவர்</a></li>
                        
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-graduation-cap"></i> <span>நாடார் மஹாஜனம்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher/upload_teacher"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher/add_teacher"); ?>"><i class="fa fa-plus"></i>சாதாரண உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher/list_teacher"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-book"></i> <span> மஹாஜன  இதழ்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher3/upload_teacher3"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher3/add_teacher3"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher3/list_teacher3"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
             
              <li>
              <a href="#">
                <i class="fa fa-user"></i> <span> </span>கல்வித்தந்தை <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher4/upload_teacher4"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher4/add_teacher4"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher4/list_teacher4"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
            
             <li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>உறவின்முறை</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher5/upload_teacher5"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher5/add_teacher5"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher5/list_teacher5"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
            
            <li>
              <a href="#">
                <i class="fa fa-money"></i> <span>மகளிர் மன்றம்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher1/upload_teacher1"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher1/add_teacher1"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher1/list_teacher1"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
               </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-calendar"></i> <span>காமராஜ் யுவகேந்திரா</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher6/upload_teacher6"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher6/add_teacher6"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
						<li><a href="<?php echo site_url("teacher6/list_teacher6"); ?>"><i class="fa fa-plus"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
          <li>
              <a href="#">
                <i class="fa fa-user"></i> <span>கல்வி நிறுவனங்கள்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher7/upload_teacher7"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher7/add_teacher7"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
						<li><a href="<?php echo site_url("teacher7/list_teacher7"); ?>"><i class="fa fa-plus"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
			<li>
              <a href="#">
                <i class="fa fa-user"></i> <span>பாண்டியனார் தொழிற்சங்கம்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher2/upload_teacher2"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher2/add_teacher2"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher2/list_teacher2"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-user"></i> <span>மகளிர் மேம்பாட்டு மையம்</span> <small class="label pull-right bg-green"></small>
              </a>
              <ul class="treeview-menu">
						<li><a href="<?php echo site_url("teacher8/upload_teacher8"); ?>"><i class="fa fa-list"></i>தரவு பதிவேற்றம்</a></li>
                        <li><a href="<?php echo site_url("teacher8/add_teacher8"); ?>"><i class="fa fa-plus"></i>உறுப்பினர்</a></li>
                        <li><a href="<?php echo site_url("teacher8/list_teacher8"); ?>"><i class="fa fa-list"></i>உறுப்பினர் விவரம்</a></li>
              </ul>
            </li>
            
             
           <?php } ?>  
           
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>