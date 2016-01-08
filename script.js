function initialize () {
	var mapCanvas = document.getElementById("location");
	var mapOptions = {
		center: new google.maps.LatLng(47.6000, -122.1667), 
		zoom: 8,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	var map = new google.maps.Map(mapCanvas, mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);