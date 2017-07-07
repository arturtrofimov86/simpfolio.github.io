<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Index</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css">  
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 960;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="lwrap">
                <div class="top-header" data-flex="axis" data-flex-480="col -center">
                    <div class="links-top" data-flex="w" data-flex-480="center w">
                        <a href="#" class="active">Home</a>
                        <a href="#">What we do?</a>
                        <a href="#">Testimonial</a>
                        <a href="#">Contact Us</a>
                    </div>
                    <a href="/" title="Return to the homepage" class="logo">
                        <img src="/images/logo.png" height="19" width="62" alt="">
                    </a>
                    <form action="" method="post" name="form-search" data-flex="axis">
                        <input placeholder="Search..." name="" type="search">
                        <input src="/images/icons/icon-search.png" height="14" width="13" type="image">
                    </form>
                </div>
                <div data-flex="col -center center">
                    <h1>Art is Eternal Happiness</h1>
                    <a href="#" class="btn btn-default btn-work">Work with us</a>
                    <a href="#footer" class="btn btn-scroll"><em>Scroll down</em><i class="icon-down"></i></a>
                </div>
            </div>
        </header>
        <section class="what_we_do">
            <div class="lwrap">
                <div class="hdr" data-flex="col -center">
                    <h2>What we do</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliquet.</p>
                </div>
                <div data-flex="stripe" data-childs="col -center" class="gallery-articles" data-flex-480="vstripe">
                    <article>
                        <div class="lbl lbl-works"><i class="icon-photo"></i></div>
                        <h3>Lorem ipsum</h3>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. Lorem quis bibendum auctor.</p>
                        <a href="#" class="btn btn-default btn-learn">Learn more</a>
                    </article>
                    <article>
                        <div class="lbl lbl-works"><i class="icon-speed"></i></div>
                        <h3>Lorem ipsum</h3>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. Lorem quis bibendum auctor.</p>
                        <a href="#" class="btn btn-default btn-learn">Learn more</a>
                    </article>
                    <article>
                        <div class="lbl lbl-works"><i class="icon-settings"></i></div>
                        <h3>Lorem ipsum</h3>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin. Lorem quis bibendum auctor.</p>
                        <a href="#" class="btn btn-default btn-learn">Learn more</a>
                    </article>
                </div>
            </div>
        </section>
        <section class="latest">
            <div class="lwrap">
                <div class="hdr" data-flex='col -center'>
                    <h2>Our latest work</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliquet.</p>
                </div>
                <div class="tabs" data-tabs="" data-flex="col -center">

                    <div class="tablist">
                        <a href="#tab1" class="active">Photography</a>
                        <a href="#tab2">Design</a>
                        <a href="#tab3">Print</a>
                    </div>

                    <div class="tabset">
                        <a href="#tab1" class="active">fashion</a>
                        <div id="tab1" class="tabpanel active">
                            <div class="gallery-works" data-flex="stripe w">
                                <figure><a href="#"><img src="/images/pic1.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic2.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic3.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic4.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic5.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic6.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic7.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic8.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic9.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic10.png" width="160" height="160" alt=""></a></figure>
                            </div>
                            <div data-flex="center">
                                <a href="#" class="btn btn-view btn-default"><em>View more work</em><i class="icon-enter"></i></a>
                            </div>
                        </div>
                        <a href="#tab2">fashion</a>
                        <div id="tab2" class="tabpanel">
                            <div class="gallery-works" data-flex="stripe w">
                                <figure><a href="#"><img src="/images/pic8.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic9.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic10.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic8.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic9.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic10.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic8.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic9.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic10.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic10.png" width="160" height="160" alt=""></a></figure>
                            </div>
                            <div data-flex="center">
                                <a href="#" class="btn btn-view btn-default"><em>View more work</em><i class="icon-enter"></i></a>
                            </div>
                        </div>
                        <a href="#tab3">fashion</a>
                        <div id="tab3" class="tabpanel">
                            <div class="gallery-works" data-flex="stripe w">
                                <figure><a href="#"><img src="/images/pic1.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic2.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic1.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic2.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic1.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic2.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic1.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic2.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic1.png" width="160" height="160" alt=""></a></figure>
                                <figure><a href="#"><img src="/images/pic2.png" width="160" height="160" alt=""></a></figure>
                            </div>
                            <div data-flex="center">
                                <a href="#" class="btn btn-view btn-default"><em>View more work</em><i class="icon-enter"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="testimonials">
            <div class="lwrap">
                <div class="hdr" data-flex="col -center">
                    <h2>Testimonials</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliquet.</p>
                </div>
                <div class="slider" data-flex="axis">
                    <input type="radio" id="rs1" checked="" name="rs">
                    <input type="radio" id="rs2" name="rs">
                    <input type="radio" id="rs3" name="rs">
                    <div class="prev">
                        <label for="rs1" class="num0"><i class="icon-prev"></i></label>
                        <label for="rs2" class="num1"><i class="icon-prev"></i></label>
                        <label for="rs3" class="num2"><i class="icon-prev"></i></label>
                    </div>
                    <ul>
                        <li>
                            <blockquote data-flex="col -center">
                                <p>"Awlnya saya tidak menderita penyakit apapun, namun setetah saya tidak berodat ke klinkik tongang, saya dinyatakan tidak menderita penyakit apapun!"</p>
                                <cite data-flex="">
                                    <figure><img src="/images/seo.png" width="46" height="46" alt=""></figure>
                                    <div>
                                        <div class="name">Mr. Herp</div>
                                        <div class="job">Ceo of Meme, Inc</div>
                                    </div>
                                </cite>
                            </blockquote>
                        </li>
                        <li class="num1">
                            <blockquote data-flex="col -center">
                                <p>"Awlnya saya tidak menderita penyakit apapun, namun setetah saya tidak berodat ke klinkik tongang, saya dinyatakan tidak menderita penyakit apapun!"</p>
                                <cite data-flex="">
                                    <figure><img src="/images/seo.png" width="46" height="46" alt=""></figure>
                                    <div>
                                        <div class="name">Mr. Herp</div>
                                        <div class="job">Ceo of Meme, Inc</div>
                                    </div>
                                </cite>
                            </blockquote>
                        </li>
                        <li class="num2">
                            <blockquote data-flex="col -center">
                                <p>"Awlnya saya tidak menderita penyakit apapun, namun setetah saya tidak berodat ke klinkik tongang, saya dinyatakan tidak menderita penyakit apapun!"</p>
                                <cite data-flex="">
                                    <figure><img src="/images/seo.png" width="46" height="46" alt=""></figure>
                                    <div>
                                        <div class="name">Mr. Trofimov</div>
                                        <div class="job">Ceo of Meme, Inc</div>
                                    </div>
                                </cite>
                            </blockquote>
                        </li>
                        <li class="num3">
                            <blockquote data-flex="col -center">
                                <p>"Awlnya saya tidak menderita penyakit apapun, namun setetah saya tidak berodat ke klinkik tongang, saya dinyatakan tidak menderita penyakit apapun!"</p>
                                <cite data-flex="">
                                    <figure><img src="/images/seo.png" width="46" height="46" alt=""></figure>
                                    <div>
                                        <div class="name">Mr. Harkovskiy</div>
                                        <div class="job">Ceo of Meme, Inc</div>
                                    </div>
                                </cite>
                            </blockquote>
                        </li>
                    </ul>
                    <div class="next">
                        <label for="rs1" class="num0"><i class="icon-next"></i></label>
                        <label for="rs2" class="num1"><i class="icon-next"></i></label>
                        <label for="rs3" class="num2"><i class="icon-next"></i></label>
                    </div>
                </div> 
            </div>
        </section>
        <section class="clients">
            <div class="lwrap">
                <div class="hdr" data-flex="col -center">
                    <h2>Our Happy Client</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit acutor aliquet.</p>
                </div>
                <div data-flex="axis w" class="clients-logos">
                    <a href="#"><img src="/images/google.png" width="143" height="49" alt=""></a>
                    <a href="#"><img src="/images/Yahoo_Logo.png" width="140" height="27" alt=""></a>
                    <a href="#"><img src="/images/MSFT_logo_png.png" width="144" height="31" alt=""></a>
                    <a href="#"><img src="/images/293px-Intel-logo.png" width="103" height="68" alt=""></a>
                    <a href="#"><img src="/images/qulcom.png" width="151" height="34" alt=""></a>
                    <a href="#"><img src="/images/800px-Cisco_logo.png" width="125" height="65" alt=""></a>
                    <a href="#"><img src="/images/Apple-logo.png" width="52" height="63" alt=""></a>
                    <a href="#"><img src="/images/ASUS_Logo.png" width="116" height="21" alt=""></a>
                </div>
                <div data-flex="center">
                    <a href="#" class="btn btn-all"><em>See all client</em><i class="icon-enter-alt"></i></a>
                </div>
            </div>
        </section>
        <section class="team">
            <div class="lwrap">
                <div class="hdr" data-flex="col -center">
                    <h2>Meet the team</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliquet</p>
                </div>

                <div class="team-gallery" data-flex="stripe w" data-childs="col -center">
                    <div>
                        <figure><img src="/images/av1.png" width="124" height="125" alt=""></figure>
                        <div class="team-name">Krisna Wijaja</div>
                        <div class="links-social" data-flex="-center center">
                            <a href="#"><i class="icon-dirrible"></i></a>
                            <a href="#"><i class="icon-be"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a>
                        </div>
                    </div>
                    <div>
                        <figure><img src="/images/av2.png" width="126" height="124" alt=""></figure>
                        <div class="team-name">Gabriel Yoshua</div>
                        <div class="links-social" data-flex="-center center">
                            <a href="#"><i class="icon-dirrible"></i></a>
                            <a href="#"><i class="icon-be"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a>
                        </div>
                    </div>
                    <div>
                        <figure><img src="/images/av3.png" width="125" height="124" alt=""></figure>
                        <div class="team-name">Adik N.K.L</div>
                        <div class="links-social" data-flex="-center center">
                            <a href="#"><i class="icon-dirrible"></i></a>
                            <a href="#"><i class="icon-be"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a>
                        </div>
                    </div>
                    <div>
                        <figure><img src="/images/av4.png" width="125" height="124" alt=""></figure>
                        <div class="team-name">Zan D.J</div>
                        <div class="links-social" data-flex="-center center">
                            <a href="#"><i class="icon-dirrible"></i></a>
                            <a href="#"><i class="icon-be"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a>
                        </div>
                    </div>
                    <div>
                        <figure><img src="/images/av5.png" width="124" height="125" alt=""></figure>
                        <div class="team-name">Faizal Febri</div>
                        <div class="links-social" data-flex="-center center">
                            <a href="#"><i class="icon-dirrible"></i></a>
                            <a href="#"><i class="icon-be"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="work-with-us" data-flex="-center center">
            <a href="#" class="btn btn-default btn-work">Work with us</a>
        </section>
        <footer id="footer">
            <div class="footer">
                <div class="lwrap" data-flex="stripe w" data-flex-480="vstripe">
                    <div data-flex='col -center'>
                        <div class="hdr" data-flex='col -center'>
                            <h4>About Us</h4>
                            <hr>
                        </div>
                        <p>
                            This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. 
                            Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Ut aliquam massa nisl quis neque. 
                            Suspendisse in orci enim.Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.
                        </p>
                        <div class="links-social" data-flex="-center center">
                            <a href="#"><i class="icon-dirrible"></i></a>
                            <a href="#"><i class="icon-fb"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a>
                        </div>
                    </div>
                    <div>
                        <div class="hdr" data-flex='col -center'>
                            <h4>recent posts</h4>
                            <hr>
                        </div>
                        <div class="post" data-flex='-center'>
                            <figure><img src="/images/pic11.png" width="53" height="54" alt=""></figure>
                            <div data-flex='col -start'>
                                <a href="#" class="post-news">Lorem Ipsum Dolor Sit Amet.</a>
                                <div class="lbl lbl-default lbl-magazine">Magazine</div>
                            </div>
                        </div>
                        <div class="post" data-flex='-center'>
                            <figure><img src="/images/pic12.png" width="53" height="53" alt=""></figure>
                            <div data-flex='col -start'>
                                <a href="#" class="post-news">Lorem Ipsum Dolor Sit Amet.</a>
                                <div class="lbl lbl-default lbl-ui">Ui design</div>
                            </div>
                        </div>
                        <div class="post" data-flex='-center'>
                            <figure><img src="/images/pic13.png" width="53" height="53" alt=""></figure>
                            <div data-flex='col -start'>
                                <a href="#" class="post-news">Lorem Ipsum Dolor Sit Amet.</a>
                                <div class="lbl lbl-default lbl-photo">Photography</div>
                            </div>
                        </div>
                        <div class="post" data-flex='-center'>
                            <figure><img src="/images/pic14.png" width="53" height="53" alt=""></figure>
                            <div data-flex='col -start'>
                                <a href="#" class="post-news">Lorem Ipsum Dolor Sit Amet.</a>
                                <div class="lbl lbl-default lbl-book">book</div>
                            </div>
                        </div>
                        <div class="post" data-flex='-center'>
                            <figure><img src="/images/pic15.png" width="53" height="53" alt=""></figure>
                            <div data-flex='col -start'>
                                <a href="#" class="post-news">Lorem Ipsum Dolor Sit Amet.</a>
                                <div class="lbl lbl-default lbl-ui">Ui design</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="hdr" data-flex='col -center'>
                            <h4>Contact us</h4>
                            <hr>
                        </div>
                        <div class="address-block" data-flex='col -center'>
                            <address>10044 West 23th Street, Sute 721<br> New York NY 10010</address>
                            <span>Email: <a href="#">Username@email.com</a></span>
                            <span>Phone: +1 (0) 123 4567 890</span>
                            <span>Fax: +1 (0) 123 4567 890</span>
                        </div>
                        <form action="" method="post" name="">
                            <input placeholder="Your Name.." name="input-default" type="text">
                            <input placeholder="Your Email.." name="input-default" type="email">
                            <textarea placeholder="Your Message.."></textarea>
                            <button><span class="btn btn-send">Send</span></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="press">
                <div class="lwrap">
                    <div class="hdr" data-flex='col -center'>
                        <h4>As see on</h4>
                        <hr>
                    </div>
                    <div data-flex='around w' class="links-media">
                        <a href="#">
                            <img src="/images/Cnn.png" width="97" height="47" alt="">
                        </a>
                        <a href="#">
                            <img src="/images/TechCrunch_Logo_2013.png" width="92" height="47" alt="">
                        </a>
                        <a href="#"><img src="/images/300px-BBC.png" width="164" height="47" alt=""></a>
                        <a href="#">
                            <img src="/images/The_New_York_Times.png" width="335" height="45" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="rights" data-flex='-center center'>
                <span data-flex="-center">made with<i class="icon-like"></i>by Krisha :)</span>
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
        <script>
            $(function () {
                $('a[href*=#]').on('click', function (e) {
                    e.preventDefault();
                    $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
                });
            });
        </script>
    </body>
</html>