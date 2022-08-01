<?php
session_start();

require_once ('backend/projectClass.php');
require_once 'backend/checkConnection.php';
$project= new projectClass;
$result =$project->selecta();



?>
<!DOCTYPE html>
<html lang="en">
    <title>Table</title>
    <link rel="stylesheet" href="css/projectTable.css"/>
<body>
    
   <div class="limiter">
      
		<div class="container-table100">
<?php  include('backend/header.php'); ?>
			<div class="wrap-table100">
				<div class="table100">
                                    <form target='_blank' name='getID' method='POST' action='rowSelect.php'>
                                        <input type='hidden' name='id' id='id'>
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">ID</th>
								<th class="column2">Name</th>
								<th class="column3">Description</th>
								<th class="column4">image</th>
								<th class="column5">Added by</th>
								<th class="column6">Created</th>
                                                                <th class="column7">Modified</th>
                                                                
                                                             
                                                            </tr>
						</thead>
                                              <?php  while($row = $result->fetch_assoc()){ ?>
                                                
                                                                                                
                                                <tbody>
                                                
								<tr onclick=\"selectID('" . $row['id'] . "')\">
									<td class="column1"><?php echo $row['id'] ?></td>
                                                                        <td class="column2"><a href="backend/rowSelect.php?id=<?php echo $row['id'] ?>" ><?php echo $row['name'] ?> </a></td>
									<td class="column3"><?php echo$row['description'] ?></td>
                                                                        <td  class="column4"><img src="backend/<?php echo $row['image'];?>" width="40px" height="40px"/></td>
									<td class="column5"><?php echo$row['added_by'] ?></td>
									<td class="column6"><?php echo$row['created'] ?></td>
                                                                        <td class="column7"><?php echo$row['modify'] ?></td>
                                                                        
                                                                        
                                                                        
								</tr>
                                                	
								
						</tbody>

                                              <?php }?>
					</table>
                                    </form>
				</div>
			</div>
		</div>
	</div>

<script src="rowSelect.js"></script>
</body>
<?php include('backend/footer.php'); ?>
</html>