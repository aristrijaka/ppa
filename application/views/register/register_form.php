<section class="content-header">
<h1>
Passage to ASEAN (P2A) Journey on Campus - Oct 2-4, 2017
</h1>
Hosted by : University of PGRI Semarang
<h2>
</h2>
</section>
                
<section class="content container">
	<?php //include "modul/notifikasi.php";?>         
                  
<div class="row-fluid">
	<div class="col-xs-12">
    <?php if($this->session->userdata('message') <> ''){echo "<div class='callout callout-info alert-dismissable'>".$this->session->userdata('message')."</div>";} ?>
	<!-- Custom Tabs -->
		<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab_1" data-toggle="tab">Reply Slip</a></li>
				
                <li><a href="#tab_2" data-toggle="tab" >About Us</a></li>
				<li><a href="#tab_3" data-toggle="tab" >Information Center</a></li>         
				<li><a href="#tab_4" data-toggle="tab"><i class="fa fa-arrow-left"></i> FAQ</a></li> 
			</ul>
            
			<div class="tab-content">
            	<div class="tab-pane active" id="tab_1">
     				<form action="<?php echo $action; ?>" method="post" class="">            	
                   		<div class="row">
                    	<div class="col-md-12">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <i class="fa fa-building-o"></i>
                                        <h3 class="box-title">Institution Data</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                    	<div class="form-horizontal">
                                            <div class="form-group">
                                                <label class="control-label col-sm-3">Institution * : </label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" name="institution" id="institution" placeholder="Institution" value="<?php echo $institution; ?>" />
                                                    <?php echo form_error('institution') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="email">Name of Contact person * : </label>
                                                <div class="col-sm-5">
                                                     <input type="text" class="form-control" name="nameofcp" id="nameofcp" placeholder="Name of Contact person" value="<?php echo $nameofcp; ?>" />
                                                    <?php echo form_error('nameofcp') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="email">Position * : </label>
                                                <div class="col-sm-7">
                                                    <input type="text" class="form-control" name="position" id="position" placeholder="Position" value="<?php echo $position; ?>" />
                                                    <?php echo form_error('position') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3" >Email Address * : </label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
                                                    <?php echo form_error('email') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-3" for="email">Mobile * : </label>
                                                <div class="col-sm-3">
                                                    <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile" value="<?php echo $mobile; ?>" />
                                                    <?php echo form_error('mobile') ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        
                        
                        <!-- Batas Form-->
                        
                        
                            <div class="col-md-6">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <i class="fa fa-user"></i>
                                        <h3 class="box-title">1. Personal Data: Students Participant</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                     	<div class="form-horizontal">
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" >Title : </label>
                                                <div class="col-sm-5">
                                                   <select class="form-control" name="s_title">
                                                    <option value="Mr." <?php if($s_title=="Mr."){echo "selected";}?>>Mr.</option>
                                                    <option value="Miss" <?php if($s_title=="Miss"){echo "selected";}?>>Miss</option>
													</select>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="control-label col-sm-2" >Name : </label>
                                                <div class="col-sm-5">
                                                   <input type="text" class="form-control" name="s_fname" id="s_fname" placeholder="First Name" value="<?php echo $s_fname; ?>" />
												   <?php echo form_error('s_fname') ?>
                                                </div>
												<div class="col-sm-5">
                                                   <input type="text" class="form-control" name="s_lname" id="s_lname" placeholder="Last Name" value="<?php echo $s_lname; ?>" />
												   <?php echo form_error('s_lname') ?>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="control-label col-sm-2" >Gender : </label>
                                                <div class="col-sm-5">
                                                   <select class="form-control" name="s_gender">
                                                    <option value="Male" <?php if($s_gender=="Male"){echo "selected";}?>>Male</option>
                                                    <option value="Female" <?php if($s_gender=="Female"){echo "selected";}?>>Female</option>
													</select>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="control-label col-sm-2" >Position</label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control" name="s_position" id="s_position" placeholder="Position Held/Designation" value="<?php echo $s_position; ?>" />
												   <?php echo form_error('s_position') ?>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="control-label col-sm-2">Email : </label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control" name="s_email" id="s_email" placeholder="Email Address" value="<?php echo $s_email; ?>" />
												   <?php echo form_error('s_email') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Contact : </label>
                                                <div class="col-sm-5">
                                                   <input type="text" class="form-control" name="s_telp" id="s_telp" placeholder="Telephone #" value="<?php echo $s_telp; ?>" />
												   <?php echo form_error('s_telp') ?>
                                                </div>
												<div class="col-sm-5">
                                                   <input type="text" class="form-control" name="s_mobile" id="s_mobile" placeholder="Mobile #" value="<?php echo $s_mobile; ?>" />
												   <?php echo form_error('s_mobile') ?>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                               <strong>Foodrest restriction, etc., if any :</strong>
                                                </div>
                                                <div class="col-sm-12">
                                                  <textarea class="form-control" rows="2" name="s_foodrest" id="s_foodrest" placeholder="Foodrest restriction, etc., if any : "><?php echo $s_foodrest; ?></textarea>
                                                  <?php echo form_error('s_foodrest') ?>
                                                </div>
                                            </div>
                                                                            	
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                               <strong>P2A Journey on Campus Package:</strong>
                                                </div>
                                                <div class="col-sm-12">
                                                  <input type="radio" name="s_package" value="1" <?php if($s_package=="1"){echo "checked";}?>/> P2A Journey on Campus / USD 75 <br />
                                                  <input type="radio" name="s_package" value="2" <?php if($s_package=="2"){echo "checked";}?>/> P2A Adds On / USD 30 <br />
                                                  <?php echo form_error('s_package') ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                               <strong>Arrival Date, Time & Flight #:</strong>
                                                </div>
                                                <div class="col-sm-12">
                                                  <textarea class="form-control" rows="2" name="s_arrival" id="s_arrival" placeholder="Arrival Date, Time & Flight #"><?php echo $s_arrival; ?></textarea>
                                                  <?php echo form_error('s_arrival') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                               <strong>Departure Date, Time & Flight #:</strong>
                                                </div>
                                                <div class="col-sm-12">
                                                  <textarea class="form-control" rows="2" name="s_departure" id="s_departure" placeholder="Departure Date, Time & Flight #"><?php echo $s_departure; ?></textarea>
                                                  <?php echo form_error('s_departure') ?>
                                                </div>
                                            </div>
                                            
										</div>

                                       
                                        
                                      
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="box box-primary">
                                    <div class="box-header">
                                        <i class="fa fa-user"></i>
                                        <h3 class="box-title">2. Personal Data: Coordinator</h3>
                                    </div><!-- /.box-header -->
                                    <div class="box-body">
                                     	<div class="form-horizontal">
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" >Title : </label>
                                                <div class="col-sm-5">
                                                   <select class="form-control" name="c_title">
                                                    <option value="Prof." <?php if($c_title=="Prof."){echo "selected";}?>>Prof.</option>
                                                    <option value="Dr." <?php if($c_title=="Dr."){echo "selected";}?>>Dr.</option>
                                                    <option value="Mr." <?php if($c_title=="Mr."){echo "selected";}?>>Mr.</option>
                                                    <option value="Miss" <?php if($c_title=="Miss"){echo "selected";}?>>Miss</option>
                                                    <option value="Mrs." <?php if($c_title=="Mrs."){echo "selected";}?>>Mrs.</option>
													</select>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="control-label col-sm-2" >Name : </label>
                                                <div class="col-sm-5">
                                                   <input type="text" class="form-control" name="c_fname" id="c_fname" placeholder="First Name" value="<?php echo $c_fname; ?>" />
												   <?php echo form_error('c_fname') ?>
                                                </div>
												<div class="col-sm-5">
                                                   <input type="text" class="form-control" name="c_lname" id="c_lname" placeholder="Last Name" value="<?php echo $c_lname; ?>" />
												   <?php echo form_error('c_lname') ?>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="control-label col-sm-2" >Gender : </label>
                                                <div class="col-sm-5">
                                                   <select class="form-control" name="c_gender">
                                                    <option value="Male" <?php if($c_gender=="Male"){echo "selected";}?>>Male</option>
                                                    <option value="Female" <?php if($c_gender=="Female"){echo "selected";}?>>Female</option>
													</select>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="control-label col-sm-2" >Position : </label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control" name="c_position" id="c_position" placeholder="Position Held/Designation" value="<?php echo $c_position; ?>" />
												   <?php echo form_error('c_position') ?>
                                                </div>
                                            </div>
											<div class="form-group">
                                                <label class="control-label col-sm-2">Email : </label>
                                                <div class="col-sm-10">
                                                   <input type="text" class="form-control" name="c_email" id="c_email" placeholder="Email Address" value="<?php echo $c_email; ?>" />
												   <?php echo form_error('c_email') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">Contact : </label>
                                                <div class="col-sm-5">
                                                   <input type="text" class="form-control" name="c_telp" id="c_telp" placeholder="Telephone #" value="<?php echo $c_telp; ?>" />
												   <?php echo form_error('c_telp') ?>
                                                </div>
												<div class="col-sm-5">
                                                   <input type="text" class="form-control" name="c_mobile" id="c_mobile" placeholder="Mobile #" value="<?php echo $c_mobile; ?>" />
												   <?php echo form_error('c_mobile') ?>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                               <strong>Foodrest restriction, etc., if any :</strong>
                                                </div>
                                                <div class="col-sm-12">
                                                  <textarea class="form-control" rows="2" name="c_foodrest" id="c_foodrest" placeholder="Foodrest restriction, etc., if any : "><?php echo $c_foodrest; ?></textarea>
                                                  <?php echo form_error('c_foodrest') ?>
                                                </div>
                                            </div>
                                                                            	
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                               <strong>P2A Journey on Campus Package:</strong>
                                                </div>
                                                <div class="col-sm-12">
                                                  <input type="radio" name="c_package" value="1" <?php if($c_package=="1"){echo "checked";}?>/> P2A Journey on Campus / USD 75 <br />
                                                  <input type="radio" name="c_package" value="2" <?php if($c_package=="2"){echo "checked";}?>/> P2A Adds On / USD 30 <br />
                                                  <?php echo form_error('c_package') ?>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                               <strong>Arrival Date, Time & Flight #:</strong>
                                                </div>
                                                <div class="col-sm-12">
                                                  <textarea class="form-control" rows="2" name="c_arrival" id="c_arrival" placeholder="Arrival Date, Time & Flight #"><?php echo $c_arrival; ?></textarea>
                                                  <?php echo form_error('c_arrival') ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                               <strong>Departure Date, Time & Flight #:</strong>
                                                </div>
                                                <div class="col-sm-12">
                                                  <textarea class="form-control" rows="2" name="c_departure" id="c_departure" placeholder="Departure Date, Time & Flight #"><?php echo $c_departure; ?></textarea>
                                                  <?php echo form_error('c_departure') ?>
                                                </div>
                                            </div>
                                            
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="idreg" value="<?php echo $idreg; ?>" /> 
                        <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                        <a href="<?php echo site_url('register') ?>" class="btn btn-default">Cancel</a>
                    </form>                
                </div><!-- /.tab-content -->
                
                <div class="tab-pane" id="tab_2">
<pre>
                
Place Poster in Here

</pre>
                </div>
                <div class="tab-pane" id="tab_3">
                <pre>
                
Jl. Sidodadi Timur Nomor 24 - Dr. Cipto Semarang - indonesia
Email: upgris@gmail.com
Telephone: (024) 8316377 Faks. 8448217
University of PGRI Semarang

</pre>

                </div>
                <div class="tab-pane" id="tab_4">
               
               
               <div class="box box-solid">
                                
                                    <div class="box-group" id="accordion">
                                        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                                        <div class="panel box box-primary">
                                            <div class="box-header">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                       Questions #1
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in">
                                                <div class="box-body">
                                                    Answer #1
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel box box-danger">
                                            <div class="box-header">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                          Questions #2
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse">
                                                <div class="box-body">
                                                   Answer #2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel box box-success">
                                            <div class="box-header">
                                                <h4 class="box-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                          Questions #3
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse">
                                                <div class="box-body">
                                                   Answer #3
                                                </div>
                                            </div>
                                        </div>
                                   
               
                </div>
           	</div><!-- /.box -->
        </div>
	</div>  
</div>                                 

</section>

