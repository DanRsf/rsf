<?php $this->load->view('includes/meta', $this->data); ?>

<body>

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div id="ct-intro" class="page-header">
            <div class="copy">
                <h1>See how <strong>we can help</strong><br />with your project</h1>
            </div>
            <a href="#form-container" class="section-link">find out how to contact us</a>
        </div>

        <div id="form-container" class="container">
            <div class="left-column">
                <p>Getting the bathroom of your dreams couldn’t be easier than with RSF Bathroom Designs.</p>
                <p>Whether you are seeking inspiration or remodelling your bathroom, our experts will answer your questions, help you select the right product from our extensive range, and provide a full bespoke design and consultation service.</p>
                <p>You can view our products in person and truly get a sense of what will work in your own home by visiting our fully operational showroom – one of the South East’s largest.   See below for our contact details and location.</p>
                <p>Get in touch with us using our contact form, and one of our highly experienced team will be happy to answer your questions or discuss your project.</p>
                <div class="contact-details">
                    <p>call us now <strong>01708 444355</strong></p>
                    <a href="mailto:info@rsfbathroomdesigns.com">info@rsfbathroomdesigns.com</a>
                </div>
            </div>
            <div class="form">
                <h2>Drop us an email</h2>
                <?php echo form_open();?>
                <input type="text" name="name" placeholder="name" />
                <input type="text" name="email" placeholder="email" />
                <input type="text" name="phone" placeholder="telephone" />
                <textarea name="enquiry" placeholder="enquiry" ></textarea>
                <button>submit</button>
                <?php echo form_close();?>
            </div>
        </div>

        <div id="gmap"></div>
        
        <?php $this->load->view('includes/footer', $this->data); ?>

    </div>

    <?php $this->load->view('includes/scripts', $this->data); ?>

    <script>
        function initMap() {

            // Specify features and elements to define styles.
            var styleArray = [
                {
                    featureType: "all",
                    stylers: [
                        { saturation: -80 }
                    ]
                },
                {
                    featureType: "road.arterial",
                    elementType: 'geometry',
                    stylers: [
                        { hue: "#0a3e65" },
                        { saturation: 50 }
                    ]
                },
                {
                    featureType: "road.highway",
                    elementType: 'geometry',
                    stylers: [
                        { hue: "#0E5A94" },
                        { saturation: 10 }
                    ]
                },
                {
                    featureType: "water",
                    stylers: [
                        { hue: "#949CA1" },
                        { saturation: 50 }
                    ]
                }
            ];

            var myLatLng = {lat: 51.5692418, lng: 0.2173086};

            // Create a map object and specify the DOM element for display.
            var map = new google.maps.Map(document.getElementById('gmap'), {
                center: myLatLng,
                scrollwheel: false,
                // Apply the map style array to the map.
                styles: styleArray,
                zoom: 10,
                disableDefaultUI: true,
                zoomControl: true
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'RSF Bathroom Designs'
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs-0yThrbAompGPyxsE57NlhgI9tZ7YhI&callback=initMap"></script> -->
</body>
</html>