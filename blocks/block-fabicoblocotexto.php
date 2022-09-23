<div class="row bloco-container">
  <div class="col-12" id="memorias">
    <div class="row box-sombra mt-3 p-5">
      <div class="col-12 col-lg-6">

        <h3><?php block_field("titulo") ?></h3>
        <h4><?php block_field("subtitulo") ?></h4>

        <p class="text-justify"><?php block_field("descricao") ?></p>
      </div>
      <div class="col-12 col-lg-6 d-flex flex-column align-items-center justify-content-around">
        <img src="<?php block_field("imagem") ?>" alt=" <?php block_field("acessibilidade") ?>">
        <?php if (!empty(block_field("url-de-acesso"))) { ?>
          <a href="<?php block_field("url-de-acesso") ?>" class="btn-fabico" target="_blank">Acessar</a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>