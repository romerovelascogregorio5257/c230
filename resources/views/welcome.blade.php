
@extends('layouts.app')

@section('content')

<div class="hero-home">
  <div class="hero-box-title fadeInLeft animated animation">
    <h1 class="fs1 mb2 mt3">
      <span class="ff3 fc3-bg">Diseñamos y ejecutamos estrategias que generan valor </span>
      <span class="fc4-tb ff4">para la sociedad.</span>
    </h1>
  </div>
  <div class="hero-box-des fadeInLeft animated animation">
    <p class="fc3-bg ff5 fs2">Somos una firma de consultoría especializada en políticas públicas con amplia experiencia en México y América Latina.</p>
  </div>
  <div class="hero-box-btn fadeInLeft animated animation">
    <a href="#" class="cta-btn ff6 fc3-bg fs3">Quiénes somos</a>
  </div>
</div>
<hr class="hr-orange">

<div class="home-section-one">
  <div class="home-text-section fadeInRight animated animation">
    <h2 class="ff5 fc4-tb fs4 mb2">Grupo C230 Consultores</h2>
    <p class="ff5 fc5-cs fs2">Donec porta ligula eget venenatis tempus. Nulla diam tellus, ullamcorper id arcu et, mattis congue sapien. Cras libero mauris, iaculis faucibus velit a, dignissim ornare risus. Aliquam non sapien sit amet turpis faucibus aliquam. Ut eu enim nec urna malesuada feugiat in nec nunc. In at nunc eros. Nunc ut fringilla augue.</p>
    <a href="#" class="cta-btn-dos fc6-nibb ff6 fs3">Qué hacemos</a>
  </div>
</div>

<div class="home-section-two">
  <div class="section-two-item fadeInLeft animated animation">
    <img src="icons/material_bolt.png" width="30px">
    <p class="fc6-nibb fs3 ff1">30 países</p>
    <p class="fc5-cs ff6 fs5">Nunc porta erat ut lectus posuere molestie. Vestibulum risus ligula, rhoncus eleifend rhoncus efficitur nec elit.</p>
  </div>
  <div class="section-two-item fadeInLeft animated animation">
    <img src="icons/material_approval.png" width="30px">
    <p class="fc6-nibb fs3 ff1">30 países</p>
    <p class="fc5-cs ff6 fs5">Nunc porta erat ut lectus posuere molestie. Vestibulum risus ligula, rhoncus eleifend rhoncus efficitur nec elit.</p>
  </div>
  <div class="section-two-item fadeInRight animated animation">
    <img src="icons/material_support.png" width="30px">
    <p class="fc6-nibb fs3 ff1">200 proyectos</p>
    <p class="fc5-cs ff6 fs5">Nunc porta erat ut lectus posuere molestie. Vestibulum risus ligula, rhoncus eleifend rhoncus efficitur nec elit.</p>
  </div>
  <div class="section-two-item fadeInRight animated animation">
    <img src="icons/palette.png" width="30px">
    <p class="fc6-nibb fs3 ff1">100 organizaciones</p>
    <p class="fc5-cs ff6 fs5">Nunc porta erat ut lectus posuere molestie. Vestibulum risus ligula, rhoncus eleifend rhoncus efficitur nec elit.</p>
  </div>
</div>

<div class="home-section-three">
  <h2 class="ff5 fc4-tb fs4 mb2 fadeInDown animated animation">Proyectos destacados</h2>
  <div class="content-cards">
    <div class="card-project fadeInRight animated animation">
      <img src="images/6.jpg" class="img-card-project">
      <p  class="fs3 ff5 fc7-cpt mb2 mt2">Ciudades del futuro</p>
      <hr class="hr-card fc6-nibb">
      <p class="ff6 fs5 fc5-cs">Nunc porta erat ut lectus posuere molestie. Vestibulum risus ligula, rhoncus eleifend rhoncus sed, malesuada id metus. Aenean lorem nibh, varius fermentum viverra vel, efficitur nec elit.</p>
    </div>
    <div class="card-project fadeInRight animated animation">
      <img src="images/7.png" class="img-card-project">
      <p class="fs3 ff5 fc7-cpt mb2 mt2">Transformational Change Learning Partnership</p>
      <hr class="hr-card fc6-nibb">
      <p class="ff6 fs5 fc5-cs">Nunc porta erat ut lectus posuere molestie. Vestibulum risus ligula, rhoncus eleifend rhoncus sed, malesuada id metus. Aenean lorem nibh, varius fermentum viverra vel, efficitur nec elit.</p>
    </div>
    <div class="card-project fadeInRight animated animation">
      <img src="images/5.png" class="img-card-project">
      <p class="fs3 ff5 fc7-cpt mb2 mt2">Implementación de la Herramienta de Diagnóstico de las decisiones estratégicas del Ministerio Público</p>
      <hr class="hr-card fc6-nibb">
      <p class="ff6 fs5 fc5-cs">Nunc porta erat ut lectus posuere molestie. Vestibulum risus ligula, rhoncus eleifend rhoncus sed, malesuada id metus. Aenean lorem nibh, varius fermentum viverra vel, efficitur nec elit.</p>
    </div>
    <div class="card-project fadeInRight animated animation">
      <img src="images/8.png" class="img-card-project">
      <p class="fs3 ff5 fc7-cpt mb2 mt2">Lorem ipsum</p>
      <hr class="hr-card fc6-nibb">
      <p class="ff6 fs5 fc5-cs">Nunc porta erat ut lectus posuere molestie. Vestibulum risus ligula, rhoncus eleifend rhoncus sed, malesuada id metus. Aenean lorem nibh, varius fermentum viverra vel, efficitur nec elit.</p>
    </div>
  </div>
</div>

<div class="home-section-four">
  <div class="content-four fadeInLeft animated animation" style="padding: 0 4%;">
    <h2 class="ff5 fc3-bg fs4 mb0">Estamos constantemente en búsqueda de talento.</h2>
  </div>
  <div class="content-four fadeInRight animated animation" style="padding: 4% 4%;">
    <p class="fc3-bg ff6 mf1 fs5">Si estas interesado en ingresar a C230 Consultores, revisa nuestras vacantes:</p>
    <a href="#" class="cta-btn-vacantes ff6 fc3-bg fs3"> Vacantes</a>
  </div>
</div>
<hr class="hr-orange">

@endsection
