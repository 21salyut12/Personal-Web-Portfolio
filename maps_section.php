<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Proiect PAI</title>
    <style>
        #map {
            height: 78.5vh;
            width: 100%;
        }
    </style>
</head>

<body class="bg-image image">
    <header>
        <nav class="navbar">
            <ul>
                <li>
                    <a href="about-me.html" class="navbar-item">About Me</a>
                </li>
                <li>
                    <a href="projects.html" class="navbar-item">Stuff I've Done</a>
                </li>
                <li>
                    <a href="contact.html" class="navbar-item">Contact</a>
                </li>
                <li>
                    <a href="maps_section.php" class="navbar-item">Visited Cities</a>
                </li>
                <li>
                    <a href="logout.php" tite="Logout" class="navbar-item">Logout</a>
                </li>
            </ul>
        </nav>
    </header>
    <section>
        <h1>Some random cities I've visited before</h1>
        <div id="map"></div>
    </section>
    <script>
        function initMap() {
            var options = {
                zoom: 7,
                center: {
                    lat: 45.6500,
                    lng: 25.6000
                }
            }

            var map = new google.maps.Map(document.getElementById("map"), options);

            var coords = [{
                    lat: 45.6500,
                    lng: 25.6000
                }, {
                    lat: 44.4000,
                    lng: 26.0833
                },
                {
                    lat: 47.1622,
                    lng: 27.5889
                }, {
                    lat: 44.9244,
                    lng: 25.4572
                }
            ]

            function addMarker(coords) {
                var marker = new google.maps.Marker({
                    position: coords,
                    map: map
                });
            }

            for (let i = 0; i <= coords.length; i++) {
                addMarker(coords[i]);
            }
        }
    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiO08i_2iDzrI0JD8z7FnZtvB-5y-KlpY&callback=initMap">
    </script>
</body>

</html>