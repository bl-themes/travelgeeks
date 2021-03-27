<?php Theme::plugins('pageBegin'); ?>
      <div class="container">
        <div class="row" style="padding-top: 80px;">
          <div class="col-sm-12" style="padding-bottom: 10px;">
            <div class="card">
              <div class="card-body text-center">
                <img src="<?php echo Theme::src('img/error.png'); ?>" width="400" alt="error">
                <p class="card-text"><?php echo $page->content(); ?></p>
                <p><a class="btn btn-warning" href="<?php echo $site->url(); ?>" role="button">Go to homepage</a> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php Theme::plugins('pageEnd'); ?>