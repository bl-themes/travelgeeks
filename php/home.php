    <?php if ($WHERE_AM_I == 'home'): ?>
    <!-- banner -->
    <div class="container-fluid text-white bg-info" style="padding-top: 40px;">
      <div class="container">
      <div class="row">
        <div class="col-sm-6" style="padding-top: 10%;">
          <h1 class="display-6 fw-bolder"><?php echo $site->slogan(); ?></h1>
          <p><?php echo $site->description(); ?></p>
          <p><a class="btn btn-warning" href="#inspiration" role="button">Browser Inspiration</a> <a class="btn btn-light" href="<?php echo $site->url(); ?>join-travelgeeks" role="button">Are you traveler?</a></p>
        </div>
        <div class="col-sm-6">
          <img class="img-fluid" src="<?php echo Theme::src('img/hero-img-s.png'); ?>" alt="<?php echo $page->title(); ?>">
        </div>
      </div>
    </div>
    </div>
    <!--/ banner -->
    <!-- feature -->
    <div class="container-fluid" style="padding-top:30px;padding-bottom:20px;background-color: #ffeaa7;">
      <div class="container">
          <div class="row">
            <div class="col-sm" style="padding-top: 10px;padding-bottom: 10px;">
              <div class="d-flex justify-content-start">
                <div class="col-3">
                  <span class="rounded-circle btn-warning align-middle fs-5" style="padding-top:15px;padding-bottom:15px;padding-left:19px;padding-right:19px;"><i class="fas fa-suitcase-rolling"></i></span>
                </div>
                <div class="col-9">
                  <strong>30,000 travel tip's</strong><br><small>Discover helpful travel tips everyday.</small>
                </div>
              </div>
            </div>
            <div class="col-sm" style="padding-top: 10px;padding-bottom: 10px;">
              <div class="d-flex justify-content-start">
                <div class="col-3">
                  <span class="rounded-circle btn-warning align-middle fs-5" style="padding-top:15px;padding-bottom:15px;padding-left:19px;padding-right:18px;"><i class="fas fa-user"></i></span>
                </div>
                <div class="col-9">
                  <strong>Expert instruction</strong><br><small>You will be directed by experts.</small>
                </div>
              </div>
            </div>
            <div class="col-sm" style="padding-top: 10px;padding-bottom: 10px;">
              <div class="d-flex justify-content-start">
                <div class="col-3">
                  <span class="rounded-circle btn-warning align-middle fs-5" style="padding-top:15px;padding-bottom:15px;padding-left:19px;padding-right:13px;"><i class="fas fa-plane"></i></span>
                </div>
                <div class="col-9">
                  <strong>Flight and hotels</strong><br><small>Discover flights and hotel discounts.</small>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!--/ feature -->
    <!-- content -->
      </div>
      <?php endif; ?>
      <!--/ feature post -->
      <!-- all post -->
      <div class="container" id="inspiration">
        <!-- title card -->
         <div class="row" style="margin-top:30px;">
            <h2><?php ($WHERE_AM_I=='search'?$language->p('Search'):$language->p('Inspiration for you')) ?></h2>
         </div>
        <!--/ title card -->
        <div class="row" style="padding-top: 25px;">
          <?php if (empty($content)) { $language->p('No pages found'); } ?>
          <?php foreach ($content as $page): ?>
          <div class="col-sm-3" style="padding-bottom: 20px;">
            <a href="<?php echo $page->permalink(); ?>">
            <div class="card h-100">
              <img src="<?php echo ($page->coverImage()?$page->coverImage():Theme::src('img/noimage.png')) ?>" class="card-img-top" alt="<?php echo $page->title(); ?>">
              <div class="card-body">
                <h3 class="card-title fs-5"><?php echo $page->title(); ?></h3>
                <p class="card-text"><?php echo (empty($page->description())?$language->p('Complete the description of the article'):$page->description()) ?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item text-muted" style="font-size: 12px;"><i class="far fa-clock"></i> <?php echo $page->date(); ?> <br> <i class="far fa-folder text-warning"></i> <?php echo $page->category() ?></li>
              </ul>
              <div class="card-body">
                <img class="rounded-circle" src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" width="30">
                <small class="text-muted"><?php echo $page->user('nickname'); ?></small>
              </div>
            </div>
            </a>
          </div>
          <?php endforeach ?>
        </div>
      </div>
      <!--/ all post -->
      <!-- navigation -->
      <?php if (Paginator::numberOfPages()>1): ?>
      <div class="container" style="margin-top: 15px;margin-bottom: 30px;">
        <div class="btn-group" role="group" aria-label="Basic outlined example">
          <?php if (Paginator::showPrev()): ?>
          <a type="button" class="btn btn-outline-secondary" href="<?php echo Paginator::previousPageUrl() ?>">Previous</a>
          <?php endif ?>
          <?php if (Paginator::showNext()): ?>
          <a type="button" class="btn btn-outline-secondary" href="<?php echo Paginator::nextPageUrl() ?>">Next</a>
          <?php endif ?>
        </div>
      </div>
      <?php endif ?>
      <!--/ navigation -->
    <!--/ content -->