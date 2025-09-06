<!-- ============================================== -->
<!-- HERO -->
<!-- ============================================== -->

<section class="hero-pin d-flex fd-col jc-center ai-center overlay o-30">
  <div class="anchor" id="home"></div>
  <img src="./images/hero/hero.webp" alt="" class="background" style="opacity:1"/>
  <canvas id="webgl-canvas" class="background" style="opacity:1"></canvas>

  <div class="text-hero t-c hero-text">
    <h1 class="h1-special"><?= $Hero_01; ?></h1>
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

	<div class="anchor" id="stellum"></div>
	<div class="mw-1440 jc-center ai-center h-100 med-h-0">
		<div class="t-c">
			<h2 class="h1-special mb-50 small-mb-0"><?= $Journey_title; ?></h2>
			<div class="tabs t-c">
				<div class="tab-header">
					<div class="tab active"><span>01</span><?= $Journey_button_1; ?></div>
					<div class="tab"><span>02</span><?= $Journey_button_2; ?></div>
					<div class="tab"><span>03</span><?= $Journey_button_3; ?></div>
					<div class="tab"><span>04</span><?= $Journey_button_4; ?></div>
				</div>

				<div class="tab-content">
					<div class="content active" data-text="<?= $Journey_text_1; ?>"><?= $Journey_text_1; ?></div>
					<div class="content" data-text="<?= $Journey_text_2; ?>"><?= $Journey_text_2; ?></div>
					<div class="content" data-text="<?= $Journey_text_3; ?>"><?= $Journey_text_3; ?></div>
					<div class="content" data-text="<?= $Journey_text_4; ?>"><?= $Journey_text_4; ?></div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ============================================== -->
<!-- TWO -->
<!-- ============================================== -->

<section>

	<div class="h-100 pin rel of-h small-h-0 letters">
		<div>
			<div class="section-arrows">
			    <button class="arrow up"></button>
			    <button class="arrow down"></button>
			</div>
			<h2 class="word_01"><?= $Letters_title_04; ?><span class="t-pretty"><?= $Letters_text_04; ?></span></h2>
			<img class="img_01" src="./images/body/letters/4.webp" alt="<?= $Letters_title_04; ?>">
		</div>
		<div>
			<h2 class="word_02"><?= $Letters_title_02; ?><span class="t-pretty"><?= $Letters_text_02; ?></span></h2>
			<img class="img_02" src="./images/body/letters/2.webp" alt="<?= $Letters_title_02; ?>">
		</div>
		<div>
			<h2 class="word_03"><?= $Letters_title_03; ?><span class="t-pretty"><?= $Letters_text_03; ?></span></h2>
			<img class="img_03" src="./images/body/letters/3.webp" alt="<?= $Letters_title_03; ?>">
		</div>
		<div>
			<h2 class="word_04 w-60 med-w-100"><?= $Letters_title_01; ?><span class="t-pretty"><?= $Letters_text_01; ?></span></h2>
			<img class="img_04" src="./images/body/letters/1.webp" alt="<?= $Letters_title_01; ?>">
		</div>
	</div>
</section>

<!-- ============================================== -->
<!-- THREE -->
<!-- ============================================== -->

<section>

	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="mw-1440 t-c h-100 med-h-0 med-fd-col g-20 jc-center ai-center rel parallax">
		<h2 class="h1-special short"><?= $Vision_text; ?></h2>
    <div class="box box_1">
      <h3 class="h3"><?= $Vision_title_01; ?></h3>
      <p><?= $Vision_text_01; ?></p>
      <svg class="glow-effect" xmlns="http://www.w3.org/2000/svg"><rect /></svg>
    </div>
    <div class="box box_2">
      <h3 class="h3"><?= $Vision_title_02; ?></h3>
      <p><?= $Vision_text_02; ?></p>
      <svg class="glow-effect" xmlns="http://www.w3.org/2000/svg"><rect /></svg>
    </div>
    <div class="box box_3">
      <h3 class="h3"><?= $Vision_title_03; ?></h3>
      <p><?= $Vision_text_03; ?></p>
      <svg class="glow-effect" xmlns="http://www.w3.org/2000/svg"><rect /></svg>
    </div>
    <div class="box box_4">
      <h3 class="h3"><?= $Vision_title_04; ?></h3>
      <p><?= $Vision_text_04; ?></p>
      <svg class="glow-effect" xmlns="http://www.w3.org/2000/svg"><rect /></svg>
    </div>
	</div>
</section>

<!-- ============================================== -->
<!-- FOUR -->
<!-- ============================================== -->

<section class="c-pri">
	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="mw-1280 t-c h-100 med-h-0 jc-center fd-col">
		<h2 class="h1 m-center mb-20" style="max-width:26ch;"><?= $Slogan_title; ?></h2>
		<p class="h4 m-center mb-40" style="max-width:48ch">“<?= $Slogan_text; ?>”</p>
    <ul class="d-flex med-fd-col med-ai-center jc-center g-20">
      <li class="licence-box c-sec p-10 med-w-100 w-30 br-10">
        <p class="h3 fw-700"><?= $Slogan_suscription_title; ?></p>
        <p><?= $Slogan_suscription; ?></p>
      </li>
      <li class="licence-box c-sec p-10 med-w-100 w-30 br-10">
        <p class="h3 fw-700"><?= $Slogan_license_title; ?></p>
        <p><?= $Slogan_license; ?></p>
      </li>
    </ul>
    <?php if($ConnectBO): ?>
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
	<div class='modal-content rel t-c'>
	<span class='v-white c-pri icon icon-close' onclick=\"closeModal('Modal{$counter}')\"></span>
	<h2 class='h2 tc-pri t-c med-t-l'>{$item[0]}</h2>
	<p>{$item[2]}</p>
	<p class='h5'>{$item[1]}</p>
	</div>
	</div>
	";
	$counter++;
}
?>

<section class="products">

	<div class="overlay of-h">

	<div class="anchor" id="suscriptions"></div>
	<div class="h-100 med-h-0 med-fd-col-rev content-scroll jc-center ai-center rel wrap_products">
  <div class="abs h-100 w-50" style="background-color:rgba(0,0,0,0.6)"></div>
	<div class="section-arrows">
	    <button class="arrow up"></button>
	    <button class="arrow down"></button>
	</div>

	<div class="box_product img-three rel flex ai-center jc-center fd-col">
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

	<!--<div class="mw-1440 t-c">
		<p class="h2"><?= $Truth_title; ?></p>
	</div>-->
	<div>
		<ul class="textos rel">
      <img src="./images/icons/body/space.svg" alt="" class="abs w-100 h-100 med-d-none" style="top:0;left:0;opacity:0.1">
      <li>
        <h2><?= $Truth_title_01; ?></h2>
				<span><img src="./images/body/truth/1.webp" alt="<?= $Truth_title_01; ?>" class="br-20"/>
					<p class="h4 t-pretty t-c">"<?= $Truth_text_01; ?>"</p>
				</span>
			</li>
			<li>
				<h2><?= $Truth_title_02; ?></h2>
				<span><img src="./images/body/truth/2.webp" alt="<?= $Truth_title_02; ?>" class="br-20"/>
					<p class="h4 t-pretty t-c">"<?= $Truth_text_02; ?>"</p>
				</span>
			</li>
			<li>
				<h2><?= $Truth_title_03; ?></h2>
				<span><img src="./images/body/truth/3.webp" alt="<?= $Truth_title_03; ?>" class="br-20"/>
					<p class="h4 t-pretty t-c">"<?= $Truth_text_03; ?>"</p>
				</span>
			</li>
			<li>
				<h2><?= $Truth_title_04; ?></h2>
				<span><img src="./images/body/truth/4.webp" alt="<?= $Truth_title_04; ?>" class="br-20"/>
					<p class="h4 t-pretty t-c">"<?= $Truth_text_04; ?>"</p>
				</span>
			</li>
      <img src="./images/icons/body/space.svg" alt="" class="abs w-100 h-100 med-d-none" style="top:0;left:0;mix-blend-mode:overlay;opacity:0.7">
		</ul>
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
    <?php if($ConnectBO): ?>
		  <a href="<?= $Register; ?>" target="_blank" class="btn big c-acc br-50 mt-40 small-mt-20"><?= $Btn_part; ?></a>
    <?php endif; ?>
	</div>
</section>

<script src="./js/webgl-distortion.js"></script>

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
                .fromTo('.word_04', animationSpeed, {opacity:0, scale:1, filter: 'blur(12px)'}, {opacity:1, scale:1, filter:'blur(0)', ease:animationLinear, immediateRender:false});

            var imgTimeline = new TimelineMax();
            imgTimeline
                .to('.img_01', animationSpeed, {y: '-100%', ease: animationLinear}, animationSpeed * 0.25)
                .to('.img_02', animationSpeed, {y: '-100%', ease: animationLinear}, animationSpeed * 2.25)
                .to('.img_03', animationSpeed, {y: '-100%', ease: animationLinear}, animationSpeed * 4);

            var master = new TimelineMax();
            master.add(textoTimeline, 0);
            master.add(imgTimeline, 0);

            new ScrollMagic.Scene({
                triggerElement: '.pin',
                duration: '300%',
                triggerHook: 0
            })
            .setPin('.pin')
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
                  { right:"62%", top:"47%", opacity:0},
                  { right:"52%", top:"50%", opacity:1, ease:animationIn })
                .fromTo('.parallax .box_2',
                  animationSpeed,
                  { left:"62%", top:"47%", opacity:0},
                  { left:"52%", top:"50%", opacity:1, ease:animationIn },
                  0)
                .fromTo('.parallax .box_3',
                  animationSpeed,
                  { right:"62%", top:"84%", opacity:0},
                  { right:"52%", top:"74%", opacity:1, ease:animationIn },
                  0)
                .fromTo('.parallax .box_4',
                  animationSpeed,
                  { left:"62%", top:"84%", opacity:0},
                  { left:"52%", top:"74%", opacity:1, ease:animationIn },
                  0);

            new ScrollMagic.Scene({
                triggerElement: '.parallax',
                duration: "50%",
                triggerHook: 0.5
            })
            .setTween(parallaxTimeline)
            //.addIndicators()
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
       TABS
    ============================================== */
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.content');

    function typeWriterEffect(element, text, speed=30){
        element.textContent='';
        let i=0;
        function type(){
            if(i<text.length){
                element.textContent += text.charAt(i);
                i++;
                setTimeout(type,speed);
            }
        }
        type();
    }

    tabs.forEach((tab,index)=>{
        tab.addEventListener('click', ()=>{
            tabs.forEach(t=>t.classList.remove('active'));
            contents.forEach(c=>c.classList.remove('active'));
            tab.classList.add('active');
            const content = contents[index];
            content.classList.add('active');
            const text = content.getAttribute('data-text') || '';
            typeWriterEffect(content,text);
        });
    });

    window.addEventListener('load', ()=>{
        const activeTab = document.querySelector('.tab.active');
        const activeContent = document.querySelector('.content.active');
        if(activeTab && activeContent){
            const text = activeContent.getAttribute('data-text') || '';
            typeWriterEffect(activeContent,text);
        }
    });

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
        rootMargin: `-90% 0px -5% 0px`
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



