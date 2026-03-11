<?php
  require('./controllers/productController.php');
  $content = $productContent[$id];
?>

<section>
    <div class="block-box-bg overlay o-70">
        <div class="mw-1440 jc-center ai-center dh-100 small-fd-col-rev g-0 small-g-20 p-30">
          <div class="info w-60 tc-0 small-t-c">
            <h1 class="h1-product font-cross"><?= $content['subtitle']; ?></h1>
            <p class="small-d-none"><?= $content['text1']; ?></p>
            <p class="h1 font-title fw-700 tc-acc"><?= $content['price']; ?></p>
            <p class="h3 fw-700"><?= $content['text2'] ?></p>

            <div class="btns g-10 small-jc-center d-none">
                <?php
                $wrap_product = "<div class='wrap-get subpage'>
                  <div class='btn-get'>{$Btn_buy}</div>
                  <div class='get'>";

                foreach ($links_product as $link) {
                    $wrap_product .= "
                    <a href='{$link['url']}{$id}{$ref}'
                        target='_blank'
                        class='{$link['class']}'
                        aria-label='{$link['label']}'>{$link['text']}</a>";
                }

                $wrap_product .= "
                  </div>
                </div>";

                //echo $wrap_product;
                ?>
                <?php if($user_replica): ?>
                  <div class="wrap-get subpage">
                    <a href="<?= $Register; ?>" target="_blank" class="btn-get"><?= $Btn_buy; ?></a>
                  </div>
                <?php endif; ?>
            </div>
          </div>

          <div class="w-40 small-w-80 small-mt-40 d-flex jc-center ai-center">
            <img class="w-80 d-block object-cover" src="./images/body/products/<?= $content['image']; ?>" alt="<?= $content['subtitle']; ?>" />
          </div>
        </div>
        <img class="full-img-abs" src="./images/body/subpage/bg_<?= $content['id']; ?>.webp" alt="<?= $content['id']; ?> background" />
    </div>
</section>

<!-- ============================================== -->
<!-- ONE -->
<!-- ============================================== -->

<section class="c-sub <?= $content['id']; ?>">
    <div class="h-100 of-h rel small-h-0 p-20 d-flex fd-col ai-center jc-center">

      <h2 class="abs-text h1 font-cross t-c <?= $content['ingredients_textCl'] ?> ?>"><?= $content['ingredients'] ?></h2>
      <img class="img-middle br-20 small-d-none" src="./images/body/products/<?= $content['image']; ?>" alt="<?= $content['subtitle']; ?>" />

      <div class="ingredients_wrap">
        <ul class="ingredients m-center">
          <?php foreach ($content['ingredients_list'] as $index => $ingredient): ?>
            <li>
              <div class="ingredient-pill">
                <span class="v-custom icon icon-<?= $index+1; ?> c-<?= $content['id']; ?> br-50 <?= $content['id']; ?>"></span>
                <?= $ingredient; ?>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
</section>

<!-- ============================================== -->
<!-- TWO -->
<!-- ============================================== -->

<section>
  <div class="img_med of-h">
    <div class="h-100 rel all-tc-0 overlay o-60 custom">
      <div class="center">
        <h2 class="h1"><?= $Benefits; ?></h2>
        <p><?= $content['benefits_sub'] ?></p>
      </div>

      <ul class="benefits-list med-d-none">
        <?php
          $titles = $content['benefits_titles'];
          $benefits = $content['benefits_list'];

          foreach ($titles as $index => $title):
            // Cada título tiene su correspondiente descripción en $benefits
            $desc = $benefits[$index + 1] ?? ''; // +1 porque en $Benefits_list_map, el primer elemento es el título
        ?>
          <li class="benefits b-<?= $index + 1; ?>">
            <span class="v-custom icon icon-<?= 7 + $index; ?> <?= $id; ?> i-big"></span>
            <h3 class="font-cross"><?= $title; ?></h3>
            <p><?= $desc; ?></p>
          </li>
        <?php endforeach; ?>
      </ul>

      <img class="full-img" src="./images/body/subpage/bg_middle_<?= $id; ?>.webp" alt="<?= $id; ?>">

    </div>
  </div>
</section>

<!-- ============================================== -->
<!-- THREE -->
<!-- ============================================== -->

<section class="c-sub <?= $content['id']; ?>">
    <div class="mw-1280 t-c big">
        <h2 class="h1 med-mt-50 <?= $content['ingredients_textCl'] ?>"><?= $content['subpage']; ?></h2>
        <?php if(false): ?>
          <a href="<?= $Login; ?>" target="_blank" class="btn big c-acc br-50 mt-40 small-mt-20"><?= $Btn_start; ?></a>
        <?php endif; ?>
    </div>
</section>

<script>

/* ============================================== */
/* SCROLL-MAGIC */
/* ============================================== */

document.addEventListener("DOMContentLoaded", function() {

    // Solo ejecutar si ancho >= 1080px
    if (window.innerWidth >= 1080) {

        // Función para cargar scripts dinámicamente
        function loadScript(src) {
            return new Promise((resolve, reject) => {
                const script = document.createElement('script');
                script.src = src;
                script.onload = resolve;
                script.onerror = reject;
                document.head.appendChild(script);
            });
        }

        // Cargar librerías en orden
        Promise.all([
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"),
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.min.js")
        ])
        .then(() => Promise.all([
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/plugins/animation.gsap.min.js"),
            loadScript("https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js")
        ]))
        .then(() => {

            var controller = new ScrollMagic.Controller();
            var animationSpeed = 0.75;
            var animationLinear = Power3.easeInOut;
            var animationIn = Expo.easeIn;

            $('.ingredients_wrap').each(function() {
                var ingredientsElement = this.querySelector('.ingredients');
                if (ingredientsElement) {
                    var scene = new ScrollMagic.Scene({
                        triggerElement: this,
                        triggerHook: 0.8,
                        duration: "80%"
                    })
                    .setClassToggle(ingredientsElement, 'fade-in')
                    //.addIndicators()
                    .addTo(controller);
                }
            });

            new ScrollMagic.Scene({
                triggerElement: '.img_med',
                duration: "150%",
                triggerHook: 1
            })
            .setTween(
                new TimelineMax()
                .fromTo('.img_med img', 1, { y: "-20%" }, { y: "3%" })
                )
            //.addIndicators()
            .addTo(controller);

        });

    }

});


/* ============================================== */
/* BANNER */
/* ============================================== */

document.addEventListener("DOMContentLoaded", () => {
  const slides = document.querySelectorAll(".banner li");
  let current = 0;
  let interval;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.classList.remove("active", "fade-out");
      if (i === index) slide.classList.add("active");
    });
  }

  function nextSlide() {
    slides[current].classList.add("fade-out"); // Fade-out texto antes de salir
    setTimeout(() => {
      current = (current + 1) % slides.length;
      showSlide(current);
    }, 600);
  }

  function startSlider() {
    interval = setInterval(nextSlide, 4000); // cada 4s
  }

  function stopSlider() {
    clearInterval(interval);
  }

  // Inicialización
  showSlide(current);
  startSlider();

  // Detener al hacer hover
  const banner = document.querySelector(".banner");
  banner.addEventListener("mouseenter", stopSlider);
  banner.addEventListener("mouseleave", startSlider);
});

/* ============================================== */
/* TILT */
/* ============================================== */

const imgContainer = document.querySelector('.c-sub .h-100');
const img = document.querySelector('.c-sub .img-middle');

imgContainer.addEventListener('mousemove', (e) => {
    const rect = imgContainer.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const deltaX = (x - centerX) / centerX; // -1 a 1
    const deltaY = (y - centerY) / centerY; // -1 a 1

    // inclinación
    const rotateX = deltaY * 15;
    const rotateY = deltaX * -15;

    img.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
});

imgContainer.addEventListener('mouseleave', () => {
    img.style.transform = 'rotateX(0deg) rotateY(0deg) scale(1)';
});


</script>



