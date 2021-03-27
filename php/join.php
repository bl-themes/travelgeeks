<?php Theme::plugins('pageBegin'); ?>
      <div class="container">
        <div class="row" style="padding-top: 80px;">
          <div class="col-sm-12" style="padding-bottom: 10px;">
            <div class="card">
            <?php if ($page->coverImage()): ?>
              <img src="<?php echo $page->coverImage(); ?>" class="card-img-top" alt="<?php echo $page->title(); ?>">
              <?php endif ?>
              <div class="card-body">
                  <h1 class="card-title"><?php echo $page->title(); ?></h1>
                <p class="card-text"><?php echo $page->content(); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php Theme::plugins('pageEnd'); ?>