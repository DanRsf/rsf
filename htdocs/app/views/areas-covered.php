<?php $this->load->view('includes/meta', $this->data); ?>

<body class="areas">

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div class="page-header">
            <div id="areas-map"></div>
        </div>

        <div class="container section">
            <h2>Areas we cover</h2>
            <p>We cover the following areas: Chigwell, Loughton, Upminster, Gidea Park, Romford, Harold Wood, Brentwood, Hutton, Billericay, Hornchurch, Grays, Rainham, Basildon, Chelmsford, Buckhurst Hill, including the whole of London and Essex.</p>
            <p>The shape drawn on the map above gives you a rough idea of the areas we cover. However, this is ONLY a guideline and we are certainly open to areas slightly outside of our reach. Don't hesitate to ask us at any time.</p>
        </div>

        <?php $this->load->view('includes/footer', $this->data); ?>

    </div>

    <?php $this->load->view('includes/scripts', $this->data); ?>

    <script>
        function initMap() {

            var areaOverlay = [
                {lng: 0.076904, lat: 52.234528},
                {lng: 0.145569, lat: 52.244620},
                {lng: 0.186768, lat: 52.227799},
                {lng: 0.208740, lat: 52.221070},
                {lng: 0.260925, lat: 52.222752},
                {lng: 0.296631, lat: 52.217704},
                {lng: 0.324097, lat: 52.242938},
                {lng: 0.365295, lat: 52.263115},
                {lng: 0.387268, lat: 52.274880},
                {lng: 0.414734, lat: 52.276561},
                {lng: 0.436707, lat: 52.274880},
                {lng: 0.472412, lat: 52.278241},
                {lng: 0.513611, lat: 52.278241},
                {lng: 0.557556, lat: 52.274880},
                {lng: 0.593262, lat: 52.269838},
                {lng: 0.631714, lat: 52.271519},
                {lng: 0.700378, lat: 52.271519},
                {lng: 0.782776, lat: 52.264796},
                {lng: 0.802002, lat: 52.249665},
                {lng: 0.856934, lat: 52.247983},
                {lng: 0.909119, lat: 52.237892},
                {lng: 0.972290, lat: 52.226117},
                {lng: 1.018982, lat: 52.209290},
                {lng: 1.076660, lat: 52.178985},
                {lng: 1.126099, lat: 52.130116},
                {lng: 1.145325, lat: 52.104818},
                {lng: 1.246948, lat: 52.081194},
                {lng: 1.299133, lat: 52.049112},
                {lng: 1.362305, lat: 52.000101},
                {lng: 1.367798, lat: 51.974730},
                {lng: 1.354065, lat: 51.954422},
                {lng: 1.329346, lat: 51.935799},
                {lng: 1.277161, lat: 51.927331},
                {lng: 1.255188, lat: 51.905307},
                {lng: 1.255188, lat: 51.884968},
                {lng: 1.277161, lat: 51.878187},
                {lng: 1.290894, lat: 51.866316},
                {lng: 1.274414, lat: 51.844263},
                {lng: 1.186523, lat: 51.801822},
                {lng: 1.131592, lat: 51.776338},
                {lng: 1.060181, lat: 51.772939},
                {lng: 1.021729, lat: 51.783135},
                {lng: 0.994263, lat: 51.789931},
                {lng: 0.955811, lat: 51.779736},
                {lng: 0.922852, lat: 51.772939},
                {lng: 0.892639, lat: 51.771239},
                {lng: 0.928345, lat: 51.742337},
                {lng: 0.944824, lat: 51.716819},
                {lng: 0.936584, lat: 51.681071},
                {lng: 0.936584, lat: 51.657223},
                {lng: 0.936584, lat: 51.635067},
                {lng: 0.950317, lat: 51.612900},
                {lng: 0.895386, lat: 51.568534},
                {lng: 0.837708, lat: 51.549751},
                {lng: 0.785522, lat: 51.525834},
                {lng: 0.598755, lat: 51.537794},
                {lng: 0.653687, lat: 51.515580},
                {lng: 0.571289, lat: 51.513871},
                {lng: 0.510864, lat: 51.505323},
                {lng: 0.513611, lat: 51.489935},
                {lng: 0.579529, lat: 51.484804},
                {lng: 0.670166, lat: 51.476251},
                {lng: 0.708618, lat: 51.469408},
                {lng: 0.738831, lat: 51.450584},
                {lng: 0.829468, lat: 51.428327},
                {lng: 0.889893, lat: 51.416338},
                {lng: 0.939331, lat: 51.382067},
                {lng: 0.958557, lat: 51.366636},
                {lng: 1.054688, lat: 51.364921},
                {lng: 1.126099, lat: 51.370066},
                {lng: 1.241455, lat: 51.378638},
                {lng: 1.285400, lat: 51.383781},
                {lng: 1.351318, lat: 51.387209},
                {lng: 1.433716, lat: 51.390637},
                {lng: 1.444702, lat: 51.356346},
                {lng: 1.411743, lat: 51.330612},
                {lng: 1.367798, lat: 51.327179},
                {lng: 1.381531, lat: 51.294559},
                {lng: 1.392517, lat: 51.251601},
                {lng: 1.400757, lat: 51.184508},
                {lng: 1.376038, lat: 51.148340},
                {lng: 1.310120, lat: 51.125937},
                {lng: 1.224976, lat: 51.108696},
                {lng: 1.186523, lat: 51.074194},
                {lng: 1.065674, lat: 51.069017},
                {lng: 0.961304, lat: 51.079371},
                {lng: 0.881653, lat: 51.093173},
                {lng: 0.758057, lat: 51.110420},
                {lng: 0.708618, lat: 51.098348},
                {lng: 0.659180, lat: 51.094898},
                {lng: 0.617981, lat: 51.110420},
                {lng: 0.552063, lat: 51.106971},
                {lng: 0.494385, lat: 51.105247},
                {lng: 0.428467, lat: 51.103522},
                {lng: 0.359802, lat: 51.100073},
                {lng: 0.293884, lat: 51.091448},
                {lng: 0.233459, lat: 51.094898},
                {lng: 0.211487, lat: 51.091448},
                {lng: 0.151062, lat: 51.117317},
                {lng: 0.065918, lat: 51.120765},
                {lng: 0.019226, lat: 51.125937},
                {lng: -0.038452, lat: 51.103522},
                {lng: -0.118103, lat: 51.094898},
                {lng: -0.184021, lat: 51.086273},
                {lng: -0.233459, lat: 51.086273},
                {lng: -0.258179, lat: 51.096623},
                {lng: -0.315857, lat: 51.091448},
                {lng: -0.332336, lat: 51.125937},
                {lng: -0.340576, lat: 51.158677},
                {lng: -0.373535, lat: 51.174177},
                {lng: -0.455933, lat: 51.193115},
                {lng: -0.516357, lat: 51.215486},
                {lng: -0.637207, lat: 51.213766},
                {lng: -0.681152, lat: 51.222368},
                {lng: -0.736084, lat: 51.268789},
                {lng: -0.755310, lat: 51.296276},
                {lng: -0.785522, lat: 51.327179},
                {lng: -0.741577, lat: 51.388923},
                {lng: -0.804749, lat: 51.404346},
                {lng: -0.804749, lat: 51.445449},
                {lng: -0.777283, lat: 51.495065},
                {lng: -0.821228, lat: 51.549751},
                {lng: -0.780029, lat: 51.606077},
                {lng: -0.769043, lat: 51.641885},
                {lng: -0.714111, lat: 51.700651},
                {lng: -0.712738, lat: 51.723626},
                {lng: -0.693512, lat: 51.790780},
                {lng: -0.648193, lat: 51.828988},
                {lng: -0.556183, lat: 51.904460},
                {lng: -0.546570, lat: 51.978113},
                {lng: -0.532837, lat: 52.086257},
                {lng: -0.523224, lat: 52.111566},
                {lng: -0.510864, lat: 52.152872},
                {lng: -0.383148, lat: 52.178142},
                {lng: -0.306244, lat: 52.207607},
                {lng: -0.288391, lat: 52.217704},
                {lng: -0.204620, lat: 52.236210},
                {lng: -0.054932, lat: 52.241256},
                {lng: 0.076904, lat: 52.234528 }
            ];
            var myLatLng = {lat: 51.6592418, lng: 0.2173086};

            // Set zoom level for mobile devices
            var zoom = $(window).width() > breakpoints.medium + 1 ? 8 : 7;

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('areas-map'), {
                center: myLatLng,
                scrollwheel: false,
                zoom: zoom,
                disableDefaultUI: true,
                zoomControl: true
            });

            var area = new google.maps.Polygon({
                path: areaOverlay,
                fillColor: '#0E5A94',
                fillOpacity: 0.35,
                strokeColor: '#0A3E64',
                strokeOpacity: 0.6,
                strokeWeight: 2
            });

            area.setMap(map);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs-0yThrbAompGPyxsE57NlhgI9tZ7YhI&callback=initMap"></script> -->
</body>
</html>
