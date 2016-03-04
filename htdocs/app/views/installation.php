<?php $this->load->view('includes/meta', $this->data); ?>

<body>

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div id="ins-intro" class="page-header">
            <div class="copy">
                <h1>High quality<br />installations from<br /><strong>a team you can trust</strong></h1>
            </div>
            <a href="#form-container" class="section-link">find out more</a>
        </div>

        <div class="container">
            <div class="left-column">
                <p>Our RSF Bathroom Designs Sales Advisors can provide you with a list of recommended bathroom installers or our direct installers (please note our direct installers get booked weeks in advance) should you require it. Whichever option you choose you will be assured your bathroom installation is in qualified hands.</p>
                <p>We regularly monitor the performance of all our bathroom installers and verify they are all familiar with the quality name brands we install.</p>
                <p>All our work comes with our installation guarantees and manufactured guarantees.</p>
                <p>Finding the right installer is as important as finding the right bathroom. You'll need someone who you feel you are absolutely confident with. Please feel free to peruse our extensive portfolio of references and site/home visits. We'll happily provide them over email, or on your showroom visit!</p>
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