<?php
session_start();
require ('backend/taskClass.php');
REQUIRE 'backend/checkConnection.php';
$con= new connection();
$conn=$con->connn();
$taskClass=new taskClass();

$result = $taskClass->selectAll();



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
    <title>Table</title>
</head>
    <link rel="stylesheet" href="css/table.css"/>
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
								<th class="column2">Title</th>
								<th class="column3">Description</th>
								<th class="column4">Status</th>
								<th class="column5">From</th>
                                                                <th class="column6">to</th>
								<th class="column7">Created</th>
                                                                <th class="column8">Modify</th>
                                                                <th class="column8">Project Id</th>
                                                             
                                                            </tr>
						</thead>
                                              <?php  while($row = $result->fetch_assoc()){ ?>
                                                
                                                                                                
                                                <tbody>
                                                
								<tr onclick=\"selectID('" . $row['id'] . "')\">
									<td class="column1"><?php echo $taskid= $row['id'] ?></td>
                                                                        <td class="column2"><a href="backend/rowSelectTask.php?id=<?php echo $row['id'] ?>" ><?php echo $row['title'] ?> </a></td>
									<td class="column3"><?php echo$row['description'] ?></td>
                                                                        <td  class="column4"><?php echo $row['status'] ?></td>
									<td class="column5"><?php echo $row['from_user'] ?></td>
                                                                        <td class="column5"><?php echo $taskClass->taskassign($taskid) ?></td>
                                                                        <td class="column6"><?php echo$row['created'] ?></td>
                                                                        <td class="column7"><?php echo$row['modify'] ?></td>
                                              <td class="column7"><?php echo $row['projectid'];
//                                                                       while($row2= $result2->fetch_assoc()){ 
//                                                                           
//                                                                        if($row2['taskid'] == $row['id'])
//                                                                        {
//                                                                           { 
//                                                                              $ch=$row2['userid']; 
//                                                                           $x= new SQLdb('user',$ch);
//  $sql3=  $x->select();
//
//$result3 = $conn->query($sql3);
//$row3 = $result3->fetch_assoc();
//echo "  ".$row3['name'];
//                                                                           } 
//                                                                        }
                                                                       //}?> </td>
                                                                        
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


