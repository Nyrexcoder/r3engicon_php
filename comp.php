<?php  include "header.php";    ?>

 <!-- Page Header Start -->
 <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Compliances</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="">Compliances</a>
                        </div>
                    </div>
                </div>
            </div>
 <!-- Page Header End -->


 <div class="mx-auto mt-4 mb-4" style="width: auto;">
    <div class="container">
      <div class="row row-cols-auto mb-2">
        <button class="active btn" id="all">Show All</button>
        <button class="btn btnStyle" id="a">Annual Report</button>
        <button class="btn btnStyle" id="b">Directors Return</button>
        <button class="btn btnStyle" id="c">Contact Details</button>
      </div>
    </div>
    <hr style="width: 90%; margin: auto;">
  </div>


  
<section>
  <div class="container mb-2">
    <div class="d-grid gap-3 target_box">
      <div id="parent">
      <div class="box a"  id="show-hidden-menu"  class="p-2 bg-light border"><a class="showResult">Annual Report</a></div>
      <div class="hidden-menu" style="display: none;">
        <ul>
          <li class="pdfLink"><a  href="Pdf/Auditors report  Balance Sheet (1).pdf" target="_blank">Auditors Report (Current Year)</a></li>
          <!-- <li>List item 2</li>
          <li>List item 3</li> -->
        </ul>
      </div>

      <div class="box b" id="show2-hidden2-menu2" class="p-2 bg-light border"><a class="showResult">Directors Report</a></div>
      <div class="hidden-menu2" style="display: none;">
        <ul>
          <li class="pdfLink"><a  href="Pdf/Directors Report 2020-21.pdf" target="_blank">Directors Report</a></li>
          <!-- <li>List item 2</li>
          <li>List item 3</li> -->
        </ul>
      </div>

      <div class="box c" class="p-2 bg-light border"><a class="showResult">Contact Details</a></div>
    </div>
  </div>
  </div> 
</div>
</section>




<?php  include "footer.php";   ?>


<script>
     var $btns = $('.btn').click(function() {
  if (this.id == 'all') {
    $('#parent > div').fadeIn(450);
  } else {
    var $el = $('.' + this.id).fadeIn(450);
    $('#parent > div').not($el).hide();
  }
  $btns.removeClass('active');
  $(this).addClass('active');
})

$(document).ready(function() {
  $('#show-hidden-menu').click(function() {
    $('.hidden-menu').slideToggle("slow");
    // Alternative animation for example
    // slideToggle("fast");
  });
});

$(document).ready(function() {
  $('#show2-hidden2-menu2').click(function() {
    $('.hidden-menu2').slideToggle("slow");
    // Alternative animation for example
    // slideToggle("fast");
  });
});
  </script>