<section class="content">
<div class="row-fluid">
	<div class="col-xs-12">
        <?php if($this->session->userdata('message') <> ''){echo "<div class='callout callout-info alert-dismissable'>".$this->session->userdata('message')."</div>";} ?>
    	<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab_1" data-toggle="tab">Register Detail</a></li>
			
			</ul>
            
			<div class="tab-content">
            	<div class="tab-pane active" id="tab_1">
        <table class="table">
	    <tr><td>Institution</td><td><?php echo $institution; ?></td></tr>
	    <tr><td>Nameofcp</td><td><?php echo $nameofcp; ?></td></tr>
	    <tr><td>Position</td><td><?php echo $position; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Mobile</td><td><?php echo $mobile; ?></td></tr>
	    <tr><td>S Title</td><td><?php echo $s_title; ?></td></tr>
	    <tr><td>S Fname</td><td><?php echo $s_fname; ?></td></tr>
	    <tr><td>S Lname</td><td><?php echo $s_lname; ?></td></tr>
	    <tr><td>S Gender</td><td><?php echo $s_gender; ?></td></tr>
	    <tr><td>S Position</td><td><?php echo $s_position; ?></td></tr>
	    <tr><td>S Email</td><td><?php echo $s_email; ?></td></tr>
	    <tr><td>S Telp</td><td><?php echo $s_telp; ?></td></tr>
	    <tr><td>S Mobile</td><td><?php echo $s_mobile; ?></td></tr>
	    <tr><td>S Foodrest</td><td><?php echo $s_foodrest; ?></td></tr>
	    <tr><td>S Package</td><td><?php echo $s_package; ?></td></tr>
	    <tr><td>S Arrival</td><td><?php echo $s_arrival; ?></td></tr>
	    <tr><td>S Departure</td><td><?php echo $s_departure; ?></td></tr>
	    <tr><td>C Title</td><td><?php echo $c_title; ?></td></tr>
	    <tr><td>C Fname</td><td><?php echo $c_fname; ?></td></tr>
	    <tr><td>C Lname</td><td><?php echo $c_lname; ?></td></tr>
	    <tr><td>C Gender</td><td><?php echo $c_gender; ?></td></tr>
	    <tr><td>C Position</td><td><?php echo $c_position; ?></td></tr>
	    <tr><td>C Email</td><td><?php echo $c_email; ?></td></tr>
	    <tr><td>C Telp</td><td><?php echo $c_telp; ?></td></tr>
	    <tr><td>C Mobile</td><td><?php echo $c_mobile; ?></td></tr>
	    <tr><td>C Foodrest</td><td><?php echo $c_foodrest; ?></td></tr>
	    <tr><td>C Package</td><td><?php echo $c_package; ?></td></tr>
	    <tr><td>C Arrival</td><td><?php echo $c_arrival; ?></td></tr>
	    <tr><td>C Departure</td><td><?php echo $c_departure; ?></td></tr>
	    <tr><td>Create At</td><td><?php echo $create_at; ?></td></tr>
	    <tr><td>Update At</td><td><?php echo $update_at; ?></td></tr>
	    <tr><td><a href="<?php echo site_url('register/data') ?>" class="btn btn-default">Cancel</a></td><td></td></tr>
	</table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
