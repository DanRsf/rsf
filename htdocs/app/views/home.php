<?php $this->load->view('includes/meta', $this->data); ?>

<body>

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div id="hp-intro" class="page-header">
            <div class="copy">
                <h1>Beautiful Bathrooms<span>Affordable Prices</span></h1>
                <p>Luxury brands at competitive prices, with outstanding service from start to finish.</p>
            </div>
            <a href="#hp-info-panels" class="section-link">find out more</a>
        </div>

        <div class="container">
            <div id="hp-info-panels" class="scroll-block">
                <ul>
                    <li>
                        <div class="icon">T</div>
                        <div class="content">
                            <h2>Beautiful Products</h2>
                            <p>Our beautiful range of bathroom furniture from the world’s leading brands provides the quality you’ve come to expect.</p>
                            <a href="/products" class="cta">find out more</a>
                        </div>
                    </li>
                    <li>
                        <div class="icon">z</div>
                        <div class="content">
                            <h2>Stunning Designs</h2>
                            <p>Our full bespoke design service draws on the extensive knowledge of our creative team and industry leading design software.</p>
                            <a href="/design" class="cta">find out more</a>
                        </div>
                    </li>
                    <li>
                        <div class="icon">O</div>
                        <div class="content">
                            <h2>Quality Installations</h2>
                            <p>Our high quality installation service is the ideal way to make your dream bathroom design a reality.</p>
                            <a href="/installation" class="cta">find out more</a>
                        </div>
                    </li>
                </ul>
                <a href="#hp-big-tap" class="section-link">stunning designs</a>
            </div>
        </div>

        <div id="hp-montage">
            <div class="scroll-block">
                <div class="sink left"></div>
                <div class="chrome-tap right small"></div>
                <div class="chrome-shower right small"></div>
                <div class="drencher right big"></div>
            </div>
        </div>

        <div class="container">
            <div id="hp-video">
                <h3>Take a look round our showroom</h3>
                <p>Our large, fully operational showroom demonstrates the latest in high end gadgets and product design.  Visit us in person, or take a sneak peak with our virtual tour.</p>
                <div class="video-thumb video-wrapper">
                    <div id="player"></div>
                </div>
                <a href="#hp-product-design" class="section-link">stunning designs</a>
            </div>
        </div>

        <div id="hp-product-design">
            <div class="lg-container">
                <div class="copy">
                    <h2>Stunning<span>Product Design</span></h2>
                    <p>Our beautiful products from the world’s leading manufacturers deliver eloquent, stylish and tranquil bathrooms, designed with relaxation in mind.</p>
                    <a href="/products" class="cta" />View our products</a>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="hp-testimonials">
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
        $(document).ready(function(){

            if(!mobile_device()) {
                $('#hp-product-design').parallax("50%", -0.4);

                var scrollorama = $.scrollorama({
                    blocks: '.scroll-block',
                    enablePin: false
                });

                scrollorama
                .animate('#hp-montage div', {
                    delay: positions.montage[bp].delay,
                    start: positions.montage[bp].start,
                    end: positions.montage[bp].end,
                    duration: positions.montage[bp].duration,
                    property: 'background-size',
                    easing: 'easeInOutQuad'
                });
            }
            /*var scrollorama = $.scrollorama({
                blocks: '.scroll-block',
                enablePin: false
            });

            if(!mobile_device()) {

                var windowWidth = $(window).width();

                $('.page-header').parallax("50%", -0.5, true, (windowWidth > breakpoints.xlarge ? Math.abs(windowWidth / 2) * -1 : 0));
                $('#hp-product-design').parallax("50%", -0.2, true);
                
                scrollorama
                .animate('#hp-montage div', {
                    delay: positions.montage[bp].delay,
                    start: positions.montage[bp].start,
                    end: positions.montage[bp].end,
                    duration: positions.montage[bp].duration,
                    property: 'background-size',
                    easing: 'easeInOutQuad'
                });

                scrollorama
                .animate('#hp-info-panels li:first-of-type', {duration: 100, delay: intro_block_delay(), property: 'opacity', start: 0, end: 1})
                .animate('#hp-info-panels li:first-of-type', {duration: 400, delay: intro_block_delay(), property: 'left', start: '-10%', end: 0, easing: 'easeInOutCubic'})
                .animate('#hp-info-panels li:last-of-type', {duration: 100, delay: intro_block_delay(), property: 'opacity', start: 0, end: 1})
                .animate('#hp-info-panels li:last-of-type', {duration: 400, delay: intro_block_delay(), property: 'right', start: '-10%', end: 0, easing: 'easeInOutCubic'});
            }*/

        });
    </script>

</body>
</html>