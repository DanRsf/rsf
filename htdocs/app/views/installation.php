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
            <h3>Let our work speak for itself...</h3>
            <ul class="popup-gallery">
                <li>
                    <a href="/resources/img/install/large/1.jpg">
                        <img src="/resources/img/install/thumbs/1.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="/resources/img/install/large/2.jpg">
                        <img src="/resources/img/install/thumbs/2.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="/resources/img/install/large/3.jpg">
                        <img src="/resources/img/install/thumbs/3.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="/resources/img/install/large/4.jpg">
                        <img src="/resources/img/install/thumbs/4.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="/resources/img/install/large/5.jpg">
                        <img src="/resources/img/install/thumbs/5.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="/resources/img/install/large/6.jpg">
                        <img src="/resources/img/install/thumbs/6.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="/resources/img/install/large/7.jpg">
                        <img src="/resources/img/install/thumbs/7.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="/resources/img/install/large/8.jpg">
                        <img src="/resources/img/install/thumbs/8.jpg" alt="">
                    </a>
                </li>
            </ul>
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

    <script>
        $(document).ready(function() {
            $('.popup-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1] // Will preload 0 - before current, and 1 after the current image
                },
                image: {
                    tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                    titleSrc: function(item) {
                        return item.el.attr('title');
                    }
                }
            });
        });
    </script>

</body>
</html>
