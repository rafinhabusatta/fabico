<!-- Template name: teste-accordion -->

<?php

get_header();
?>

<div class="col-3"></div>
<div class="col-9">
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
  Link with href
</button>
<div class="collapse" id="accordion-1">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by
    default but revealed when the user activates the relevant trigger.
  </div>
</div>
</div>
<?php
//get_sidebar();
get_footer();
