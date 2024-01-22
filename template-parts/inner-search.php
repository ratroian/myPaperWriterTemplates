<?php
add_filter('wp_trim_words', 'highlight_results');
add_filter('the_excerpt', 'highlight_results');
add_filter('the_title', 'highlight_results');
?>

<div class="inner-search">
  <div class="container">
    <div class="search-content">
      <h1 class="search-title search-title--second">Read our sample essays and get inspired for your own academic work
      </h1>
      <div class="search-search">
        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
      </div>
    </div>
  </div>
  <svg id="search-bg--left" class="search-bg search-bg--left" width="380" height="540" viewBox="0 0 380 540" fill="none"
    xmlns="http://www.w3.org/2000/svg">
    <mask id="mask0_1002_898" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="-100" y="89" width="467"
      height="449">
      <path d="M-100 89H367V538H-100V89Z" fill="#FFFDF3" />
    </mask>
    <g class="search-bg__item up-right circle" mask="url(#mask0_1002_898)">
      <path
        d="M138 535C257.846 535 355 437.846 355 318C355 198.154 257.846 101 138 101C18.1542 101 -79 198.154 -79 318C-79 437.846 18.1542 535 138 535Z"
        fill="#F4BABF" />
    </g>
    <path class="search-bg__item up-right" d="M330 85H380V135H330V85Z" fill="#F4ECA8" />
    <g id="triangle" class="search-bg__item move-right">
      <path d="M268.641 118.193L257 129.387V107L268.641 118.193V118.193Z" fill="#757072" />
      <path d="M268.641 162.069L257 173.262V150.875L268.641 162.069V162.069Z" fill="#757072" />
      <path d="M268.641 206.846L257 218.039V195.652L268.641 206.846V206.846Z" fill="#757072" />
      <path d="M268.641 250.725L257 261.918V239.531L268.641 250.725V250.725Z" fill="#757072" />
      <path d="M291.032 140.576L279.391 151.769V129.383L291.032 140.576Z" fill="#757072" />
      <path d="M291.028 185.353L279.387 196.547V174.16L291.028 185.353Z" fill="#757072" />
      <path d="M291.028 229.229L279.387 240.422V218.036L291.028 229.229Z" fill="#757072" />
      <path d="M313.414 162.971L301.773 174.164V151.777L313.414 162.971Z" fill="#757072" />
      <path d="M313.414 206.846L301.773 218.039V195.652L313.414 206.846Z" fill="#757072" />
      <path d="M335.801 185.353L324.16 196.547V174.16L335.801 185.353Z" fill="#757072" />
    </g>
  </svg>


  <svg id="search-bg--right" class="search-bg search-bg--right" width="444" height="316" viewBox="0 0 444 316"
    fill="none" xmlns="http://www.w3.org/2000/svg">
    <path class="search-bg__item up-right" d="M248 93L248 274L67 274L67 93L248 93Z" fill="#F4ECA8" />
    <g id="lines">
      <path class="search-bg__item--right move-left"
        d="M163.48 212.022L0.000621319 212.022L0.0006215 205.182L163.48 205.182L163.48 212.022Z" fill="#757072" />
      <path class="search-bg__item--right move-left"
        d="M163.48 186.526L0.000621319 186.526L0.000620962 179.686L163.48 179.686L163.48 186.526Z" fill="#757072" />
      <path class="search-bg__item--right move-left"
        d="M163.48 161.035L0.000621319 161.035L0.000620961 154.195L163.48 154.195L163.48 161.035Z" fill="#757072" />
    </g>
  </svg>



</div>
</div>
</div>