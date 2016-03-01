<?php $this->load->view('includes/meta', $this->data); ?>

<body>

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div id="hp-intro">
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
                            <p>Our product range consists of the most beautiful bathroom furniture from the worlds leading brands, offering the quality we know you've come to expect.</p>
                            <a href="/products" class="cta">find out more</a>
                        </div>
                    </li>
                    <li>
                        <div class="icon">z</div>
                        <div class="content">
                            <h2>Stunning Designs</h2>
                            <p>We offer a complete bespoke bathroom design service using the extensive knowledge of our creative team and industry leading design software.</p>
                            <a href="/design" class="cta">find out more</a>
                        </div>
                    </li>
                    <li>
                        <div class="icon">O</div>
                        <div class="content">
                            <h2>Quality Installations</h2>
                            <p>Not only can we design and supply your perfect bathroom, we can also carry out the installation to an incredibly high standard to match.</p>
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
                <p>Our bathroom showroom, covering over 300ft2, is unique in that it is one of the only showrooms in the area with fully working bathroom suites, allowing you to see the latest high end gadgets and the beautiful product designs for yourself.  Everyone who visits our showroom comes away inspired and excited.  Take our virtual tour and get some inspiration for your own bathroom.</p>
                <div class="video-thumb video-wrapper">
                    <div id="player"></div>
                </div>
                <a href="#hp-product-design" class="section-link">stunning designs</a>
            </div>
        </div>

        <div id="hp-product-design">
            <div class="copy">
                <h2>Stunning<span>Product Design</span></h2>
                <p>We believe your bathroom should be a place of tranquility and relaxation, which is why we only stock the most beautifully designed products from the worlds leading manufacturers.  The style and eloquent design these products bring to your home make your bathroom an inspirational environment to enjoy. </p>
                <a href="/products" class="cta" />View our products</a>
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
        <!-- <div id="hp-gallery">
            <div class="content">
                <img src="<?php echo IMG; ?>/general/virtual-worlds-logo.jpg" />
                <p>Using the latest 3D modeling software, our highly experienced design team can visualise your dream bathroom completely free of charge.  Experiment with different design styles and try alternate colour schemes without lifting a finger.</p>
                <p>Every one of the high quality products we hold in stock are available as 3D models within Virtual Worlds, so experimenting with different design ideas couldn't be easier.</p>
            </div>
            <img src="<?php echo IMG; ?>/gallery/images/1.jpg" id="gallery-viewer"/>
            <ul id="gallery-thumbs">
                <li><img src="<?php echo IMG; ?>/gallery/thumbs/2.jpg" data-image="2.jpg" /></li>
                <li><img src="<?php echo IMG; ?>/gallery/thumbs/3.jpg" data-image="3.jpg" /></li>
                <li><img src="<?php echo IMG; ?>/gallery/thumbs/4.jpg" data-image="4.jpg" /></li>
                <li><img src="<?php echo IMG; ?>/gallery/thumbs/5.jpg" data-image="5.jpg" /></li>
                <li><img src="<?php echo IMG; ?>/gallery/thumbs/6.jpg" data-image="6.jpg" /></li>
                <li><img src="<?php echo IMG; ?>/gallery/thumbs/7.jpg" data-image="7.jpg" /></li>
                <li><img src="<?php echo IMG; ?>/gallery/thumbs/1.jpg" data-image="1.jpg" /></li>
            </ul>
        </div> -->

        <?php $this->load->view('includes/footer', $this->data); ?>

    </div>

    <?php $this->load->view('includes/scripts', $this->data); ?>

</body>
</html>