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
      <!-- <div class="col-12">
        <h2 class="text-center mb-4">Equipe</h2>
      </div> -->
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
      <div class="col-12 col-md-5 col-lg-4 mb-4">
        <div class=" box-equipe orange">
          <h3 class="font-weight-bold">
            Nome
          </h3>
          <p class="mb-3">
            Cargo
          </p>
        </div>
      </div>
    </div>

    <!-- TEAM SLIDER -->
    <div class="row bloco-container">
      <div class="col-12 col-lg-10" id="galeria">
        <h3>Galeria de Equipes</h3>
        <div id="carousel-galeria" class="carousel slide" data-ride="carousel" data-interval="false">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row equipe">



                <div class="col-12 col-md-5 col-lg-4 mb-4">  
                  <div class=" box-equipe orange">
                    <h3 class="font-weight-bold">
                      Nome 1
                    </h3>
                    <p class="mb-3">
                      Cargo 1
                    </p>
                  </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4 mb-4">
                  <div class=" box-equipe orange">
                    <h3 class="font-weight-bold">
                      Nome 2
                    </h3>
                    <p class="mb-3">
                      Cargo 2
                    </p>
                  </div>
                </div>

                <div class="col-12 col-md-5 col-lg-4 mb-4">
                  <div class=" box-equipe orange">
                    <h3 class="font-weight-bold">
                      Nome 3
                    </h3>
                    <p class="mb-3">
                      Cargo 3
                    </p>
                  </div>
                </div> 

              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-12 col-md-5 col-lg-4 mb-4">
                  <div class=" box-equipe orange">
                    <h3 class="font-weight-bold">
                      Nome 4
                    </h3>
                    <p class="mb-3">
                      Cargo 1
                    </p>
                  </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4 mb-4">
                  <div class=" box-equipe orange">
                    <h3 class="font-weight-bold">
                      Nome 5
                    </h3>
                    <p class="mb-3">
                      Cargo 2
                    </p>
                  </div>
                </div>
                <div class="col-12 col-md-5 col-lg-4 mb-4">
                  <div class=" box-equipe orange">
                    <h3 class="font-weight-bold">
                      Nome 6
                    </h3>
                    <p class="mb-3">
                      Cargo 3
                    </p>
                  </div>
                </div>   
              </div>
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-target="#carousel-galeria" data-slide="prev">
            <span class="styled-prev-icon carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carousel-galeria" data-slide="next">
            <span class="styled-next-icon carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </button>
        </div>         
      </div>
    </div>



  </div>
</div>

<?php
get_footer();
