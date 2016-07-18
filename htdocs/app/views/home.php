<?php $this->load->view('includes/meta', $this->data); ?>

<body class="home">

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div class="page-header">
            <div class="background one active" /></div>
            <div class="background two dark" /></div>
            <div class="background three" /></div>
            <div class="background four" /></div>
            <div class="background five" /></div>
            <div class="copy">
                <h1>Beautiful Bathrooms<span>Affordable Prices</span></h1>
                <p>Luxury brands at competitive prices, with outstanding service from start to finish.<small>Supply Only – Design &amp; Supply – Full Design &amp; Install</small></p>
            </div>
            <a href="#hp-info-panels" class="section-link">find out more</a>
        </div>

        <div id="hp-cta-panels">
            <div class="container">
                <ul data-height-determined-by="|p,|h4">
                    <li>
                        <a href="/contact">
                            <span class="icon-survey"></span>
                            <h4>Book a Survey</h4>
                            <p>We can provide a full survey and no obligation quote.  Contact us to arrange an appointment.</p>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.rsfbathrooms.co.uk" target="_blank">
                            <span class="icon-shopping-cart"></span>
                            <h4>Shop Online</h4>
                            <p>We have thousands of products available to buy online.  Visit our online store for further details.</p>
                        </a>
                    </li>
                    <li>
                        <a class="youtube" href="https://www.youtube.com/watch?v=k_ID2tUR5fI">
                        <span class="icon-play"></span>
                            <h4>Showroom Tour</h4>
                            <p>Our large, fully operational showroom demonstrates the latest in high end gadgets and product design.</p>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.reviews.co.uk/company-reviews/store/rsf-bathrooms" target="_blank">
                            <span class="icon-reviews"></span>
                            <h4>Customer Reviews</h4>
                            <p>We pride ourselve in excellent customer service, but don't take our word for it, see what our customers are saying.</p>
                        </a>
                    </li>
                </ul>
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

        <div class="container section">
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

                timer = setInterval(function(){
                    var $backgroundElements = $('.page-header .background');
                    var position = $backgroundElements.index($('.background.active'));
                    position = position + 1 == $backgroundElements.length ? 0 : position + 1;
                    $backgroundElements.removeClass('active');
                    var $next = $backgroundElements.eq(position);
                    $next.addClass('active');
                    if($next.hasClass('dark')) {
                        $next.siblings('.copy').addClass('dark');
                    }
                    else {
                        $next.siblings('.copy').removeClass('dark');
                    }
                }, 5000)
            }
        });
    </script>

</body>
</html>
