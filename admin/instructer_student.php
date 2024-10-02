<?php 
	include 'header.php';
?>
<style>
    tr th{
        width: auto !important;
    }
</style>
		<div class="container">
<div class="row header">
                <div class="widget-heading">
                    <h5 class="" style="color: black !important">Instructer Student</h5>
                </div>
                <?php include 'error.php'; ?>
                <div class="widget-content widget-content-area table_area br-6">
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>Student Name</th>
                                <th>Student Email</th>
                                <th>Instructor Name</th>
                                <th>Instructor Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                             
                                <tr>
                                  <td>1</td> 
                                  <td>Siddique</td> 
                                  <td>Ali@mail.com</td> 
                                  <td>dhshj</td> 
                                  <td>Abc@example.com</td> 
                                  <td>+02336363636</td> 
                                  <td><a href="" onClick='return confirm("Confirm to unassigned?")' class="btn btn-primary">UnAssign</a></td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>

         </div>
</div> 

<?php 
	include 'footer.php';
?>