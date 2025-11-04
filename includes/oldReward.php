<section class="c-pri">

	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="mw-1440 t-c">
		<h2 class="h2"><?= $Truth_title; ?></h2>
    <p><?= $Truth_subtitle; ?></p>
	</div>
	<div class="rel">
    <img src="./images/icons/body/space.svg" alt="" class="abs w-100 med-d-none" style="height:100%;top:0;left:0;opacity:0.1;object-fit:cover;">
		<ul class="textos">
      <?php foreach($sec07 as $item): ?>
        <li>
          <h2><?= $item['title']; ?></h2>
          <span><img src="./images/body/truth/<?= $item['id']; ?>.webp" alt="<?= $item['title']; ?>" class="br-20"/>
            <p class="h2 t-pretty t-c"><?= $item['text']; ?></p>
          </span>
        </li>
      <?php endforeach; ?>
		</ul>
    <img src="./images/icons/body/space.svg" alt="" class="abs w-100 med-d-none" style="height:100%;top:0;left:0;mix-blend-mode:overlay;opacity:0.7;object-fit:cover;">
	</div>
</section>