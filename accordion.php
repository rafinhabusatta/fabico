<!-- Template name: teste-accordion -->

<?php get_header(); ?>

<div class="row mt-5">
  <div class="col-12">
    <button
      class="accordion"
      data-toggle="collapse"
      href="#accordion-1"
      role="button" 
      aria-expanded="false"
      aria-controls="accordion-1"
      id="accordion-1-btn"
      onClick="toggleAccordion(1)"
    >
      Este é um accordion
    </button>
    <div class="collapse" id="accordion-1">
      <div class="card card-body">
        Some placeholder content for the collapse component. This panel is hidden by
        default but revealed when the user activates the relevant trigger.
      </div>
    </div>

    <h2>Galeria de Equipes</h2>
    <div class="row equipe justify-content-around bloco-container">
      <div class="col-12">
        <h2 class="text-center mb-4">Equipe</h2>
      </div>
      <div class="col-12">
        <h3 class="font-weight-bold text-uppercase equipe-nomes mb-3">Nome Equipe</h3>
      </div>
      <div class="col-12 col-md-5 col-lg-4 mb-4">
        <div class="b-left box-equipe">
          <h3 class="font-weight-bold">
            Nome
          </h3>
          <p class="mb-3">
            Cargo
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
