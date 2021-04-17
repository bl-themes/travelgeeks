<?php Theme::plugins('pageBegin'); ?>
      <!-- feature post -->
      <div class="container">
        <!-- title card -->
        <!--/ title card -->
        <div class="row" style="padding-top: 80px;">
          <div class="col-sm-8" style="padding-bottom: 10px;">
            <div class="card">
              <div class="card-body">
              <h1 class="card-title"><?php echo $page->title(); ?></h1>
              <span class="text-muted"><small><i class="far fa-clock"></i> <?php echo $page->date(); ?> &nbsp; <i class="far fa-folder text-warning"></i> <?php echo $page->category() ?></small></span>
            </div>
            <?php if ($page->coverImage()): ?>
              <img src="<?php echo $page->coverImage(); ?>" class="card-img-top" alt="<?php echo $page->title(); ?>">
              <center><small><span class="text-black-50"><?php echo $page->custom('figure'); ?></span></small></center>
              <?php endif ?>
              <div class="card-body">
                <p class="card-text"><?php echo $page->content(); ?></p>
                      <?php Theme::plugins('pageEnd'); ?>
              </div>

              <div class="card-body">
                <!-- share tools -->
                  <div class="addthis_inline_share_toolbox_8ozz"></div>
                <!--/ share tools -->
                <br>
                <?php if (!empty($page->tags(true))): ?>
                <!-- tag -->
                <small><i class="fas fa-tag text-warning"></i>&nbsp;</small>
                <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
                <a class="btn btn-outline-dark btn-sm" href="<?php echo DOMAIN_TAGS.$tagKey ?>" role="button"><?php echo $tagName; ?></a>
                <?php endforeach ?>
                <!--/ tag -->
              <?php endif; ?>
              </div>
              <br>
            </div>
          </div>
          <div class="col-sm-4" style="padding-bottom: 10px;">
            <!-- post -->
            <div class="card" style="margin-bottom: 20px;">
              <div class="card-body">
                <h4>Inspiration</h4>
                <ul class="list-group list-group-flush">
                  <?php
                    $listOfKeys = $pages->getList(1, 8);
                    if ($listOfKeys) :
                    foreach ($listOfKeys as $key) :
                    $lPage = new Page($key);
                  ?>
                  <li class="list-group-item" style="padding-left: 0px;"><a href="<?php echo $lPage->permalink() ?>"><?php echo $lPage->title() ?></a></li>
                  <?php endforeach ?>
                  <?php endif ?>
                </ul>
              </div>
            </div>
            <!--/ post -->
            <!-- page -->
            <div class="card" style="margin-bottom: 20px;">
              <div class="card-body">
                <h4>About</h4>
                <ul class="list-group list-group-flush">
                  <?php foreach ($staticContent as $staticPage): ?>
                  <?php if ($staticPage->slug() != "error") { // hide error page from menu ?>
                  <li class="list-group-item" style="padding-left: 0px;"><a href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a></li>
                  <?php } ?>
                  <?php endforeach ?>
                </ul>
              </div>
            </div>
            <!--/ page -->
            <!-- profile -->
            <div class="card" style="margin-bottom: 20px;">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="position-relative">
                  <img src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="<?php echo $page->user('nickname'); ?>" class="rounded-circle avatar" width="80">
                </div>
                <div class="col" style="padding-left: 10px;">
                  <p class="mb-0"><strong><?php echo $page->user('nickname'); ?></strong></p>
                  <p class="mb-1 text-muted"><small><?php echo $page->user('firstname'); ?></small></p>
                </div>
              </div>
              <br>
              <p class="border-top"><center><small class="text-muted">Become our contributor</small> <a class="btn btn-warning btn-sm" href="<?php echo $site->url(); ?>join-travelgeeks" role="button">Join</a></center></p>
            </div>
            </div>
            <!--/ profile -->
          </div>
        </div>
      </div>
      <!--/ feature post -->
    <!--/ content -->
