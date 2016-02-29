<header>
    <div class="container">
        <img src="<?php echo IMG; ?>/general/logo.jpg" class="header-logo"/>
        <!-- <div class="contact-details">
            <p><span>call now</span> 01708 444355</p>
        </div> -->
        <?php $this->load->view('includes/nav', $this->data); ?>
    </div>
    <?php $this->load->view('includes/nav-mobile', $this->data); ?>
</header>
