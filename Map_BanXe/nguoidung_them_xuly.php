<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Xử lý thêm nguoi dung</h5>
				<div class="card-body">
					
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			db.collection("nguoidung").add({
					HoTen: "<?php echo $_POST ['HoTen'];?>",
					Email: "<?php echo $_POST ['Email'];?>",
					Password: "<?php echo $_POST ['Password'];?>",
					Remember: "<?php echo $_POST ['Remember'];?>",
					QuyenHan: "<?php echo $_POST ['QuyenHan'];?>"	
				})
				.then((docRef) => {
					//console.log("Document written with ID: ", docRef.id);
					location.href="nguoidung.php"
				})
				.catch((error) => {
					console.error("Error adding document: ", error);
				});
		</script>
	</body>
</html>