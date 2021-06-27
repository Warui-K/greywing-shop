 <!-- COMMENTS -->
 <section class="pt-9 pb-11" id="reviews">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Header -->
            <div class="row align-items-center">
              <div class="col-12 col-md-auto">
                <!-- Button -->
                <a class="btn btn-sm btn-dark" data-toggle="collapse" href="#reviewForm">
                Write a Comment
                </a>
              </div>
            </div>
            <!-- New Review -->
            <div class="collapse" id="reviewForm">
              <!-- Divider -->
              <hr class="my-8">
              <!-- Form -->
              <form>
                <div class="row">
                <div class="col-12">
                    <?php comment_form(
                         [
                        'comment_field' => '<div class="form-group">
                                            <label class="sr-only" for="reviewText">Comment:</label>
                                            <textarea class="form-control form-control-sm" id="reviewText" rows="5" placeholder="Comment *" required></textarea>
                                            </div>',
                        'fields' => [
                            'author' => '<div class="form-group">
                                        <label class="sr-only" for="reviewName">Your Name:</label>
                                        <input class="form-control form-control-sm" id="reviewName" type="text" placeholder="Your Name *" required>
                                        </div>',
                                        
                            'email' => '<div class="form-group">
                                        <label class="sr-only" for="reviewEmail">Your Email:</label>
                                        <input class="form-control form-control-sm" id="reviewEmail" type="email" 
                                        placeholder="Your Email * (We will not post the email/ We will not share it)" required>
                                        </div>',
                             'url' => '<div class="form-group">
                                            <label class="sr-only" for="reviewTitle">Website URL:</label>
                                            <input class="form-control form-control-sm" id="reviewTitle" type="text" placeholder="Website URL *" required>
                                        </div>'           
                        ],
                        'class_submit' => 'btn btn-outline-dark',
                        'label_submit' => __('Submit Comment', 'runakoweb'),
                        'title_reply' => __('Leave a <span>Comment</span>', 'runakoweb')

                         ]);?>
                </div>
                </div>
              </form>
            </div>

            <!-- COMMENTS -->
            <?php if(post_password_required()){return;}?>
            <div class="mt-8">
              <!-- Comments -->
              <?php if(have_comments()){?>
            <h4 class="mb-10 text-center">Comments: (<?php comments_number('0');?>)</h4>
            <?php foreach($comments as $comment){?>
              <div class="review">
                <div class="review-body">
                  <div class="row">
                    <div class="col-12 col-md-auto">
                      <!-- Avatar -->
                      <div class="avatar avatar-xxl mb-6 mb-md-0">
                        <span class="avatar-title rounded-circle">
                        <?php echo get_avatar($comment, 60, '', '', []);?>
                        </span>
                      </div>
                    </div>
                    <div class="col-12 col-md">
                      <!-- Header -->
                      <div class="row mb-6">
                        <div class="col-12">
                          <!-- Time -->
                          <span class="font-size-xs text-muted">
                          <?php comment_author();?>, <time><?php comment_date();?></time>
                          </span>
                        </div>
                      </div>
                      <!-- Text -->
                      <p class="text-gray-500">
                      <?php comment_text();?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pagination -->
            <nav class="d-flex justify-content-center mt-9">
              <ul class="pagination pagination-sm text-gray-400">
                <li class="page-item">
                <?php } the_comments_pagination();?>
                </li>
              </ul>
            </nav>

          </div>
          <?php }?>
        </div>
      </div>
    </section>