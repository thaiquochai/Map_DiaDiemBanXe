<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Sửa địa điểm</h5>
				<div class="card-body">
					<form action="diadiem_sua_xuly.php" method="post">
						<input type="text" class="form-control" id="id" name="id" hidden />
						<div class="form-group">
							<label for="TenDiaDiem">Tên địa điểm</label>
							<input type="text" class="form-control" id="TenDiaDiem" name="TenDiaDiem" required />
						</div>
						<div class="form-group">
							<label for="DiaChi">Địa chỉ</label>
							<input type="text" class="form-control" id="DiaChi" name="DiaChi" required />
						</div>
						<div class="form-group">
							<label for="ViDo">Vĩ độ</label>
							<input type="text" class="form-control" id="ViDo" name="ViDo" required />
						</div>
						<div class="form-group">
							<label for="KinhDo">Kinh độ</label>
							<input type="text" class="form-control" id="KinhDo" name="KinhDo" required />
						</div>
						
						<button type="submit" class="btn btn-primary"><i class="fal fa-edit"></i> Cập nhật</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			var docRef = db.collection("dia_diem").doc("<?php echo $_GET['id'];?>");

				docRef.get().then((doc) => {
					if (doc.exists) {
						$('#id').val(doc.id);
						$('#TenDiaDiem').val(doc.data().TenDiaDiem);
						$('#loaidiadiem').val(doc.data().LoaiDiaDiem);
						$('#DiaChi').val(doc.data().DiaChi);
						$('#ViDo').val(doc.data().ToaDo.latitude);
						$('#KinhDo').val(doc.data().ToaDo.longitude);
					} else {
						// doc.data() will be undefined in this case
						console.log("No such document!");
						
					}
				}).catch((error) => {
					console.log("Error getting document:", error);
				});
		</script>
	</body>
</html>