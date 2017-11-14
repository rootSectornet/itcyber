
  <?php foreach ($get_coment->result() as $com): ?>
      <li>
        <div class="clearfix card">
          <div class="left comment-img">
            <a href="#"><img src="<?php echo base_url(); ?>assets/front/img/user_icon.png" alt="">
            </a>
          </div>
          <div class="card-content comment-content">
            <div class="comment-meta">
              <p class="author"><?= $com->user_coment;?> <span>says:</span>
              </p>
              <p class="date"><?=  date('d F Y', strtotime($com->tanggal));?></p>
            </div>
            <div class="comment-text">
              <p><?= $com->coment;?></p>
            </div>
          </div>
        </div>
      </li>
  <?php endforeach ?>