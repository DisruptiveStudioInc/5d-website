<section class="c-pri">

	<div class="d-flex fw-wrap rel">
    <div class="w-50 med-w-100 h-100 med-h-60" style="position:sticky;top:0;left:0;">
      <img src="./images/body/the_spirit/1.webp" alt="<?= $Spirit_title_01; ?>" class="background" style="opacity:1;" />
      <img src="./images/body/the_spirit/2.webp" alt="<?= $Spirit_title_02; ?>" class="background animate-fade" style="animation-delay:5s" />
      <img src="./images/body/the_spirit/3.webp" alt="<?= $Spirit_title_03; ?>" class="background animate-fade" style="animation-delay:10s" />
    </div>
    <div class="rel w-50 med-w-100 d-flex fd-col jc-center p-80 pt-20 pb-20 med-p-40 small-p-20 small-pt-40 small-pb-40 c-pri">
      <h2 class="h1 t-c t-pretty p-10 m-0"><?= $Spirit_title; ?></h2>
      <p class="h3 t-c m-center mt-0 t-pretty" style="max-width:24ch;"><?= $Spirit_subtitle; ?></p>
      <p class="t-c mb-60"><?= $Spirit_text; ?></p>
      <p class="h3 fw-700 t-c"><?= $Spirit_title_01; ?></p>
      <ul class="menu-list icon-check v-white mb-20">
        <?php foreach($clubBenefits as $benefit): ?>
          <li class=""><?= $benefit; ?></li>
        <?php endforeach; ?>
      </ul>
      <p><?= $Spirit_text_01; ?></p>
    </div>
  </div>
</section>
