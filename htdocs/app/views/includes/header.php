<header>
    <div class="container">
        <a href="/"><img src="<?php echo IMG; ?>/general/logo.jpg" class="header-logo"/></a>
        <div class="tel-num">01708 444355</div>
        <div class="opening-times">Open <span>Mon-Fri: 9-5</span> <span>Sat: 9-4</span></div>
        <?php $this->load->view('includes/nav', $this->data); ?>
    </div>
    <?php $this->load->view('includes/nav-mobile', $this->data); ?>
</header>
