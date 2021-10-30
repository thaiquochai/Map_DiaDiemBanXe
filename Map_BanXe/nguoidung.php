<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div class="card mt-3">
				<h5 class="card-header">Người dùng</h5>
				<div class="card-body">
					<a href="nguoidung_them.php" class="btn btn-success mb-2"><i class="fal fa-plus"></i> Thêm người dùng</a>
					<table class="table table-bordered table-hover table-sm mb-0">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th width="20%">Họ tên</th>
								<th>Email</th>
								<th width="15%">Quyền hạn</th>
								<th width="5%">Sửa</th>
								<th width="5%">Xóa</th>
							</tr>
						</thead>
						<tbody id="HienThi">
							
						</tbody>
					</table>
				</div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>
		
		<?php include "javascript.php"; ?>
		<script>
			db.collection('nguoidung').get().then((querySnapshot) => {
				var stt = 1;
				var output = '';
				querySnapshot.forEach((doc) => {
					output += '<tr>';
						output += '<td>'+stt+'</td>';
						output += '<td>'+doc.data().HoTen+'</td>';
						output += '<td>'+doc.data().Email+'</td>';
						if(doc.data().QuyenHan == 1)
							output += '<td>Quản lí</td>';
						else if(doc.data().QuyenHan == 2)
							output += '<td>Nhân Viên</td>';
						output += '<td><a href= "nguoidung_sua.php?id='+doc.id+'" > <i class="fa fa-edit text-primary"></i></a></td>';
						output += '<td><a href= "nguoidung_xoa.php?id='+doc.id+'"><i class="fa fa-trash text-danger"></i></a></td>';
					output += '</tr>';
					stt++;
				});
				$('#HienThi').html(output);
			});
		</script>
	</body>
</html>