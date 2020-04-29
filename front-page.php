<?php get_header(); ?>

</header>
  <main>
    <section>
      <div id="pages">
        <div class="pages-text">
          <span>OUR GOALS</span>
        </div>
        <ul>
          <li class="pages-inline">
              <div class="page-item">
                    <div class="page-icon" id="icon1">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/page-icon-02.png" alt="Research icon." />
                    </div>
                    <span>RESEARCH</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
          </li>

          <li class="pages-inline">

                <div class="page-item">
                    <div class="page-icon" id="icon2">
                      <img src="<?php echo get_template_directory_uri(); ?>/img/page-icon-03.png" alt="fully customizable icon." />
                    </div>
                    <span>FULLY CUSTOMIZABLE</span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
          </li>

          <li class="pages-inline">
              <div class="page-item">
                <div class="page-icon" id="icon3">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/page-icon-04.png" alt="work and work icon." />
                </div>
                <span>WORK AND WORK</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
          </li>

        </ul>

      </div>
    </section>

    <section>
      <div id="features">
        <div id="container">

            <div class="featured-text">
              <span><a href="features.html">FEATURED WORKS</a></span>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
            </div>
            <div class="galery-align">
                <div class="sizezero">
                    <a href="features-post.html"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/a1145580599725.5ce5ac218a422.jpg"></a>
                </div>
                <div class="sizezero">
                  <a href="#"> <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/f3e39a48469833.58992c0b7f75a.png"></a>
                </div>
                <div class="sizezero">
                    <a href="#"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/77887c72855981.5bf5a49100715.jpg"></a>
                </div>
                <div class="sizezero">
                    <a href="#"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/05d64e84803165.5d68348e3e82c.png"></a>
                </div>
                <div class="sizezero">
                    <a href="#"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/469d6590296519.5e13e7f1cc328.jpg"></a>
                </div>
                <div class="sizezero">
                    <a href="#"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/b5f71348474853.58993cf246ee2.jpg"></a>
                </div>
                <div class="sizezero">
                    <a href="#"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/58a1fa49048915.58a9d59996c97.jpg"></a>
                </div>
                <div class="sizezero">
                    <a href="#"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/5b194b49048577.58a9d34287918.jpg"></a>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section>
        <div id="services">
          <div class="services-text">
            <span><a href="services.html">Our services</a></span>
          </div>
          <div class="flex-box">
            <div class="services-items">
                <div class="circle-image"><i class="fas fa-image"></i></div>
                <span class="stext">Branding</span>
            </div>
            <div class="services-items">
                <div class="circle-image"><i class="fas fa-play"></i></div>
                <span class="stext">Motion Graphics</span>
            </div>
            <div class="services-items">
                <div class="circle-image"><i class="fas fa-laptop"></i></div>
                <span class="stext">Web Design</span>
            </div>
            <div class="services-items">
                <div class="circle-image"><i class="fas fa-paint-brush"></i></div>
                <span class="stext">Illustration</span>
            </div>
          </div>
        </div>
  </section>

  <section id="contact">
    <div class="contact-form">
      <div class="comment-text">
        <h2>Leave us comment!</h2>
      </div>
      <div id="myform">
        <form action="submit">
          <label for="name">Name:</label><br>
          <input type="text" placeholder="Ex: John" name="name" value="" required></br>
          <label for="emnail">Email</label><br>
          <input type="email" placeholder="Ex: xxxxx@mail.com" value="@" name="email" required><br>
          <label for="textarea">Your message here:</label><br>
          <textarea type="text" placeholder="Write your message." minlength="20" maxlength="340" name="textarea"></textarea><br>
          <button type="submit" id="submit-btn" name="submit" value="submit">SUBMIT</button>
        </form>
      </div>
    </div>
  </section>



<?php get_footer(); ?>