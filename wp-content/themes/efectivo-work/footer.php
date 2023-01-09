<?php
/**
 * ===============================
 * FOOTER.PHP - footer
 * ===============================
 *
 * @package EFECTIVO
 * @since 1.0.0
 * @version 1.0.0
 */
?>

<!-- BUTTONS -->
<?php 
// get_template_part( 'template-parts/partial', 'footer-buttons' ); 
?>

<footer id="contact" class="footer">
    <?php 
        get_template_part( 'template-parts/partial', 'footer-col' );
    ?> 
</footer><!-- /#footer -->

</div>


<?php wp_footer(); ?>
<script>

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function goBack() {
    window.history.back();
}

AOS.init({
    once: true,
    disable: 'mobile',
    duration: 1000,
});

var vid = document.getElementById("Video");
var element = document.getElementById("aplaVideo");
var play = document.getElementById("play"); 
var stop = document.getElementById("stop");  

function playVid() { 
  vid.play();
  element.classList.add("show");
  play.classList.add("off");
  play.classList.remove("on");
  stop.classList.add("on");
  stop.classList.remove("off");
} 

function pauseVid() { 
  vid.pause(); 
  play.classList.add("on");
  play.classList.remove("off");
  stop.classList.add("off");
  stop.classList.remove("on");
} 







</script>
</body>
</html>