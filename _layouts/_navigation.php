<div class="nav-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-left my-auto">
                <p>7080 Hollywood Blvd #814
                <br>
                Los Angeles, CA 90028</p>
            </div>
            <div class="col-sm-4 text-center my-auto">
                <p><a class="navbar-brand scroll-to" href="<?php print WEB_ROOT; ?>" data-scroll-to="#header">Hearing Aid Services of Hollywood</a></p>
            </div>
            <div class="col-sm-4 text-right my-auto">
                <p>(323) 463-7109</p>
            </div>
        </div>    
    </div>
</div>
<div class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="<?php print WEB_ROOT; ?>#services" data-scroll-to="#services" class="scroll-to nav-link" title="Hearing and Audiology Services">Services</a>
                </li>
                <li class="nav-item">
                    <a href="<?php print WEB_ROOT; ?>#about" data-scroll-to="#about" class="scroll-to nav-link" title="About Hearing Aid Services of Hollywood">About Us</a>
                </li>
                <?php if($site->reviews_enabled == 'on'): ?>
                    <li class="nav-item">
                        <a href="<?php print WEB_ROOT; ?>#reviews" data-scroll-to="#reviews" class="scroll-to nav-link">Testimonials</a>
                    </li>
                <?php endif; ?>
                <?php if($site->photos_enabled == 'on'): ?>
                    <li class="nav-item">
                        <a href="#photos" data-scroll-to="#photos" class="scroll-to nav-link">Photos</a>
                    </li>
                <?php endif; ?>
                <!-- <li class="nav-item">
                    <a href="<?php print WEB_ROOT; ?>#find_us" data-scroll-to="#find_us" class="scroll-to nav-link">Find Us</a>
                </li> -->
                <?php if($site->blog_enabled == 'on'): ?>
                        <li class="nav-item"><?php print link_to(ucfirst($site->blog_title),'blog','',"class='nav-link'") ?></li>
                <?php endif; ?>
                <li class="nav-item">
                    <a href="<?php print WEB_ROOT; ?>#contact" class="scroll-to nav-link nav-cta btn rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" data-scroll-to="#contact">
                    <span class="cta-icon"><i class="far fa-phone"></i></span>
                    <span class="cta-text">Appointments</span>
                    </a>
                </li>
                <?php if(admin_logged_in()): ?>
                    <li class="nav-item"><?php print link_to('Admin', 'admin','',"class='nav-link'"); ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    </nav>
</div>
<?php if(isset($front) && $front==true): ?><?php require_once(render('layouts/_header')); ?><?php endif; ?>