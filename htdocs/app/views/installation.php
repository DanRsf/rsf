<?php $this->load->view('includes/meta', $this->data); ?>

<body>

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div id="ins-intro" class="page-header">
            <div class="lg-container">
                <div class="copy">
                    <h1>High quality<br />installations from<br /><strong>a team you can trust</strong></h1>
                </div>
            </div>
                <a href="#form-container" class="section-link">find out more</a>
        </div>

        <div class="container" id="ins-copy">
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
            <div class="right-column">
                <img src="<?php echo IMG;?>/general/team.jpg" alt="RSF Installation team">
            </div>
        </div>

        <?php $this->load->view('includes/footer', $this->data); ?>

    </div>

    <?php $this->load->view('includes/scripts', $this->data); ?>

</body>
</html>