<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Xử lý sửa địa điểm</h5>
				<div class="card-body">
					
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			var docRef = db.collection("dia_diem").doc("<?php echo $_POST['id'];?>");
				docRef.update({
					TenDiaDiem: "<?php echo $_POST ['TenDiaDiem'];?>",
					DiaChi: "<?php echo $_POST ['DiaChi'];?>",
					ToaDo: new firebase.firestore.GeoPoint("<?php echo $_POST ['ViDo'];?>", "<?php echo $_POST ['KinhDo'];?>" )
				})
				.then(() => {
					location.href="diadiem.php"
				})
				.catch((error) => {					
					console.error("Error updating document: ", error);
				});
		</script>
	</body>
</html>