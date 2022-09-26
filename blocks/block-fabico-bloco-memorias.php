<div class="row bloco-container">
  <div class="col-12 col-lg-10" id="memorias">
    <div class="row box-sombra mt-3 p-5">
      <div class="col-12 col-lg-6">
        <a href="<?php block_field("url-de-acesso") ?>" target="_blank">
          <h3><?php block_field("titulo") ?></h3>
          <h4><?php block_field("subtitulo") ?></h4>
        </a>
        <p class="text-justify"><?php block_field("descricao") ?></p>
      </div>
      <div class="col-12 col-lg-6 d-flex flex-column align-items-center justify-content-around">
        <img src="<?php block_field("imagem") ?>" alt=" <?php block_field("acessibilidade") ?>">
        <a href="<?php block_field("url-de-acesso") ?>" class="btn-fabico" target="_blank">Acessar</a>
      </div>
    </div>
  </div>
</div>