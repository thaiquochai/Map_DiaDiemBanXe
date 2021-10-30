<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Nhập người dùng</h5>
				<div class="card-body">
					<?php 
					// Kết nối
						$link = mysqli_connect("127.0.0.1", "root", "vertrigo", "diadiembanxe");
						mysqli_set_charset($link, "utf8");
						
						// Xử lý truy vấn
						$query = "SELECT * FROM `nguoi_dung` WHERE 1";
						$danhsach = mysqli_query($link, $query);
						
						// Chỉ lấy các cột cần thiết
						$dsnguoidung = [];
						while($dong = mysqli_fetch_array($danhsach))
						{
						$nguoidung['HT'] = $dong['ho_ten'];
							$nguoidung['EM'] = $dong['email'];
							$nguoidung['PW'] = $dong['password'];
							$nguoidung['XNMK'] = $dong['remember_token'];
							
						
							
							$nguoidung['QH'] = $dong['quyen_han'];
							$dsnguoidung[] = $nguoidung;
						}
						 
						 var_dump($dsnguoidung);
					?>
						
						
						
						
					<div id="KetQua">
						<div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
							<span id="ThongBao"></span>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					</div>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			var batch = db.batch();
			
			<?php
				$i = 1;
				foreach($dsnguoidung as $value)
				{
			?>
					var docRef = db.collection("nguoidung").doc("<?php echo str_pad($i, 10, "0", STR_PAD_LEFT); ?>");
					batch.set(docRef, {
						HoTen: "<?php echo $value['HT']; ?>",			
						Email: "<?php echo $value['EM']; ?>",	
						Password: "<?php echo $value['PW']; ?>",
						Remember: "<?php echo $value['XNMK']; ?>",
						QuyenHan: "<?php echo $value['QH']; ?>"
					});
			<?php
					$i++;
				}
			?>
			
			$('#KetQua').hide();
			batch.commit().then(() => {
				$('#KetQua').show();
				$('#ThongBao').html("Đã nhập thành công <?php echo $i; ?> dòng dữ liệu vào Firebase.");
			}).catch(error => {
				$('#KetQua').show();
				$('#ThongBao').html("Lỗi: " + error);
			});
		</script>
	</body>
</html>