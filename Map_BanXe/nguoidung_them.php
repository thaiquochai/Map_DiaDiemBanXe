<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Thêm người dùng</h5>
				<div class="card-body">
					<form action="nguoidung_them_xuly.php" method="post">
						<div class="form-group">
							<label for="HoTen">Tên người dùng</label>
							<input type="text" class="form-control" id="HoTen" name="HoTen" required />
						</div>	
						
						<div class="form-group">
							<label for="Email">Email</label>
							<input type="text" class="form-control" id="Email" name="Email" required />
						</div>
						<div class="form-group">
							<label for="Password">Mật khẩu</label>
							<input type="text" class="form-control" id="Password" name="Password" required />
						</div>
						<div class="form-group">
							<label for="Remember">Xác nhận mật khẩu</label>
							<input type="text" class="form-control" id="Remember" name="Remember" required />
						</div>
						<div class="form-group">
							<label for="QuyenHan">Quyền hạn</label>
							<select id="QuyenHan" name="QuyenHan" required>
								<option value="">--chọn-- </option>
								<option value=1>Quản lí </option>
								<option value=2>Nhân viên </option>
							</select>
						</div>
						
						
						<button type="submit" class="btn btn-primary"><i class="fal fa-save"></i> Thêm vào CSDL</button>
					</form>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
	</body>
</html>