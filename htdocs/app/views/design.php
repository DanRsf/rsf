<?php $this->load->view('includes/meta', $this->data); ?>

<body>

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div id="hp-intro">
            <div class="copy">
                <h1>Beautiful Bathrooms<span>Affordable Prices</span></h1>
                <p>Luxury brands at competitive prices, with outstanding service from start to finish.</p>
                <a href="#hp-info-panels" class="section-link">find out more</a>
            </div>
        </div>

        <div id="hp-info-panels" class="scroll-block">
            <ul>
                <li>
                    <div class="image">
                        <img src="<?php echo IMG; ?>/general/icon-tap.jpg" />
                    </div>
                    <div class="content">
                        <h2>Beautiful Products</h2>
                        <p>Our product range consists of the most beautiful bathroom furniture from the worlds leading brands, offering the quality we know you've come to expect.</p>
                        <a href="/products" class="cta">find out more</a>
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img src="<?php echo IMG; ?>/general/icon-curve.jpg" />
                    </div>
                    <div class="content">
                        <h2>Stunning Designs</h2>
                        <p>We offer a complete bespoke bathroom design service using the extensive knowledge of our creative team and industry leading design software.</p>
                        <a href="/design" class="cta">find out more</a>
                    </div>
                </li>
                <li>
                    <div class="image">
                        <img src="<?php echo IMG; ?>/general/icon-spanner.jpg" />
                    </div>
                    <div class="content">
                        <h2>Quality Installations</h2>
                        <p>Not only can we design and supply your perfect bathroom, we can also carry out the installation to an incredibly high standard to match.</p>
                        <a href="/installation" class="cta">find out more</a>
                    </div>
                </li>
            </ul>
            <a href="#hp-big-tap" class="section-link">stunning designs</a>
        </div>

        <div class="scroll-block">
            <div id="hp-big-tap">
                <div class="copy">
                    <h2>Stunning<span>Product Design</span></h2>
                    <p>We believe your bathroom should be a place of tranquility and relaxation, which is why we only stock the most beautifully designed products from the worlds leading manufacturers.  The style and eloquent design these products bring to your home make your bathroom an inspirational environment to enjoy. </p>
                    <a href="/products" class="button" />View our products</a>
                </div>
                <a href="#hp-video" class="section-link">visit our showroom</a>
            </div>
        </div>

        <div id="hp-video">
            <h3>Take a look round our showroom</h3>
            <p>Our bathroom showroom, covering over 300ft2, is unique in that it is one of the only showrooms in the area with fully working bathroom suites, allowing you to see the latest high end gadgets and the beautiful product designs for yourself.  Everyone who visits our showroom comes away inspired and excited.  Take our virtual tour and get some inspiration for your own bathroom.</p>
            <div class="video-thumb video-wrapper">
                <div id="player"></div>
            </div>
            <a href="#hp-gallery" class="section-link">view our gallery</a>
        </div>
        <div class="scroll-block">
            <div id="hp-montage">
                <div class="sink left"></div>
                <div class="chrome-tap right small"></div>
                <div class="chrome-shower right small"></div>
                <div class="drencher right big"></div>
            </div>
        </div>

        <div id="hp-gallery">
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
        </div>

        <?php $this->load->view('includes/footer', $this->data); ?>

    </div>

    <?php $this->load->view('includes/sub-footer', $this->data); ?>

</body>
</html>


<iframe src="https://player.vimeo.com/video/37726551?title=0&byline=0&portrait=0" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>