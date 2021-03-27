<!-- footer -->
<div class="container-fluid bg-light text-muted">
<div class="container" style="padding-bottom:20px;">
	<footer class="pt-4 my-md-5 pt-md-5">
    <div class="row">
      <div class="col-6 col-md">
        <h5 class="text-dark">Category</h5><br>
        <ul class="list-unstyled text-small">
          <?php foreach ($categories->db as $key=>$fields):
            if($fields['list']):  ?>
          <li style="padding-bottom:10px;"><a class="link-secondary" href="<?php echo DOMAIN_CATEGORIES.$key; ?>"><?php echo $fields['name']; ?> 
          <?php echo count(); ?></a></li>
          <?php endif; endforeach; ?>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5 class="text-dark">Inspiration</h5><br>
        <ul class="list-unstyled text-small">
          <?php
            $listOfKeys = $pages->getList(1, 5);
            if ($listOfKeys) :
            foreach ($listOfKeys as $key) :
            $lPage = new Page($key);
          ?>
          <li style="padding-bottom:10px;"><a class="link-secondary" href="<?php echo $lPage->permalink() ?>"><?php echo $lPage->title() ?></a></li>
          <?php endforeach ?>
          <?php endif ?>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5 class="text-dark">About</h5><br>
        <ul class="list-unstyled text-small">
          <?php foreach ($staticContent as $staticPage): ?>
            <?php if ($staticPage->slug() != "error") { // hide error page from menu ?>
            <li style="padding-bottom:10px;"><a class="link-secondary"  href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a></li>
            <?php } ?>
          <?php endforeach ?>
        </ul>
      </div>
      <div class="col-12 col-md">
        <h3 class="text-dark"><?php echo $site->title(); ?></h3>
        <br>
        <ul class="llist-group list-group-flush" style="padding-left:0px;">
          <?php foreach (Theme::socialNetworks() as $key=>$label): ?>
          <li style="float:left;list-style-type: none;"><a href="<?php echo $site->{$key}(); ?>"><img src="<?php echo DOMAIN_THEME.'img/'.$key.'.png' ?>" width="36"> </a>&nbsp;</li>
          <?php endforeach; ?>
        </ul><br><br>
        <p><?php echo $site->description(); ?></p>
        <p><small class="d-block mb-3 text-muted">Powered by <a href="https://www.bludit.com/" target="_blank"><span class="fw-bold">Bludit</span></a> Theme by <a href="https://blthemes.com/" target="_blank"><span class="fw-bold">BlThemes</span></a></small></p>

        <small class="d-block mb-3 text-muted">&copy; 2017–<?php echo date("Y"); ?></small>
      </div>
    </div>
  </footer>
</div>
</div>
<!--/ footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5edde5cdba532f27"></script>