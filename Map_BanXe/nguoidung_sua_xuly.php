<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Xử lý sửa người dùng</h5>
				<div class="card-body">
					
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			var docRef = db.collection("nguoidung").doc("<?php echo $_POST['id'];?>");
				docRef.update({
					HoTen: "<?php echo $_POST['HoTen'];?>",
					Email: "<?php echo $_POST['Email'];?>",
					QuyenHan: "<?php echo $_POST['QuyenHan'];?>"
				})
				.then(() => {
					location.href="nguoidung.php"
				})
				.catch((error) => {					
					console.error("Error updating document: ", error);
				});

		</script>
	</body>
</html>