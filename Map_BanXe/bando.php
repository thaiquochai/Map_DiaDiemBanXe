<!DOCTYPE html>
<html lang="en">
	<?php include "header.php"; ?>
	
	<body>
		<div class="container">
			<?php include "navbar.php"; ?>
			
			<div style = " background:red" class="card mt-3" align="center">
				<h5 class="card-header"><b>BẢN ĐỒ</b></h5>
				<div id="map"></div>
			</div>
			
			<?php include "footer.php"; ?>
		</div>

		<?php include "javascript.php"; ?>
			<script type='text/javascript'
            src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
	  <script>
	  function GetMap()
			{
				var loai= "";
				var map = new Microsoft.Maps.Map('#map', {
					credentials: 'AkwsJumAcXta7Dj55fJPcP4VkO6J3yXb4wkhu4425pccR-Wa3zhij5EYkm6OKqoN',
					center: new Microsoft.Maps.Location(10.379901647105612, 105.43936377129461),
					mapTypeId: Microsoft.Maps.MapTypeId.Road,
					zoom: 15
				});
				db.collection("dia_diem").get().then((querySnapshot) => {
				querySnapshot.forEach((doc) => {
					
						loc = new Microsoft.Maps.Location(doc.data().ToaDo.latitude, doc.data().ToaDo.longitude);
						pin = new Microsoft.Maps.Pushpin(loc, {
							title: doc.data().TenDiaDiem,
							subTitle: doc.data().DiaChi,
							icon: "images/location.png"
						});
						map.entities.push(pin);
					});
				});
			}
    </script>
	</body>
</html>