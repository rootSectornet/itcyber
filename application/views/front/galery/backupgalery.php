  <!-- Single Portfolio-->
              <!-- <?php foreach ($galery->result() as $ga): ?>
              <div id="portfolioModal<?= $ga->id_galery;?>" class="modal white">
                <div class="model-img"></div>
                <div class="modal-content">
                  <h2 class="title">Lorem ipsum dolor sit fugit dolore.</h2>
                  <p class="m-content">A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.</p>
                </div>

                <div class="modal-footer">
                  <a href="#" target="_blank" class="waves-effect btn-flat brand-text modal-action">Live Demo</a>
                  <a href="#" class="waves-effect btn-flat brand-text modal-action modal-close">cancel</a>
                </div>
              </div>
                <li class="single-port-item category-1 category-3">
                  <a href="#portfolioModal<?= $ga->id_galery;?>" class="waves-effect waves-block waves-light modal-trigger" data-image-source="<?= $ga->link;?>" data-title="<?= $ga->caption;?>" data-content=" " data-demo-link="#"> <!-- Portfolio pop-up content-->
                    <div class="protfolio-image">
                      <img src="<?= $ga->link;?>" alt="portfolio" style="height: 308px; width: 100%"> <!-- portfolio thumbnail-->
                      <div class="protfolio-content waves-effect waves-block waves-light">
                        <div class="protfolio-content__inner">
                          <h2 class="p-title"><?= $ga->caption;?></h2>
                        </div>
                      </div>
                      <div class="p-overlay"></div>
                    </div>
                  </a>
                </li>
              <?php endforeach ?> 

