<?php $this->load->view('includes/meta', $this->data); ?>

<body class="contact">

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div class="page-header">
            <div class="container">
                <div class="copy">
                    <h1>See how <strong>we can help</strong>with your project</h1>
                </div>
            </div>
        </div>

        <div class="container section">
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
                <?php
                if($success)
                {
                    ?>
                    <p>Thank you for your enquiry.</p>
                    <p>Your details have been sent to our customer servers team who will contact you shortly to discuss your requirements further.</p>
                    <p>If you enquiry is urgent, feel free to give us a call.</p>
                    <?php
                }
                else
                {
                    ?>
                    <?php echo form_open('contact');?>
                    <input type="text" name="name" placeholder="name *" value="<?php echo set_value('name') ? set_value('name') : '';?>" class="<?php echo form_error('name') ? 'error' : ''?>" />
                    <input type="text" name="email" placeholder="email *" value="<?php echo set_value('email') ? set_value('email') : '';?>" class="<?php echo form_error('email') ? 'error' : ''?>" />
                    <input type="text" name="phone" placeholder="telephone" value="<?php echo set_value('phone') ? set_value('phone') : '';?>" class="<?php echo form_error('telephone') ? 'error' : ''?>" />
                    <textarea name="enquiry" placeholder="enquiry *"  class="<?php echo form_error('enquiry') ? 'error' : ''?>" ><?php echo set_value('enquiry') ? set_value('enquiry') : '';?></textarea>
                    <button>submit</button>

                    <?php echo form_close();?>
                    <?php
                }
                ?>

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
