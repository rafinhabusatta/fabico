<div class="row bloco-container">
  <div class="col-12 col-lg-10">
    <button
    class="accordion"
    data-toggle="collapse"
    href="#<?php block_field("accordion-id") ?>"
    role="button" 
    aria-expanded="false"
    aria-controls="<?php block_field("accordion-id") ?>"
    id="<?php block_field("accordion-id") ?>-btn"
    onClick="toggleAccordion(<?php block_field("accordion-id") ?>)"
    >
    <?php block_field("titulo") ?>
    </button>
    <div class="collapse" id=<?php block_field("accordion-id") ?>>
      <div class="card card-body">
        <?php block_field("conteudo") ?>
      </div>
    </div>
  </div>
</div>
