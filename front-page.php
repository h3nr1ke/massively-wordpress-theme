<?php
/**
  * Massively Wordpress Theme
  *
  * This is a wordpress theme based on the project 
  * @see https://html5up.net/
  *
  * in specific the theme
  * @see https://html5up.net/massively
  *
  * The template for displaying all single posts
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
  *
  * @package WordPress
  * @subpackage Appsetc_Massively_Theme
  * @since 0.1
  * @version 0.1
  * 
  */
  
  get_header(); ?>

            <!-- Featured Post -->
              <article class="post featured">
                <header class="major">
                  <span class="date">April 25, 2017</span>
                  <h2><a href="#">And this is a<br />
                  massive headline</a></h2>
                  <p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
                  facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
                  amet nullam sed etiam veroeros.</p>
                </header>
                <a href="#" class="image main"><img src="images/pic01.jpg" alt="" /></a>
                <ul class="actions">
                  <li><a href="#" class="button big">Full Story</a></li>
                </ul>
              </article>

            <!-- Posts -->
              <section class="posts">
                <article>
                  <header>
                    <span class="date">April 24, 2017</span>
                    <h2><a href="#">Sed magna<br />
                    ipsum faucibus</a></h2>
                  </header>
                  <a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
                  <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                  <ul class="actions">
                    <li><a href="#" class="button">Full Story</a></li>
                  </ul>
                </article>
                <article>
                  <header>
                    <span class="date">April 22, 2017</span>
                    <h2><a href="#">Primis eget<br />
                    imperdiet lorem</a></h2>
                  </header>
                  <a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
                  <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                  <ul class="actions">
                    <li><a href="#" class="button">Full Story</a></li>
                  </ul>
                </article>
                <article>
                  <header>
                    <span class="date">April 18, 2017</span>
                    <h2><a href="#">Ante mattis<br />
                    interdum dolor</a></h2>
                  </header>
                  <a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
                  <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                  <ul class="actions">
                    <li><a href="#" class="button">Full Story</a></li>
                  </ul>
                </article>
                <article>
                  <header>
                    <span class="date">April 14, 2017</span>
                    <h2><a href="#">Tempus sed<br />
                    nulla imperdiet</a></h2>
                  </header>
                  <a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
                  <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                  <ul class="actions">
                    <li><a href="#" class="button">Full Story</a></li>
                  </ul>
                </article>
                <article>
                  <header>
                    <span class="date">April 11, 2017</span>
                    <h2><a href="#">Odio magna<br />
                    sed consectetur</a></h2>
                  </header>
                  <a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
                  <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                  <ul class="actions">
                    <li><a href="#" class="button">Full Story</a></li>
                  </ul>
                </article>
                <article>
                  <header>
                    <span class="date">April 7, 2017</span>
                    <h2><a href="#">Augue lorem<br />
                    primis vestibulum</a></h2>
                  </header>
                  <a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
                  <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                  <ul class="actions">
                    <li><a href="#" class="button">Full Story</a></li>
                  </ul>
                </article>
              </section>

            <!-- Footer -->
              <footer>
                <div class="pagination">
                  <!--<a href="#" class="previous">Prev</a>-->
                  <a href="#" class="page active">1</a>
                  <a href="#" class="page">2</a>
                  <a href="#" class="page">3</a>
                  <span class="extra">&hellip;</span>
                  <a href="#" class="page">8</a>
                  <a href="#" class="page">9</a>
                  <a href="#" class="page">10</a>
                  <a href="#" class="next">Next</a>
                </div>
              </footer>

<?php
get_footer();

//https://developer.wordpress.org/themes/basics/template-files/

/*
The front page template is always used as the site front page if it exists, regardless of what settings on Admin > Settings > Reading.
 */

