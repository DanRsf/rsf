<header>
    <div class="container">
        <a href="/"><img src="<?php echo IMG; ?>/general/logo.jpg" class="header-logo"/></a>
        <div class="tel-num">01702 444355</div>
        <?php $this->load->view('includes/nav', $this->data); ?>
    </div>
    <?php $this->load->view('includes/nav-mobile', $this->data); ?>
</header>
