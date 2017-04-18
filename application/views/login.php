<section class="content">
<div class="row-fluid">
	<div class="col-xs-12">
        <?php if($this->session->userdata('message') <> ''){echo "<div class='callout callout-info alert-dismissable'>".$this->session->userdata('message')."</div>";} ?>
    	<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab_1" data-toggle="tab">Login Form</a></li>
			
			</ul>
            
			<div class="tab-content">
            	<div class="tab-pane active" id="tab_1">
                <form action="<?php echo base_url();?>login/auth/" method="post">
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="text" class="form-control" id="text" name="username" placeholder="Username" required autofocus>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>
                </div>
            </div>
        </div>
        
     </div>
     
    </div>
    
    </section>