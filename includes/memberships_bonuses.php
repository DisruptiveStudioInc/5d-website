<section>
	<div class="mw-1280 g-40 fd-col">

		<div class="t-c">
            <h2 class="h2"><?= $content['started_title']; ?></h2>
            <p class="h4"><?= $content['started_sub']; ?></p>
        </div>

        <div class="jc-center g-20 ai-stretch small-fd-col">

            <div class="w-100 rel">
              <div class="banner" style="position:sticky;top:80px;">
                <ul>
                  <?php
                    $Service = array(
                      array('Designed to support your body’s natural rhythms—cognitive, physical, and hormonal—24 hours a day.','Sofía R.',$id),
                      array('I can focus for hours without getting burned out. Revive works.','Leo M.',$id),
                      array('In one week, my memory and mental energy improved','Andrea T.',$id)
                    );

                    $counter = 1;
                    foreach ($Service as $item){
                      echo "
                      <li>
                        <img src='./images/body/banner/{$counter}.webp' alt='{$item[0]}'/>
                      </li>
                      ";
                      $counter++;
                    }
                  ?>
                </ul>
              </div>
            </div>

            <!-- Textos dinámicos -->
            <div class="w-100 text_spirit <?= $content['id']; ?>">
              <?php foreach($productBonuses as $bonus): ?>
                <div>
                  <h3 class="h4"><?= $bonus['title']; ?></h3>
                  <?php if (isset($bonus['text'])): ?>
                    <p><?= $bonus['text']; ?></p>
                  <?php endif; ?>
                  <?php if (isset($bonus['list'])): ?>
                    <ul class="menu-list icon-check v-white">
                      <?php foreach ($bonus['list'] as $li): ?>
                        <li>
                          <?= (gettype($li) === 'array') ?
                          "{$Bonus_community_list_level} {$li['level']}: {$li['percentage']}%" :
                          $li; ?>
                        </li>
                      <?php endforeach; ?>
                      <?php if (isset($bonus['total'])): ?>
                        <li><?= $bonus['total']; ?></li>
                      <?php endif; ?>
                    </ul>
                  <?php endif; ?>
                  <?php if (isset($bonus['text2'])): ?>
                    <p><?= $bonus['text2']; ?></p>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>

        </div>

	</div>
</section>