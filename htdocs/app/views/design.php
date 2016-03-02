<?php $this->load->view('includes/meta', $this->data); ?>

<body>

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div id="dn-intro" class="page-header">
            <div class="copy">
                <h1>designing in virtual reality<span>the ultimate consumer experience</span></h1>
                <a href="#hp-info-panels" class="section-link">find out more</a>
            </div>
        </div>

        <div id="dn-info" class="container">
            <div class="left-column">
                <p>Using the latest 3D modelling software, our highly experienced design team can visualise your dream bathroom completely free of charge.  Experiment with different design styles and try alternate colour schemes without lifting a finger.</p>
            </div>
            <div class="right-column">
                <img src="<?php echo IMG;?>/general/virtual-worlds-logo.jpg" alt="virtual worlds logo">
            </div>
        </div>

        <div id="gallery-container" class="container">
            <h2>Designing your ideal bathroom couldn’t be easier</h2>
            <p>Below are examples to illustrate the high quality visualisations our team can produce for you.</p>
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

        <div id="dn-rendering-light" class="container">
            <div class="left-column">
                <img src="<?php echo IMG;?>/general/3d-rendering-light.jpg" alt="virtual worlds logo">
            </div>
            <div class="right-column">
                <p>The Virtual Worlds Professional rendering engine produces stunning, high-quality images and remains the industry leader. Superior photographic scenes can be created where reflection and shadows bring the concept to life.</p>
            </div>
        </div>

        <div  id="dn-rendering-dark" class="container">
            <div class="left-column">
                <p>Every one of the high quality products we hold in stock are available as 3D models within Virtual Worlds, so experimenting with different design ideas couldn’t be easier.</p>
            </div>
            <div class="right-column">
                <img src="<?php echo IMG;?>/general/3d-rendering-dark.jpg" alt="virtual worlds logo">
            </div>
        </div>

        <?php $this->load->view('includes/footer', $this->data); ?>

    </div>

    <?php $this->load->view('includes/scripts', $this->data); ?>

<!-- <iframe src="https://player.vimeo.com/video/37726551?title=0&byline=0&portrait=0" width="500" height="375" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->

</body>
</html>