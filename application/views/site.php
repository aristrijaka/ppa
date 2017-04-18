
<!DOCTYPE html>
<html>
    <head>
    <link rel="shortcut icon" href="asset1/images/icon.png" />
        <link rel="shortcut icon" href="<?php echo base_url('asset2/img/icon.png');?>" />
        <meta name="keywords" content="P2a, Passage to ASEAN, Journey on Campus, Register, Registration, Universitas PGRI Semarang, Semarang, UPGRIS, PGRI, The Meaning University" />
        <meta name="description" content="P2a, Passage to ASEAN, Journey on Campus, Register, Registration, Universitas PGRI Semarang, Semarang, UPGRIS, PGRI, The Meaning University" />
        <meta name="author" content="BPTIK UPGRIS">

        <meta charset="UTF-8">
        <title>P2A | Passage to ASEAN</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="<?php echo base_url('asset2/css/bootstrap.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="<?php echo base_url('asset2/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="<?php echo base_url('asset2/css/ionicons.min.css');?>" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="<?php echo base_url('asset2/css/AdminLTE.css');?>" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url('asset2/css/datatables/dataTables.bootstrap.css');?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('asset2/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>" rel="stylesheet" type="text/css" />
        
        <script src="<?php echo base_url('asset2/js/jquery.js');?>"></script>
        
  
  <!--<link href="asset2/dist/css/introLoader.css" rel="stylesheet">-->
		<!-- jQuery, Helpers and jqueryIntrLoader 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>-->
		<!--<script src="asset2/dist/helpers/jquery.easing.1.3.js"></script>
        <script src="asset2/dist/helpers/spin.min.js"></script>
        <script src="asset2/dist/jquery.introLoader.js"></script>
        
        <script>
			$(function() {
				$("#element").introLoader();
            });
		</script>-->
    </head>
    <body class="skin-blue fixed">
    <!--<div id="element" class="introLoading"></div>-->
	
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                P2A - UPGRIS
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                
                <div class="navbar-right">
                    
                </div>
            </nav>
        </header>
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side" style="margin-left:0px">
            <?php
			if(!empty($konten)){
				$this->load->view($konten);
			}
			?>
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->




       <!-- jQuery 2.0.2 
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
		<!-- jQuery 2.0.2 -->
       
        <!-- Bootstrap -->
        <script src="<?php echo base_url('asset2/js/bootstrap.min.js');?>" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url('asset2/js/AdminLTE/app.js');?>" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script> -->
        <script src="<?php echo base_url('asset2/js/plugins/datatables/jquery.dataTables.js');?>" type="text/javascript"></script>
        <script src="<?php echo base_url('asset2/js/plugins/datatables/dataTables.bootstrap.js');?>" type="text/javascript"></script>
       
       
        <script src="<?php echo base_url('asset2/js/plugins/ckeditor/ckeditor.js');?>" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5
        <script src="asset2/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script> -->
        <script type="text/javascript">
            $(function() {
                $(".example1").dataTable();
                $('.example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": true,
                    "bFilter": true,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": true
                });
				$('.example3').dataTable({
                    "bPaginate": true,
                    "bLengthChange": true,
                    "bFilter": true,
                    "bSort": false,
                    "bInfo": true,
                    "bAutoWidth": false,
                });
				
            });
        </script>
        
        <script type="text/javascript">
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace('editor1');
				 CKEDITOR.replace('editor2');
				  CKEDITOR.replace('editor3');
				   CKEDITOR.replace('editor4');
                //bootstrap WYSIHTML5 - text editor
                //$(".textarea").wysihtml5();
            });
        </script>

    </body>
</html>
