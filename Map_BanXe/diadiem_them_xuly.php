<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Xử lý thêm địa điểm</h5>
				<div class="card-body">
					
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			db.collection("dia_diem").add({
					TenDiaDiem: "<?php echo $_POST ['TenDiaDiem'];?>",		
					DiaChi: "<?php echo $_POST ['DiaChi'];?>",
					ToaDo: new firebase.firestore.GeoPoint("<?php echo $_POST ['ViDo'];?>", "<?php echo $_POST ['KinhDo'];?>" )				
				})
				.then((docRef) => {
					//console.log("Document written with ID: ", docRef.id);
					location.href="diadiem.php"
				})
				.catch((error) => {
					console.error("Error adding document: ", error);
				});
		</script>
	</body>
</html>