<?php $this->load->view('includes/meta', $this->data); ?>

<body class="installation">

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div class="page-header">
            <div class="container">
                <div class="copy">
                    <h1>High quality<br />installations from<br /><strong>a team you can trust</strong></h1>
                </div>
            </div>
        </div>

        <div class="container section">
            <div class="left-column">
                <p>Finding the right installer is as important as finding the right bathroom, and you can be confident of a trouble-free installation with RSF Bathroom Designs.</p>
                <p>Our professionally qualified in-house and recommended bathroom installers are performance-monitored to the highest quality standards, and our installation guarantees ensure your peace of mind.</p>
                <p>Our entire product range is covered by manufacturer guarantees, and we ensure all installers are familiar with the quality brand names we supply.</p>
                <p>Ask to see our portfolio of references and site visits when visiting our showroom, or contact us to receive it by email.</p>
                <div class="contact-details">
                    <p>call us now <strong>01708 444355</strong></p>
                    <a href="mailto:info@rsfbathroomdesigns.com">info@rsfbathroomdesigns.com</a>
                </div>
            </div>
            <div class="right-column" id="install-images">
                <img src="<?php echo IMG;?>/general/installation-1.jpg" alt="RSF Installation team" class="show">
                <img src="<?php echo IMG;?>/general/installation-2.jpg" alt="RSF Installation team">
            </div>
        </div>

        <div class="container">
            <div class="testimonials">
                <h3>See what our clients think of us...</h3>
                <ul data-height-determined-by="p,.customer">
                    <li>
                        <p>Bought Duravit and Hansgrohe, great products at great prices, thanks for a speedy and professional service.</p>
                        <div class="customer">Mr Hunt<span>Hutton Mount, Essex</span></div>
                    </li>
                    <li>
                        <p>Carried out design and complete service, found showroom very impressive and service to match.</p>
                        <div class="customer">Mr &amp; Mrs Allen<span>Hornchurch, Essex</span></div>
                    </li>
                    <li>
                        <p>Would recommend this company to my family and friends, very impressed with workmanship.</p>
                        <div class="customer">Mr &amp; Mrs Holleran<span>Hornchurch, Essex</span></div>
                    </li>
                    <li>
                        <p>Pleasure working with this company, great from start to finish, loved showroom.</p>
                        <div class="customer">Mr &amp; Mrs Pooley<span>South Benfleet, Essex</span></div>
                    </li>
                    <li>
                        <p>Great service from start to finish would recommend RSF Bathrooms.</p>
                        <div class="customer">Mr &amp; Mrs Fish<span>Upminster, Essex</span></div>
                    </li>
                    <li>
                        <p>Thank you for my lovely bathroom, overjoyed with everything.</p>
                        <div class="customer">Mr &amp; Mrs Floyd<span>Chigwell, Essex</span></div>
                    </li>
                </ul>
            </div>
        </div>

        <?php $this->load->view('includes/footer', $this->data); ?>

    </div>

    <?php $this->load->view('includes/scripts', $this->data); ?>

</body>
</html>
