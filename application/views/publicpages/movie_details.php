<!-- ==========Banner-Section========== -->
<section class="details-banner bg_img" data-background="<?php echo base_url() ?>assets/poster/<?= $movie_detail['mov_poster']; ?>">
    <div class="container">
        <div class="details-banner-wrapper">
            <div class="details-banner-thumb">
                <img src="<?php echo base_url() ?>assets/poster/<?= $movie_detail['mov_poster']; ?>" alt="movie">
                <a href="<?php echo $movie_detail['mov_trailor']; ?>" class="video-popup">
                    <img src="<?php echo base_url() ?>publicassets/images/movie/video-button.png" alt="movie">
                </a>
            </div>
            <div class="details-banner-content offset-lg-3">
                <h3 class="title"><?php echo $movie_detail['mov_name']; ?></h3>
                <div class="tags">
                    <a href="#0"><?php echo $movie_detail['mov_language']; ?></a>

                </div>
                <a href="#0" class="button"><?php echo $movie_detail['gener']; ?></a>
                <div class="social-and-duration">
                    <div class="duration-area">
                        <div class="item">
                            <i class="fas fa-calendar-alt"></i><span><?php echo $movie_detail['mov_realse_date']; ?></span>
                        </div>
                        <div class="item">
                            <i class="far fa-clock"></i><span><?php echo $movie_detail['mov_running_time']; ?></span>
                        </div>
                    </div>
                    <ul class="social-share">
                        <li><a href="#0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#0"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#0"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#0"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#0"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Book-Section========== -->
<section class="book-section bg-one">
    <div class="container">
        <div class="book-wrapper offset-lg-3">
            <div class="left-side">
                <div class="item">
                    <div class="item-header">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>publicassets/images/movie/tomato2.png" alt="movie">
                        </div>
                        <div class="counter-area">
                            <span class="counter-item odometer" data-odometer-final="88">0</span>
                        </div>
                    </div>
                    <p>tomatometer</p>
                </div>
                <div class="item">
                    <div class="item-header">
                        <div class="thumb">
                            <img src="<?php echo base_url() ?>publicassets/images/movie/cake2.png" alt="movie">
                        </div>
                        <div class="counter-area">
                            <span class="counter-item odometer" data-odometer-final="88">0</span>
                        </div>
                    </div>
                    <p>audience Score</p>
                </div>
                <div class="item">
                    <div class="item-header">
                        <h5 class="title">4.5</h5>
                        <div class="rated">
                            <i class="fas fa-heart"></i>
                            <i class="fas fa-heart"></i>
                            <i class="fas fa-heart"></i>
                            <i class="fas fa-heart"></i>
                            <i class="fas fa-heart"></i>
                        </div>
                    </div>
                    <p>Users Rating</p>
                </div>
                <div class="item">
                    <div class="item-header">
                        <div class="rated rate-it">
                            <i class="fas fa-heart"></i>
                            <i class="fas fa-heart"></i>
                            <i class="fas fa-heart"></i>
                            <i class="fas fa-heart"></i>
                            <i class="fas fa-heart"></i>
                        </div>
                        <h5 class="title">0.0</h5>
                    </div>
                    <p><a href="#0">Rate It</a></p>
                </div>
            </div>
            <a href="<?php echo base_url(); ?>movie_ticket_plan/<?= $movie_detail['movie_id'] ?>" class="custom-button">book tickets</a>
        </div>
    </div>
</section>
<!-- ==========Book-Section========== -->

<!-- ==========Movie-Section========== -->
<section class="movie-details-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-center flex-wrap-reverse mb--50">
            <div class="col-lg-3 col-sm-10 col-md-6 mb-50">
                <div class="widget-1 widget-tags">
                    
                </div>
                <div class="widget-1 widget-offer">
                    <h3 class="title">Payment Options</h3>
                    <div class="offer-body">
                        <div class="offer-item">
                            <div class="thumb">
                                <img src="<?php echo base_url() ?>publicassets/images/payment/cbe_tn.jpg" alt="payment">
                            </div>
                            <div class="content">
                                <h6>
                                    <a href="#0">CBE BIRR</a>
                                </h6>
                            </div>
                        </div>
                        <div class="offer-item">
                            <div class="thumb">
                                <img src="<?php echo base_url() ?>publicassets/images/payment/hellocash_tn.jpg" alt="payment">
                            </div>
                            <div class="content">
                                <h6>
                                    <a href="#0">HELLO CASH</a>
                                </h6>
                            </div>
                        </div>
                        <div class="offer-item">
                            <div class="thumb">
                                <img src="<?php echo base_url() ?>publicassets/images/payment/amole_tn.jpg" alt="payment">
                            </div>
                            <div class="content">
                                <h6>
                                    <a href="#0">AMOLE</a>
                                </h6>
                            </div>
                        </div>
                        <div class="offer-item">
                            <div class="thumb">
                            <img src="<?php echo base_url() ?>publicassets/images/payment/m-birr_tn.jpg" alt="payment">
                            </div>
                            <div class="content">
                                <h6>
                                    <a href="#0">M-BIRR</a>
                                </h6>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mb-50">
                <div class="movie-details">
                    <div class="tab summery-review">
                        <ul class="tab-menu">
                            <li class="active">
                                summery
                            </li>
                            <li>
                                user review <span><?= $count; ?></span>
                            </li>
                        </ul>
                        <div class="tab-area">
                            <div class="tab-item active">
                                <div class="item">
                                    <h5 class="sub-title">Synopsis</h5>
                                    <p><span><?php echo $movie_detail['mov_synopsis']; ?></p>
                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="item">
                                    <div class="header">
                                        <h5 class="sub-title">Add Comment</h5>
                                    </div>
                                    <?php echo form_open('create_comment/' . $movie_detail['movie_id']); ?>
                                    <div class="contact-form" id="contact_form_submit">
                                        <div class="form-group">
                                            <label for="subject">Title <span>*</span></label>
                                            <input type="text" placeholder="Enter Your Subject" name="title" id="title">
                                            <div class="text-danger">
                                                <?php echo form_error('title'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Comment <span>*</span></label>
                                            <textarea name="message" id="message" placeholder="Enter Your Message"></textarea>
                                            <div class="text-danger">
                                                <?php echo form_error('message'); ?>
                                            </div>
                                        </div>
                                        <?php if ($this->session->tempdata('cust_logged_in') == true){?>
                                        <div class="form-group">
                                            <input type="submit" value="Add Comment">
                                        </div>
                                        <?php }?>
                                    </div>
                                    </form>
                                </div>
                                <div class="movie-review-item">

                                    <?php foreach ($comment as $c) : ?>

                                        <div class="author">

                                            <div class="thumb">
                                                <a href="#0">
                                                    <img src="<?php echo base_url() ?>publicassets/images/cast/cast02.jpg" alt="cast">
                                                </a>
                                            </div>
                                            <div class="movie-review-info">
                                                <span class="reply-date"><?= $c['created_at']; ?></span>
                                                <h6 class="subtitle"><a href="#0"><?= $c['username']; ?></a></h6>
                                                <!-- <span><i class="fas fa-check"></i> verified review</span> -->
                                            </div>
                                        </div>
                                        <div class="movie-review-content">
                                            <!-- <div class="review">
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                                <i class="flaticon-favorite-heart-button"></i>
                                            </div> -->
                                            <h6 class="cont-title"><?= $c['title']; ?></h6>
                                            <p><?= $c['body']; ?></p>
                                            <div class="review-meta">
                                                <a href="#0">
                                                    <i class="flaticon-hand"></i><span>8</span>
                                                </a>
                                                <a href="#0" class="dislike">
                                                    <i class="flaticon-dont-like-symbol"></i><span>0</span>
                                                </a>
                                                <a href="#0">
                                                    Report Abuse
                                                </a>
                                            </div>

                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="load-more text-center">
                                    <a href="#0" class="custom-button transparent">load more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Movie-Section========== -->