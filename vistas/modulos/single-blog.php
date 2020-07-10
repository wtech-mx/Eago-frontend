

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(<?php echo $url; ?>vistas/img/bg-img/17.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <div class="breadcrumb-post-content">
                            <h2 class="post-title"><?php echo $post['titulo'] ?></h2>
                            <div class="post-meta">
                                <a href="#" class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo fecha($post['fecha']); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <div class="roberto-news-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail mb-50">
                        <img src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['thumb'] ?>">
                    </div>
                    <!-- Blog Details Text -->
                    <div class="blog-details-text">
                        <p><?php echo $post['texto'] ?></p>

                        <!-- Blockquote -->
<!--                        <blockquote class="roberto-blockquote d-flex">
                            <div class="icon">
                                <img src="</?php echo $url; ?>vistas/img/core-img/quote.png" alt="">
                            </div>
                            <div class="text">
                                <h5>“Before you took that first cruise, your thoughts about cruise ships and cruise vacations consisted of flashbacks to Love Boat re-runs. Cruising was all about sunny, tropical destinations like Bermuda”</h5>
                            </div>
                        </blockquote>-->
                    </div>

                    <!-- Post Author Area -->
                    <div class="post-author-area d-flex align-items-center justify-content-between mb-50">

                        <!-- Author Social Info -->
                        <div class="author-social-info d-flex align-items-center">
                            <p>Share:</p>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                    </div>

                    <!-- Comments Area -->
<!--                    <div class="comment_area mb-50 clearfix">
                        <h2>02 Comments</h2>

                        <ol>
                            <!~~ Single Comment Area ~~>
                            <li class="single_comment_area">
                                <!~~ Comment Content ~~>
                                <div class="comment-content d-flex">
                                    <!~~ Comment Author ~~>
                                    <div class="comment-author">
                                        <img src="<?php echo $url; ?>vistas/img/bg-img/40.jpg" alt="author">
                                    </div>
                                    <!~~ Comment Meta ~~>
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">27 Aug 2016</a>
                                        <h5>Brandon Kelley</h5>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</p>
                                        <a href="#" class="like">Like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>

                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!~~ Comment Content ~~>
                                        <div class="comment-content d-flex">
                                            <!~~ Comment Author ~~>
                                            <div class="comment-author">
                                                <img src="<?php echo $url; ?>vistas/img/bg-img/41.jpg" alt="author">
                                            </div>
                                            <!~~ Comment Meta ~~>
                                            <div class="comment-meta">
                                                <a href="#" class="post-date">27 Aug 2018</a>
                                                <h5>John Doe</h5>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                                <a href="#" class="like">Like</a>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <!~~ Single Comment Area ~~>
                            <li class="single_comment_area">
                                <!~~ Comment Content ~~>
                                <div class="comment-content d-flex">
                                    <!~~ Comment Author ~~>
                                    <div class="comment-author">
                                        <img src="<?php echo $url; ?>vistas/img/bg-img/42.jpg" alt="author">
                                    </div>
                                    <!~~ Comment Meta ~~>
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">27 Aug 2018</a>
                                        <h5>Lander Tea</h5>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetu adipisci velit, sed quia non numquam eius modi</p>
                                        <a href="#" class="like">Like</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>-->

                    <!-- Leave A Reply -->
<!--                    <div class="roberto-contact-form mt-80 mb-100">
                        <h2>Leave A Comment</h2>

                        <!~~ Form ~~>
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                                </div>
                                <div class="col-12">
                                    <input type="email" name="message-email" class="form-control mb-30" placeholder="Email">
                                </div>
                                <div class="col-12">
                                    <input type="text" name="website" class="form-control mb-30" placeholder="Websites">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control mb-30" placeholder="Start the discussion..."></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn roberto-btn btn-3 mt-15">Post Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>-->
                </div>

                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="roberto-sidebar-area pl-md-4">

                        <!-- Newsletter -->
                        <div class="single-widget-area mb-100">
                            <div class="newsletter-form">
                                <h5>Boletin informativo</h5>
                                <p>Suscríbase a nuestro boletín de noticias y reciba nuevas actualizaciones.</p>
                                
                                <form action="#" method="post">
                                    <input type="email" name="nl-email" id="nlEmail" class="form-control" placeholder="Enter your email...">
                                    <button type="submit" class="btn roberto-btn w-100">Subscribirse</button>
                                </form>
                            </div>
                        </div>

                        <!-- Recent Post -->
                        <div class="single-widget-area mb-100">
                            <h4 class="widget-title mb-30">Recent News</h4>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php echo $url; ?>vistas/img/bg-img/29.jpg" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Proven Techniques Help You Herbal Breast</a>
                                </div>
                            </div>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php echo $url; ?>vistas/img/bg-img/30.jpg" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Cooking On A George Foreman Grill</a>
                                </div>
                            </div>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php echo $url; ?>vistas/img/bg-img/31.jpg" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Selecting The Right Hotel</a>
                                </div>
                            </div>

                            <!-- Single Recent Post -->
                            <div class="single-recent-post d-flex">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="<?php echo $url; ?>vistas/img/bg-img/32.jpg" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <a href="#" class="post-author">Jan 29, 2019</a>
                                        <a href="#" class="post-tutorial">Event</a>
                                    </div>
                                    <a href="single-blog.html" class="post-title">Comment Importance Of Human Life</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog Area End -->



