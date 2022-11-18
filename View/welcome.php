<?php
include('../php-scripts/scripts.php');

if(!isset($_SESSION['email'])){
	header("Location: sign-up.php");
}


$conn = connection();
$sesion_id = $_SESSION['id'];
$fname = $lname = $email = $admin_image = '';
$sql = "SELECT * FROM admins WHERE id='$sesion_id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row["first_name"];
		$lname = $row["last_name"];
		$email = $row["email"];
		$admin_image = $row["admin_img"];
	}
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>YouCode | Scrum Board</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="../assets/css/vendor.min.css" rel="stylesheet" />
	<link href="../assets/css/default/app.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../css/style.css">
	<!-- ================== END core-css ================== -->
</head>
<body>
	

	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<div id="header" class="app-header">
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="#" class="navbar-brand"><img src="../assets/images/youcode-logo-transparent.png" alt=""></a>
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN header-nav -->
			<div class="navbar-nav">
				
				<div class="navbar-item navbar-user dropdown">
					<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
						<?php
							echo '
								<img src="../image/'.$admin_image.'" alt="" /> 
							'
						?>
						<span>
							<span class="d-none d-md-inline"><?php echo $fname .' '. $lname?></span>
							<b class="caret"></b>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item d-flex align-items-center">
							Inbox
							<span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span> 
						</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item">Log Out</a>
					</div>
				</div>
			</div>
			<!-- END header-nav -->
		</div>
		<!-- END #header -->
	
		<!-- BEGIN #sidebar -->
		<div id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<!-- BEGIN menu -->
				<div class="menu">
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>
							<div class="menu-profile-image">
								<?php
								echo '
								   <img src="../image/'.$admin_image.'" alt="" /> 
								   '
								?>
							</div>
							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
									<?php echo $fname .' '. $lname?>
									</div>
									<div class="menu-caret ms-auto"></div>
								</div>
								<small>Front end developer</small>
							</div>
						</a>
					</div>
					<div id="appSidebarProfileMenu" class="collapse">
						<div class="menu-item pt-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-cog"></i></div>
								<div class="menu-text">Settings</div>
							</a>
						</div>
						<div class="menu-item">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
								<div class="menu-text"> Send Feedback</div>
							</a>
						</div>
						<div class="menu-item pb-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-question-circle"></i></div>
								<div class="menu-text"> Helps</div>
							</a>
						</div>
						<div class="menu-divider m-0"></div>
					</div>
					
					

					<!-- BEGIN minify-button -->
					<div class="menu-item d-flex">
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
					<!-- END minify-button -->
				</div>
				<!-- END menu -->
			</div>
			<!-- END scrollbar -->
		</div>
		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>
		<!-- END #sidebar -->
		
		<!-- BEGIN #content -->
		<div id="content" class="app-content">
			<div class="d-flex align-items-center mb-3">
				<div>
					<!-- BEGIN page-header -->
					<h1 class="page-header mb-0" style="color: #1F4690">
						Hi, Welcome <?php echo $fname .' '. $lname?>
					</h1>
					<!-- END page-header -->
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
						<li class="breadcrumb-item active">YouCode Game Products Board </li>
					</ol>
					
				</div>
				
				<div class="ms-auto">
				<a href="#modal-task" id="addButton" data-bs-toggle="modal" class="btn btn-rounded text-white px-4 rounded-pill" style="background-color: #663DAD"><i class="fa fa-plus fa-lg me-2 ms-n2 text-white"></i> Add Product</a>
				</div>
			</div>
			

			<div class="container-fluid my-5 section-table">
				<div class="row">
					<div class="col">
						<div class="shadow-4 rounded-5 overflow-hidden">
							<div class="table-responsive">
								<table class="table align-middle mb-0" style="background-color: #2F3843; border-radius: 1rem;">
									<thead class="text-white-50" style="background-color:  #2F3843; border-radius: 1rem;">
										<tr style="color: #8D949D;">
										<th>Product Name</th>
										<th>Description</th>
										<th>Amount</th>
										<th>Date</th>
										<th>Price</th>
										<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										<?php
											getProducts();
										?>
									</tbody>
								</table>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END #content -->
		
		
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- TASK MODAL -->
	<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="../php-scripts/scripts.php" method="POST" id="form-task" enctype="multipart/form-data">
					<div class="modal-header">
						<h5 class="modal-title">Add Task</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input type="hidden" id="product-id" name="product-id">
							<div class="mb-3">
								<label class="form-label">Product Name</label>
								<input type="text" name="product-name" class="form-control" id="product-name"/>
							</div>
							<div class="mb-3">
								<label class="form-label">Product Amount</label>
								<input type="number" name="product-amount" class="form-control" id="product-amount"/>
							</div>
							<div class="mb-3">
								<label class="form-label">Product Image</label>
								<input type="file" name="uploadfile" class="form-control" id="product-image"/>
							</div>
							<div class="mb-3">
								<label class="form-label">Date</label>
								<input type="date" class="form-control" name="date" id="product-date"/>
							</div>
							<div class="mb-3">
								<label class="form-label">Product Price</label>
								<input type="number" name="product-price" class="form-control" id="product-price"/>
							</div>
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" name="description" rows="10" id="product-description"></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal">Cancel</a>
						<button type="submit" name="delete" class="d-none" id="buttonDelete"></a>
						<!-- <button type="submit" onclick="deleteTask()" name="delete" class="btn btn-danger task-action-btn" id="task-delete-btn">Delete</a> -->
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</a>
						<button type="submit" name="add" class="btn btn-primary task-action-btn" id="task-save-btn">ADD</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
	
	<!-- ================== BEGIN core-js ================== -->
	<script src="../assets/js/vendor.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
	<!-- ================== END core-js ================== -->
	<!-- <script src="scripts.js"></script> -->
	
</body>
</html>
