    <section class="section" id="contact">
      <div class="container">
        <div class="row row-grid align-items-center">
          <div class="col-lg-6">
            <h3>Contact us</h3>
            <p class="lead">Simply fill out your name, email and phone number and we will be in touch shortly.</p>
            <form action="<?php print WEB_ROOT;?>consultations/create" method="post" id="new_consultation" class="mt-5">
              <div class="form-group">
                <label class="sr-only">Your name</label>
                <input class="form-control form-control-lg" placeholder="Your name" type="text" name="name">
              </div>
              <div class="form-group">
                <label class="sr-only">Email address</label>
                <input class="form-control form-control-lg" placeholder="Email address" type="text" name="email">
              </div>
              <div class="form-group">
                <label class="sr-only">You phone number</label>
                <input class="form-control form-control-lg" placeholder="Phone number" type="text" name="phone">
              </div>
              <button type="submit" name="submit" class="btn btn-dark cta-btn rounded-pill mt-4">Send info</button>
            </form>
          </div>
          <div class="col-lg-5 ml-lg-auto">
            <h3>7080 Hollywood Blvd #814<br>Los Angeles, CA 90028 </h3>
            <p class="lead my-4">E: info@lahearing.com <br>T: (323) 463-7109 </p>
            <p>Jeff Grama, M.A., completed his undergraduate training at UCLA in 1972 and received his Master of Arts degree in Audiology from San Diego State University in 1975. He previously worked for a world-renowned speech and hearing center and a major hearing aid manufacturer. In 1983, Mr. Grama purchased Hearing Aid Services of Hollywood. He has over 35 years of experience in the fields of audiology and hearing aid dispensing.</p>
          </div>
        </div>
      </div>
    </section>
    
<!-- Footer -->
    <footer class="section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- <ul class="list-inline text-center">
                        <li>
                            <a target="_blank" href="http://twitter.com/share?text=<?php print $page_title;?>&url=<?php print 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php print 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php print 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>&title=<?php print $page_title;?>
&summary=<?php print $site->description;?>&source=<?php print 'http://'.$_SERVER['HTTP_HOST'];?>">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul> -->
                    <p class="copyright text-muted">
                        Copyright &copy; <a href="https://<?php print $_SERVER['HTTP_HOST'];?>"><?php print $site->name;?></a> <?php print date("Y")?><br> 
                        <?php if(admin_logged_in()):?>
                            <?php print link_to('Admin', 'admin');?>
                            <form action="<?php print WEB_ROOT;?>sessions/destroy" method="post" class="logout-form">
                                <input type="hidden" name="_method" value="destroy">
                                <input type="submit" name="logout" value="Log Out">
                            </form>
                        <?php else: ?>
                            <?php print link_to('Login', 'login');?>
                        <?php endif;?>
                    </p>
                    <div class="powered-by" style="text-align: center; margin-top: 30px;">
                        <a href="https://www.wevelo.com" target="_blank"><img src="<?php print WEB_ROOT; ?>app/assets/images/wevelo_byline_white.png" title="Wevelo Web & Graphic Design " alt="Site powered by Wevelo Digital Design Studio, Fort Collins CO"></a>
                    </div>
                    <small class="attribution">
                        <small>Thanks to <a href="https://www.freepik.com/free-photos-vectors/Infographic">Freepik</a> for help with background illustrations</small>
                    </small>
                </div>
            </div>
        </div>
    </footer>
    <!-- Contact Modal -->
    <div class="modal modal-dark fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Get In Touch</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <div class="card text-center">
                    <div class="icon px-4 py-3"><i class="fas fa-phone"></i></div>
                    <div class="text px-4 py-5">
                        <h5>Get in touch</h5>
                        <p>Please call <strong>‭(970) 430-6029‬</strong> to schedule a consultation today and we will find the solutions to your technology needs.</p>
                    </div>
                </div>
        </div>
        </div>
    </div>
    </div>

</body>

</html>