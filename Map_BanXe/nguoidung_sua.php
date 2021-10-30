<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Sửa người dùng</h5>
				<div class="card-body">
					<form action="nguoidung_sua_xuly.php" method="post">
						<input type="text" class="form-control" id="id" name="id" hidden />
						<div class="form-group">
							<label for="HoTen">Tên người dùng</label>
							<input type="text" class="form-control" id="HoTen" name="HoTen" required />
						</div>	
						
						<div class="form-group">
							<label for="Email">Email</label>
							<input type="text" class="form-control" id="Email" name="Email" required />
						</div>
						<div class="form-group">
							<label for="QuyenHan">Quyền hạn</label>
							<select id="QuyenHan" name="QuyenHan">
								<option value="">--chọn-- </option>
								<option value=1>Quản lí </option>
								<option value=2>Nhân viên </option>
							</select>
						</div>
						
						
						<button type="submit" class="btn btn-primary"><i class="fal fa-edit"></i> Cập nhật</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			var docRef = db.collection("nguoidung").doc("<?php echo $_GET['id'];?>");

				docRef.get().then((doc) => {
					if (doc.exists) {	
						$('#id').val(doc.id);
						$('#HoTen').val(doc.data().HoTen);
						$('#Email').val(doc.data().Email);		
						$('#QuyenHan').val(doc.data().QuyenHan);			
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