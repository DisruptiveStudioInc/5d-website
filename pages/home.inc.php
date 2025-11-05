<!-- ============================================== -->
<!-- HERO -->
<!-- ============================================== -->

<section class="rel hero-pin d-flex fd-col jc-center ai-center overlayy o-30">
  <div class="abs" id="home" style="top:0"></div>
  <img src="./images/hero/hero.webp" alt="" class="background" style="opacity:1"/>

  <div class="text-hero t-c hero-text">
    <img src="./images/logo/logo.svg" alt="5D Community" class="w-30 small-w-60 m-center mb-50 small-mb-30">
    <h1 class="h1-hero t-balance small-mb-30"><?= $Hero_01; ?></h1>
    <p class="h4 w-50 med-w-80 small-w-100 m-center"><?= $Hero_02; ?></p>
  </div>
  <div class="section-arrows">
    <button class="arrow down"></button>
	</div>



</section>

<!-- ============================================== -->
<!-- ONE -->
<!-- ============================================== -->

<section>

	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="anchor" id="5d"></div>
	<div class="mw-1440 jc-center ai-center min-h-dhv med-min-h-60dvh med-pt-150 med-pb-150">
		<div class="t-c">
			<h2 class="h1 mb-80 small-mb-40"><?= $Journey_title; ?></h2>
      <ul class="slider">
        <?php foreach($sec01 as $step): ?>
          <li class="content-slide">
            <h3 class="content-title tc-acc h1-special"><?= $step['title'] ?></h3>
            <p class="content-text h1" data-text="<?= $step['text'] ?>"><?= $step['text'] ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
		</div>
	</div>
</section>

<!-- ============================================== -->
<!-- TWO -->
<!-- ============================================== -->

<section class="c-100">

  <div class="anchor" id="5d-360"></div>
  <h2 class="h1-special t-c tc-acc m-0 pt-80 med-pt-30 pb-30"><?= $Letters_title ?></h2>

	<div class="h-100 vertical-slides rel of-h small-h-0 letters" style="--total-items:4">
    <div class="section-arrows">
      <button class="arrow up"></button>
      <button class="arrow down"></button>
    </div>
    <?php foreach($verticalSlides as $k => $slide): ?>
		<div class="letter-wrap" style="--item-index:<?= $k; ?>">
      <img class="letter-bg img_0<?= $slide['id']; ?>" src="./images/body/letters/<?= $slide['id']; ?>.webp" alt="<?= $slide['title']; ?>">
      <div class="letter-content word_0<?= $slide['id']; ?> abs w-100 p-40 med-p-10-20 med-pt-50 med-pb-50 t-c">
        <h2 class="letter-title"><?= $slide['title']; ?></h2>
        <p class="h4 letter-text t-balnce h3"><?= $slide['text']; ?></p>
        <ul class="letter-list d-flex fw-wrap jc-center t-c w-60 med-w-100 m-center mt-40 med-mt-20" style="gap:20px;">
          <?php foreach($slide['list'] as $item): ?>
            <li class="letter-item d-flex jc-center ai-center p-20 c-sec br-20 t-pretty w-50 small-w-100"><?= $item; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
		</div>
    <?php endforeach; ?>
	</div>
</section>

<!-- ============================================== -->
<!-- THREE -->
<!-- ============================================== -->

<section class="parallax-wrap">

	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="mw-1440 t-c h-100 med-h-0 fd-col g-40 med-g-20 jc-center ai-center parallax">
		<h2 class="h1-special short"><?= $Vision_text; ?></h2>
    <ul class="d-flex fw-wrap jc-center">
      <?php foreach($sec03 as $item): ?>
        <li class="box rel d-flex fd-col jc-center ai-center g-0 p-20 br-20 w-100 c-pri box_<?= $item['id']; ?>">
          <img src="./images/body/ranks/<?= $item['image'] ?>" alt="<?= $item['title']; ?>" class="w-40 mb-10">
          <h3 class="box-title h4 m-0"><?= $item['title']; ?></h3>
          <p class="m-0"><?= $monthly_earnings ?></p>
          <p class="m-0 fw-700 h5 tc-acc"><?= $item['text'] ?></p>
          <svg class="glow-effect" xmlns="http://www.w3.org/2000/svg"><rect /></svg>
        </li>
      <?php endforeach; ?>
    </ul>
	</div>
</section>

<!-- ============================================== -->
<!-- FOUR -->
<!-- ============================================== -->

<section class="c-pri licence-wrap">
	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="mw-1280 t-c h-100 med-h-0 jc-center fd-col">
		<h2 class="h1 m-center mb-20 licence-title t-balance" style="max-width:26ch;"><?= $Slogan_title; ?></h2>
		<p class="h4 fw-700 tc-acc m-center mb-0 licence-text" style="max-width:48ch"><?= $Slogan_subtitle; ?></p>
		<p class="h4 m-center mt-0 mb-40 licence-text" style="max-width:48ch"><?= $Slogan_text; ?></p>
    <ul class="d-flex med-fd-col med-ai-center jc-center g-20">
      <?php foreach($sec04 as $k => $plan): ?>
        <li class="licence-box rel c-pri p-20 med-w-100 w-30 br-10 d-flex fd-col ai-center jc-center g-10">
          <img src="./images/body/<?= $k + 1 ?>.webp" alt="" class="licence-bg background br-10" <?= $k === 1 ? 'style="object-position:50% 90%"' : '' ?>>
          <h3 class="rel h5 fw-700 m-0"><?= $plan['title'] ?></h3>
          <p class="rel m-0"><?= $plan['text'] ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
    <?php if($user_replica): ?>
		  <a href="<?= $Register; ?>" target="_blank" class="btn big c-acc br-50 mt-40 small-mt-20"><?= $Btn_live; ?></a>
    <?php endif; ?>
	</div>
</section>

<!-- ============================================== -->
<!-- FIVE -->
<!-- ============================================== -->

<?php
$Modal = array(
	array(
		$Products_title_01,
		$Products_sub_01,
		$Products_text_01
	)
);

$counter = 1;

foreach ($Modal as $item){
	echo "
	<div id='Modal{$counter}' class='modal'>
    <div class='modal-content rel t-c pt-60'>
      <span class='v-white c-pri icon icon-close' onclick=\"closeModal('Modal{$counter}')\"></span>
      <h2 class='h2 tc-pri t-c med-t-l'>{$item[0]}</h2>
      <p>{$item[2]}</p>
    </div>
	</div>
	";
	$counter++;
}
?>

<section class="products">

	<div class="overlay of-h">

	<div class="anchor" id="membership"></div>
	<div class="h-100 med-h-0 med-fd-col-rev content-scroll jc-center ai-center rel wrap_products">
  <div class="abs h-100 w-50" style="background-color:rgba(0,0,0,0.6)"></div>
	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="box_product img-three rel flex ai-center jc-center fd-col g-20">
		<div class="rel t-c">
      <img src="./images/body/products/<?= $link_01; ?>.webp" class="product m-center" alt="<?= $link_01; ?>" onclick="openModal('Modal1')"/>
      <div class="abs product-plus-wrap">
        <button type="button" class="v-white c-acc icon br-50 icon-more"></button>
      </div>
		</div>
    <a href="?p=product&id=<?= $link_01; ?>" class="btn big c-sec br-50"><?= $Btn_view; ?></a>
	</div>

	<!--<img class="polvo med-d-none" src="./images/body/products/bg.webp">-->
	<img class="background anim-scale med-d-none img_product_<?= $link_01; ?>" src="./images/body/subpage/bg_<?= $link_01; ?>.webp" alt="<?= $link_01; ?> background">

	</div>
</section>

<!-- ============================================== -->
<!-- SIX -->
<!-- ============================================== -->

<?php if(false): ?>
<section class="deg">
	<div class="wrap-people">
		<div class="mw-1440 p-30 mb-40">
			<h3 class="h3 t-c"><?= $Envolvers_title; ?></h3>
		</div>

	<?php
	$Logos = array(
		array('1','Mariana Torres',$Logos_testimonials[0]),
    array('2','Andrés Valdivia',$Logos_testimonials[1]),
    array('3','Sofía Ramírez',$Logos_testimonials[2]),
    array('4','Valentina Ríos',$Logos_testimonials[3]),
    array('5','Jorge Medina',$Logos_testimonials[4]),
    array('6','Ricardo Paredes',$Logos_testimonials[5]),
    array('7','Daniel Ortega',$Logos_testimonials[6]),
    array('8','Camila Herrera',$Logos_testimonials[7]),
    array('9','Isabela Núñez',$Logos_testimonials[8]),
    array('10','Mateo Lozano',$Logos_testimonials[9])
	);
	?>

	<ul class="people">
		<?php
		foreach ($Logos as $item){
			echo "
			<li class='item item{$item[0]}'>
				<img src='./images/body/evolvers/{$item[0]}.webp' alt='{$item[1]}'>

					<h5>{$item[1]}</h5>
					<p>{$item[2]}</p>

			</li>
			";
		}
		?>
	</ul>

	</div>
</section>
<?php endif; ?>

<!-- ============================================== -->
<!-- SEVEN -->
<!-- ============================================== -->

<section class="c-pri">

	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="mw-1440 d-flex med-fd-col ai-center g-20">
    <div class="w-100">
      <h2 class="h1-special med-t-c" style="font-size:4.5vw"><?= $Truth_title; ?></h2>
      <p class="h4 med-t-c t-balance"><?= $Truth_subtitle; ?></p>
    </div>
    <div class="w-100 med-d-flex fw-wrap g-0 small-g-20 jc-center">
      <?php foreach($sec07 as $item): ?>
        <article class="reward p-20 pt-40 pb-40 of-h rel med-t-c w-100 med-w-40 small-w-100">
          <img src="./images/body/ranks/<?= $item['image']; ?>" alt="<?= $item['title']; ?>" class="reward-image w-60 med-w-100 small-w-60"/>
          <h2 class="reward-title h4 m-0" style="transform-origin:left center;"><?= $item['title']; ?></h2>
          <p class="reward-text mb-0"><?= $item['text']; ?></p>
        </article>
      <?php endforeach; ?>
    </div>
	</div>
</section>

<!-- ============================================== -->
<!-- EIGHT -->
<!-- ============================================== -->

<?php include_once('./includes/altSec.php'); ?>

<!-- ============================================== -->
<!-- NINE -->
<!-- ============================================== -->

<section class="c-ter">

	<div class="section-arrows">
	    <button class="arrow up"></button>
	</div>

	<div class="mw-1280 t-c big">
		<h2 class="h1 m-center" style="max-width:20ch"><?= $Traits_title; ?></h2>
    <?php if($user_replica): ?>
		  <a href="<?= $Register; ?>" target="_blank" class="btn big c-acc br-50 mt-40 small-mt-20"><?= $Btn_part; ?></a>
    <?php endif; ?>
	</div>
</section>

<script src="./js/slider.js"></script>

<script>
/* ==============================================
    MODAL
============================================== */
// Función para abrir el modal
function openModal(modalId) {
    var modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('open'); // Muestra el modal
        document.body.classList.add('no-scroll'); // Bloquea el scroll
    }
}

// Función para cerrar el modal
function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('open'); // Oculta el modal
        checkModalsOpen(); // Verifica si hay otros modales abiertos
    }
}

// Función para verificar si hay modales abiertos y desbloquear el scroll
function checkModalsOpen() {
    var openModals = document.querySelectorAll('.modal.open');
    if (openModals.length === 0) {
        document.body.classList.remove('no-scroll'); // Reactiva el scroll
    }
}

// Función para cerrar el modal si se hace clic fuera de él
window.onclick = function(event) {
    var modals = document.querySelectorAll('.modal');
    modals.forEach(function(modal) {
        if (event.target === modal) {
            closeModal(modal.id);
        }
    });
};

document.addEventListener("DOMContentLoaded", function () {

/* ============================================== */
/* VIDEO HERO */
/* ============================================== */

document.addEventListener("DOMContentLoaded", function () {
    const iframe = document.querySelector('.video-iframe-wrapper iframe');
    const player = new Vimeo.Player(iframe);
    const placeholder = document.querySelector('.video-placeholder');

    // Cuando el video empieza a reproducirse, ocultamos el placeholder
    player.on('play', function () {
        placeholder.style.transition = "opacity 0.8s ease";
        placeholder.style.opacity = "0";
        setTimeout(() => placeholder.style.display = "none", 800);
    });
});

    /* ==============================================
       SCROLL-MAGIC SOLO DESKTOP
    ============================================== */
    if(window.innerWidth >= 1080){

        function loadScript(src){
            return new Promise((resolve, reject) => {
                const script = document.createElement('script');
                script.src = src;
                script.onload = resolve;
                script.onerror = reject;
                document.head.appendChild(script);
            });
        }

        // Cargar librerías
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
            var animationInOutQuart = Expo.easeInOutQuart;
            var animationIn = Expo.easeIn;

            // ========== GALLERY
            var textoTimeline = new TimelineMax();
            textoTimeline
                .fromTo('.word_01', animationSpeed, {opacity:1, scale:1, filter:'blur(0)'}, {opacity:0, scale:1.5, y:'-300%', filter:'blur(12px)', ease:animationLinear, immediateRender:false})
                .fromTo('.word_02', animationSpeed, {opacity:0, scale:1, filter: 'blur(12px)'}, {opacity:1, scale:1, filter:'blur(0)', ease:animationLinear, immediateRender:false})
                .to('.word_02', animationSpeed, {opacity:0, scale:1.5, y:'-300%', filter:'blur(12px)', ease:animationLinear})
                .fromTo('.word_03', animationSpeed, {opacity:0, scale:1, filter: 'blur(12px)'}, {opacity:1, scale:1, filter:'blur(0)', ease:animationLinear, immediateRender:false})
                .to('.word_03', animationSpeed, {opacity:0, scale:1.5, y:'-300%', filter:'blur(12px)', ease:animationLinear})
                .fromTo('.word_04', animationSpeed, {opacity:0, scale:1, filter: 'blur(12px)'}, {opacity:1, scale:1, filter:'blur(0)', ease:animationLinear, immediateRender:false})
                .to('.word_04', animationSpeed, {opacity:0, scale:1.5, y:'-300%', filter:'blur(12px)', ease:animationLinear})
                .fromTo('.word_05', animationSpeed, {opacity:0, scale:1, filter: 'blur(12px)'}, {opacity:1, scale:1, filter:'blur(0)', ease:animationLinear, immediateRender:false});

            var imgTimeline = new TimelineMax();
            imgTimeline
                .to('.img_01', animationSpeed, {y: '-100%', ease: animationLinear}, animationSpeed * 0.25)
                .to('.img_02', animationSpeed, {y: '-100%', ease: animationLinear}, animationSpeed * 2.25)
                .to('.img_03', animationSpeed, {y: '-100%', ease: animationLinear}, animationSpeed * 4)
                .to('.img_04', animationSpeed, {y: '-100%', ease: animationLinear}, animationSpeed * 5.75);

            var master = new TimelineMax();
            master.add(textoTimeline, 0);
            master.add(imgTimeline, 0);

            new ScrollMagic.Scene({
                triggerElement: '.vertical-slides',
                duration: '300%',
                triggerHook: 0
            })
            .setPin('.vertical-slides')
            .setTween(master)
            //.addIndicators()
            .addTo(controller);

            // ========== HERO
            TweenMax.fromTo(
              ".hero-text",
              0.75, // animationSpeed
              { opacity: 0, y: 40 },
              { opacity: 1, y: 0, ease: Power3.easeOut, delay: 2.2 }
            );

            // ========== PARALLAX
            var parallaxTimeline = new TimelineMax();
            parallaxTimeline
                .fromTo('.parallax .box_1',
                  animationSpeed,
                  { scale: 1.5, x:"-100px", y:"0", opacity:0},
                  { scale: 1, x:"0", y:"0", opacity:1, ease:animationIn })
                .fromTo('.parallax .box_2',
                  animationSpeed,
                  { scale: 1.5, x:"0", y:"50", opacity:0},
                  { scale: 1, x:"0", y:"0", opacity:1, ease:animationIn })
                .fromTo('.parallax .box_3',
                  animationSpeed,
                  { scale: 1.5, x:"100", y:"0", opacity:0},
                  { scale: 1, x:"0", y:"0", opacity:1, ease:animationIn })
                .fromTo('.parallax .box_4',
                  animationSpeed,
                  { scale: 1.5, x:"-100", y:"50", opacity:0},
                  { scale: 1, x:"0", y:"0", opacity:1, ease:animationIn })
                .fromTo('.parallax .box_5',
                  animationSpeed,
                  { scale: 1.5, x:"100", y:"50", opacity:0},
                  { scale: 1, x:"0", y:"0", opacity:1, ease:animationIn });

            new ScrollMagic.Scene({
                triggerElement: '.parallax-wrap',
                duration: "100%",
                triggerHook: 0
            })
            .setPin('.parallax')
            .setTween(parallaxTimeline)
            //.addIndicators()
            .addTo(controller);

            // ========== LICENSES
            var licensesTimeline = new TimelineMax();
            licensesTimeline
              .from('.licence-title', animationSpeed, {scale:1.5, y:200})
              .staggerFrom('.licence-text', animationSpeed, {y: 40, opacity:0}, 0.2)
              .staggerFrom('.licence-box', animationSpeed, {x: 80, opacity:0}, 0.2);

            new ScrollMagic.Scene({
              triggerElement: '.licence-wrap',
              duration: "200%",
              triggerHook: 0
            })
            .setPin('.licence-wrap')
            .setTween(licensesTimeline)
            .addTo(controller);

            // ========== CONTENT SCROLL (jQuery solo si existe)
            if(window.jQuery) {
                $('.products').each(function(){
                    var productsElement = this.querySelector('.wrap_products');
                    if(productsElement){
                        new ScrollMagic.Scene({
                            triggerElement: this,
                            triggerHook: 0.2,
                            duration: "80%"
                        })
                        .setClassToggle(productsElement, 'fade-in')
                        //.addIndicators()
                        .addTo(controller);
                    }
                });
            }

            // ========== EVOLVERS
            var EVO = new TimelineMax();
            EVO.fromTo('.evolvers_wrap .evolvers', animationSpeed, {x:"8%"}, {x:"-48%", ease:animationInOutQuart},0);

            new ScrollMagic.Scene({
          triggerElement: '.evolvers_wrap',
          duration:'200%',
          triggerHook: 0
      })
      .setPin('.evolvers_wrap')
      .setTween(EVO)
      //.addIndicators()
      .addTo(controller);


        }).catch(err => console.error("Error cargando scripts ScrollMagic/GSAP:", err));
    }

    /* ==============================================
       MOUSE HOVER
    ============================================== */
    const texts = document.querySelectorAll('.text_spirit div');
    const products = document.querySelectorAll('.img_product');

    if(texts.length && products.length){
        texts.forEach((text, index)=>{
            text.addEventListener('mouseenter', ()=>{
                products.forEach((product, i)=>{
                    const circle = product.querySelector('.img_reference');
                    if(i===index){
                        product.style.opacity='1';
                        if(circle) circle.style.animation='circleSlideFade 0.6s 0.2s forwards';
                        product.classList.add('show');
                    } else {
                        product.style.opacity='0';
                        if(circle) circle.style.animation='none';
                        product.classList.remove('show');
                    }
                });
            });
        });
    }

    /* ==============================================
       PARALLAX TEXTO SOLO EN DESKTOP
    ============================================== */
    document.querySelectorAll('ul.textos li').forEach(item=>{
        const span = item.querySelector('span');
        const img = span ? span.querySelector('img') : null;
        if(!img) return;

        if(window.innerWidth > 1080){
            item.addEventListener('mousemove', e=>{
                const rect = item.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const moveX = (rect.width/2 - x)/20;
                const moveY = (rect.height/2 - y)/20;
                img.style.transform = `translate(${moveX}px, ${moveY}px)`;
            });
            item.addEventListener('mouseleave', ()=>{
                img.style.transform='translate(0px,0px)';
            });
        } else {
            img.style.transform='none';
        }
    });

    /* ==============================================
      STICKY BANNER EXPANSION SOLO EN DESKTOP
    ============================================== */
    const expansionBoxes = document.querySelectorAll('.expansion-boxes')
    const expansionBanners = document.querySelectorAll('.expansion-banner')

    if(expansionBoxes.length > 0 && expansionBanners.length > 0){
      const optionsObserver = {
        rootMargin: `-80% 0px -15% 0px`
      }
      const handleBannerImages = (entries, observer) => {
        entries.forEach(entry => {
          const targetImg = document.getElementById(`exp-banner-${entry.target.dataset.image}`)
          if(entry.isIntersecting){
            expansionBanners.forEach(banner => banner.classList.remove('active'))
            targetImg.classList.add('active')
          }
        })
      }
      const bannerObserver = new IntersectionObserver(handleBannerImages, optionsObserver)

      function handleInitObserver(){
        if(window.innerWidth > 768){
          expansionBoxes.forEach(box => bannerObserver.observe(box))
        } else {
          bannerObserver.disconnect()
        }
      }
      handleInitObserver();
      window.addEventListener('resize', handleInitObserver)
    }

});
</script>



