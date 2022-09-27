<div class="row bloco-container">
  <div class="col-12 col-lg-10">
    <button
    class="accordion"
    data-toggle="collapse"
    href="#accordion-<?php block_field("id") ?>"
    role="button" 
    aria-expanded="false"
    aria-controls="accordion-<?php block_field("id") ?>"
    id="accordion-<?php block_field("id") ?>-btn"
    onClick="toggleAccordion(<?php block_field("id") ?>)"
    >
    <?php block_field("titulo") ?>
    </button>
    <div class="collapse" id="accordion-<?php block_field("id") ?>">
      <div class="card card-body">
        