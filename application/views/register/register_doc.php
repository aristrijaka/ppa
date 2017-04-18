<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Register List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Institution</th>
		<th>Nameofcp</th>
		<th>Position</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>S Title</th>
		<th>S Fname</th>
		<th>S Lname</th>
		<th>S Gender</th>
		<th>S Position</th>
		<th>S Email</th>
		<th>S Telp</th>
		<th>S Mobile</th>
		<th>S Foodrest</th>
		<th>S Package</th>
		<th>S Arrival</th>
		<th>S Departure</th>
		<th>C Title</th>
		<th>C Fname</th>
		<th>C Lname</th>
		<th>C Gender</th>
		<th>C Position</th>
		<th>C Email</th>
		<th>C Telp</th>
		<th>C Mobile</th>
		<th>C Foodrest</th>
		<th>C Package</th>
		<th>C Arrival</th>
		<th>C Departure</th>
		<th>Create At</th>
		<th>Update At</th>
		
            </tr><?php
            foreach ($register_data as $register)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $register->institution ?></td>
		      <td><?php echo $register->nameofcp ?></td>
		      <td><?php echo $register->position ?></td>
		      <td><?php echo $register->email ?></td>
		      <td><?php echo $register->mobile ?></td>
		      <td><?php echo $register->s_title ?></td>
		      <td><?php echo $register->s_fname ?></td>
		      <td><?php echo $register->s_lname ?></td>
		      <td><?php echo $register->s_gender ?></td>
		      <td><?php echo $register->s_position ?></td>
		      <td><?php echo $register->s_email ?></td>
		      <td><?php echo $register->s_telp ?></td>
		      <td><?php echo $register->s_mobile ?></td>
		      <td><?php echo $register->s_foodrest ?></td>
		      <td><?php echo $register->s_package ?></td>
		      <td><?php echo $register->s_arrival ?></td>
		      <td><?php echo $register->s_departure ?></td>
		      <td><?php echo $register->c_title ?></td>
		      <td><?php echo $register->c_fname ?></td>
		      <td><?php echo $register->c_lname ?></td>
		      <td><?php echo $register->c_gender ?></td>
		      <td><?php echo $register->c_position ?></td>
		      <td><?php echo $register->c_email ?></td>
		      <td><?php echo $register->c_telp ?></td>
		      <td><?php echo $register->c_mobile ?></td>
		      <td><?php echo $register->c_foodrest ?></td>
		      <td><?php echo $register->c_package ?></td>
		      <td><?php echo $register->c_arrival ?></td>
		      <td><?php echo $register->c_departure ?></td>
		      <td><?php echo $register->create_at ?></td>
		      <td><?php echo $register->update_at ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>