$(document).ready(function () {


    $('body').on('click', '[href*="#anchor"]', function(e){
        let fixed_offset = 100;
        $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
        e.preventDefault();
    });

	let sandwich = function() {
		$(document).on('click', '.mobile-btn-wrap', function () {
			$('.sandwich').toggleClass('sandwich--active');

			$('.top-mobile-menu').toggle("fast");

		});
	};


	let map = function () {


        var map = new L.Map('map', {
            zoomControl: true,
            center: [40, 0],
        }).setView([50.45499, 30.23283], 13);


        let myIcon = L.icon({
            iconUrl: 'wp-content/themes/oklahoma2/images/marker-icon.png',
            iconSize: [48, 48],
            iconAnchor: [32, 48],
            popupAnchor: [-3, -76],
        });


       let marker = L.marker([50.463952, 30.151463], {icon: myIcon}).addTo(map);


        marker.bindPopup("<b>OKLAHOMA II</b><br>Котеджне містечко").openPopup();

        L.tileLayer('http://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
            attribution: 'OSM'
        }).addTo(map);

        map.on('click',
            function(e){
                var coord = e.latlng.toString().split(',');
                var lat = coord[0].split('(');
                var lng = coord[1].split(')');
                //console.log("You clicked the map at latitude: " + lat[1] + " and longitude:" + lng[0]);

                map.flyTo([lat[1], lng[0]], 10, {
                    animate: true,
                    duration: 2,
                    attributionControl: true

                });

            });
    };


    sandwich();
    map();


	/*Popup*/

	$("a[href='#callback']").magnificPopup({
		mainClass: 'my-mfp-zoom-in',
		removalDelay: 300,
		type: 'inline'
	});


});

