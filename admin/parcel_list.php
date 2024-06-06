<?php 
	include('db_connect.php'); 
?>
	<?php include('header.php'); ?>
	<?php include('sidebar.php');?>

<div class="col-lg-8" style="margin-left:300px; margin-top:-600px;">
<h3 class="text-success text-center mt-4">Sender Details</h3>
	<div class="card card-outline card-primary" style="width:920px;">
		
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<!-- <colgroup>
					<col width="5%">
					<col width="15%">
					<col width="25%">
					<col width="25%">
					<col width="15%">
				</colgroup> -->
				<thead>
					<tr>
						<th class="text-center">UserID</th>
						
						<th class="text-center">Pincode</th>
						<th class="text-center">Area</th>
						<th class="text-center">City</th>
						<th class="text-center">Package Category</th>
						<th class="text-center">Package Weight</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					
					// $qry = $conn->query("SELECT * from orders $where order by  unix_timestamp(receiver_city) desc ");
					//$qry = $conn->query("SELECT user.*, signup_frm.* FROM user INNER JOIN signup_frm ON user.user_id = signup_frm.user_id $where ORDER BY unix_timestamp(receiver_city) DESC ");
					
					$qry = $conn->query("SELECT * FROM user");

					

					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						
						<td class="text-center"><b><?php echo ($row['user_id']); ?></b></td>
						<td class="text-center"><b><?php echo ($row['pincode']); ?></b></td>
						<td class="text-center"><b><?php echo ($row['area']); ?></b></td>
						<td class="text-center"><b><?php echo ($row['city']); ?></b></td>
						<td class="text-center"><b><?php echo ($row['package_category']); ?></b></td>
						<td class="text-center"><b><?php echo ($row['package_weight']);?></b></td>
						
							<!--<?php 
							switch ($row['receiver_state']) {
								case '1':
									echo "<span class='badge badge-pill badge-info'> Collected</span>";
									break;
								case '2':
									echo "<span class='badge badge-pill badge-info'> Shipped</span>";
									break;
								case '3':
									echo "<span class='badge badge-pill badge-primary'> In-Transit</span>";
									break;
								case '4':
									echo "<span class='badge badge-pill badge-primary'> Arrived At Destination</span>";
									break;
								case '5':
									echo "<span class='badge badge-pill badge-primary'> Out for Delivery</span>";
									break;
								case '6':
									echo "<span class='badge badge-pill badge-primary'> Ready to Pickup</span>";
									break;
								case '7':
									echo "<span class='badge badge-pill badge-success'>Delivered</span>";
									break;
								case '8':
									echo "<span class='badge badge-pill badge-success'> Picked-up</span>";
									break;
								case '9':
									echo "<span class='badge badge-pill badge-danger'> Unsuccessfull Delivery Attempt</span>";
									break;
								
								default:
									echo "<span class='badge badge-pill badge-info'> Item Accepted by Courier</span>";
									
									break;
							}

							?>-->
							
                        </td>
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="edit_parcel.php?page=edit_parcel&id=<?php echo $row['user_id']; ?>" class="btn btn-primary btn-flat ">
		                          <i class="fas fa-edit"></i>
		                        </a>
								<button type="button" class="btn btn-danger btn-flat delete_button" data-id="<?php 	echo $row['user_id']; ?>">
   									 <i class="fas fa-trash"></i>
								</button>
								<!--<a href="newin.php?page=newin&id=<?php echo $row['user_id']; ?>" class="btn btn-primary btn-flat ">view</a>-->
								
					
	                      </div>
						</td>

						
						
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<style>
	table td{
		vertical-align: middle !important;
	}
</style>


<script>
    $(document).ready(function(){
        $('.delete_button').click(function(){
            var user_id = $(this).data('id');
            if(confirm("Are you sure you want to delete this record?")) {
                $.ajax({
                    url: 'delete_user.php', // Replace 'delete_user.php' with the path to your PHP deletion script
                    method: 'POST',
                    data: {user_id: user_id},
                    success: function(response) {
                        // Refresh the page or perform any other actions after successful deletion
                        alert("Record deleted successfully!");
                        location.reload(); // Reload the page
                    },
                    error: function(xhr, status, error) {
                        alert("An error occurred while deleting the record.");
                    }
                });
            }
        });
    });
</script>

