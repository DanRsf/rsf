<?php $this->load->view('includes/meta', $this->data); ?>

<body>

    <?php $this->load->view('includes/header', $this->data); ?>

    <div id="main-container">

        <div id="ct-intro" class=:page-header>
            <div class="copy">
                <h1>See how <strong>we can help</strong> with your project</h1>
            </div>
            <a href="#form-container" class="section-link">find out how to contact us</a>
        </div>

        <div id="form-container">
            <div class="left-column">
                <p>Getting the bathroom of your dreams couldn’t be easier than with RSF Bathroom Designs.</p>
                <p>Whether you are seeking inspiration or remodelling your bathroom, our experts will answer your questions, help you select the right product from our extensive range, and provide a full bespoke design and consultation service.</p>
                <p>You can view our products in person and truly get a sense of what will work in your own home by visiting our fully operational showroom – one of the South East’s largest.   See below for our contact details and location.</p>
                <p>Get in touch with us using our contact form, and one of our highly experienced team will be happy to answer your questions or discuss your project.</p>
                <div class="contact-details">
                    <p>call us now <strong>01708 444355</strong></p>
                    <a href="mailto:info@rsfbathroomdesigns.com">info@rsfbathroomdesigns.com</a>
                </div>
            </div>
            <div id="form">
                <h2>Drop us an email</h2>
                <?php echo form_open();?>
                    <input type="text" name="name" placeholder="Name" />
                    <input type="text" name="email" placeholder="Email" />
                    <input type="text" name="phone" placeholder="Telephone" />
                    <textarea name="enquiry" placeholder="Enquiry" ></textarea>
                    <button>submit</button>
                <?php echo form_close();?>
            </div>
        </div>
        
        <?php $this->load->view('includes/footer', $this->data); ?>

    </div>

    <?php $this->load->view('includes/scripts', $this->data); ?>

</body>
</html>