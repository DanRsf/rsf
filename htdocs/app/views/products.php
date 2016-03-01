<?php $this->load->view('includes/meta', $this->data); ?>

<body>

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div id="pp-intro" class="page-header">
            <div class="copy">
                <h1>Your Bathroom<span>Reimagined</span></h1>
            </div>
            <a href="#pp-products" class="section-link">view our products</a>
        </div>

        <div id="pp-copy-and-brands">
            <div class="container">
                <div class="left-column">
                    <h2>quality to be proud of...</h2>
                    <p>We are committed to offering the very best products from industry leading manufacturers.  Crosswater, Keuco, Kohler, Imperial, Duravit, Utopia, Daryl, Matki, Burgbad and Bauhaus are all included in our extensive range.</p>
                    <p>A selection of our high quality brassware, baths, WC's, designer radiators, tiles, mirror cabinets and bathroom furniture can be seen below.  For the full range, please see our catalogue.</p>
                </div>
                <ul class="brand-logos">
                    <li><img src="<?php echo IMG;?>/brands/aqualisa.jpg" /></li>
                    <li><img src="<?php echo IMG;?>/brands/kohler.jpg" /></li>
                    <li><img src="<?php echo IMG;?>/brands/hansgrohe.jpg" /></li>
                    <li><img src="<?php echo IMG;?>/brands/imperial.jpg" /></li>
                    <li><img src="<?php echo IMG;?>/brands/matki.jpg" /></li>
                    <li><img src="<?php echo IMG;?>/brands/crosswater.jpg" /></li>
                    <li><img src="<?php echo IMG;?>/brands/burgbad.jpg" /></li>
                    <li><img src="<?php echo IMG;?>/brands/utopia.jpg" /></li>
                    <li><img src="<?php echo IMG;?>/brands/zehnder.jpg" /></li>
                    <li><img src="<?php echo IMG;?>/brands/duravit.jpg" /></li>
                    <li><img src="<?php echo IMG;?>/brands/keuco.jpg" /></li>
                    <li><img src="<?php echo IMG;?>/brands/bauhaus.jpg" /></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <div id="products">
                <ul>
                    <li>
                        <img src="<?php echo IMG;?>/products/1.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/aqualisa.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/2.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/kohler.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/3.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/hansgrohe.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/4.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/imperial.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/5.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/matki.png" /></span>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="<?php echo IMG;?>/products/6.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/crosswater.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/7.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/burgbad.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/8.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/utopia.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/9.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/zehnder.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/10.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/duravit.png" /></span>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="<?php echo IMG;?>/products/11.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/crosswater.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/12.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/bauhaus.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/13.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/keuco.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/14.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/duravit.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/15.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/zehnder.png" /></span>
                    </li>
                </ul>
                <ul>
                    <li>
                        <img src="<?php echo IMG;?>/products/16.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/utopia.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/17.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/burgbad.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/18.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/matki.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/19.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/imperial.png" /></span>
                    </li>
                    <li>
                        <img src="<?php echo IMG;?>/products/20.jpg" />
                        <span><img src="<?php echo IMG;?>/brands/hansgrohe.png" /></span>
                    </li>
                </ul>
            </div>
        </div>

        <?php $this->load->view('includes/footer', $this->data); ?>

    </div>

    <?php $this->load->view('includes/scripts', $this->data); ?>

</body>
</html>