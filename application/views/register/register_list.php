<section class="content">
<div class="row-fluid">
	<div class="col-xs-12">
        <?php if($this->session->userdata('message') <> ''){echo "<div class='callout callout-info alert-dismissable'>".$this->session->userdata('message')."</div>";} ?>
    	<div class="nav-tabs-custom">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#tab_1" data-toggle="tab">Register List</a></li>
			
			</ul>
            
			<div class="tab-content">
            	<div class="tab-pane active" id="tab_1">
                        <div class="row" style="margin-bottom: 10px">
                        <div class="col-md-4">
                            <?php echo anchor(site_url('register'),'Create', 'class="btn btn-primary"'); ?>
                        </div>
                        <div class="col-md-4 text-center">
                            <div style="margin-top: 8px" id="message">
                                
                            </div>
                        </div>
                        <div class="col-md-1 text-right">
                        </div>
                        <div class="col-md-3 text-right">
                            <form action="<?php echo site_url('register/data'); ?>" class="form-inline" method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                    <span class="input-group-btn">
                                        <?php 
                                            if ($q <> '')
                                            {
                                                ?>
                                                <a href="<?php echo site_url('register/data'); ?>" class="btn btn-default">Reset</a>
                                                <?php
                                            }
                                        ?>
                                      <button class="btn btn-primary" type="submit">Search</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="table table-bordered" style="margin-bottom: 10px">
                        <tr>
                            <th width="1%">No</th>
                    <th>Institution</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Coordinator</th>
                    <th>Create At</th>
                    <th>Action</th>
                        </tr><?php
                        foreach ($register_data as $register)
                        {
                            ?>
                            <tr>
                        <td width="80px"><?php echo ++$start ?></td>
                        <td><?php echo $register->institution ?></td>
                        <td><?php echo $register->s_title ?> <?php echo $register->s_fname ?> <?php echo $register->s_lname ?></td>
                        <td><?php echo $register->s_email ?></td>
                        <td><?php echo $register->s_mobile ?></td>
                        <td><?php echo $register->c_title ?> <?php echo $register->c_fname ?> <?php echo $register->c_lname ?></td>
                        <td><?php echo $register->create_at ?></td>
                        <td style="text-align:center" width="200px">
                            <?php 
                            echo anchor(site_url('register/read/'.$register->idreg),'Read', array('class' => 'btn btn-warning btn-xs')); 
                            echo ' | '; 
                            echo anchor(site_url('register/update/'.$register->idreg),'Update', array('class' => 'btn btn-success btn-xs')); 
                            echo ' | '; 
                            echo anchor(site_url('register/delete/'.$register->idreg),'Delete', array('class' => 'btn btn-danger btn-xs', 'onClick' => 'javasciprt: return confirm(\'Are You Sure ?\')')); 
                            ?>
                        </td>
                    </tr>
                            <?php
                        }
                        ?>
                    </table>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                    <?php echo anchor(site_url('register/excel'), 'Excel', 'class="btn btn-primary"'); ?>
                    <?php echo anchor(site_url('register/word'), 'Word', 'class="btn btn-primary"'); ?>
                    </div>
                        <div class="col-md-6 text-right">
                            <?php echo $pagination ?>
                        </div>
                    </div>
                </div>
            </div>
                
    
        
        
        
</div>
</div>
</section>