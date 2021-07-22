<!--  ============================================  FOOTER ====================================-->

    <footer id="Footer" class="clearfix">
        <div class="widgets_wrapper" style="padding:40px 0;">
            <div class="container">
                <div class="column one-fourth">
                    <aside class="widget widget_text">
                        <div class="textwidget">
                            <div class="image_frame image_item no_link scale-with-grid alignnone no_border">
                                <div class="image_wrapper"><img class="scale-with-grid" src="content/lawyer3/images/retina-repizoabogados1.png" alt="home_lawyer2_footer_logo" width="150" height="65" />
                                </div>
                            </div>
                            <hr class="no_line" style="margin: 0 auto 20px;" />
                            <h5>Profesionales a su servicio.</h5>
                            <p>
                                Expertos en contratacion estatal.
                            </p>
                        </div>
                    </aside>
                </div>
                <div class="column one-fourth">
                    <aside class="widget widget_text">
                        <h3>La Empresa</h3>
                        <div class="textwidget">
                        <h7><i class="icon-right-circled" style="color: #c40e0e;"></i>Carrera 16 No. 41 - 72 Of-408 
                            <br><i class="icon-right-circled" style="color: #c40e0e;"></i>Centro Empresarial Juan Plaza.
                            <br><i class="icon-right-circled" style="color: #c40e0e;"></i>Neiva-Huila-Colombia
                        </h7>
                            
                        </div>
                    </aside>
                </div>
                <div class="column one-fourth">
                    <aside class="widget widget_text">
                        <h4>Abogados</h4>
                        <div class="textwidget">
                            <ul style="line-height: 32px;">
                                <li>
                                    <i class="icon-right-circled" style="color: #c40e0e;"></i><a href="losabogados.php#hectorRepizo">HECTOR REPIZO RAMIREZ</a>
                                </li>
                                <li>
                                    <i class="icon-right-circled" style="color: #c40e0e;"></i><a href="losabogados.php#luisQuesada">LUIS ALFREDO QUESADA </a>
                                </li>
                                <li>
                                    <i class="icon-right-circled" style="color: #c40e0e;"></i><a href="losabogados.php#karlaDuenas">KARLA GISETT DUEÑAS </a>
                                </li>
                                <li>
                                    <i class="icon-right-circled" style="color: #c40e0e;"></i><a href="losabogados.php#luisGutierrez">LUIS EDUARDO GUTIÉRREZ </a>
                                </li>
                                <li>
                                    <i class="icon-right-circled" style="color: #c40e0e;"></i><a href="losabogados.php#mariaRodriguez">MARIA ALEJANDRA RODRIGUEZ </a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div class="column one-fourth">
                    <aside class="widget widget_text">
                        <h4>Contacto</h4>
                        <div class="textwidget">
                            <ul style="line-height: 32px;">
                                <li>
                                    <i class="icon-right-circled" style="color: #c40e0e;"></i> Email:  
                                    <br/> 
                                    <a href="mailto:hectorrepizo1977@gmail.com" style="text-decoration: underline;" >hectorrepizo1977@gmail.com</a>
                                    <br/> 
                                    <a href="mailto:alfredo.quesada.garcia@hotmail.com" style="text-decoration: underline;" >alfredo.quesada.garcia@hotmail.com</a>
                                </li>
                                <li>
                                    <i class="icon-right-circled" style="color: #c40e0e;"></i> Celular: 
                                    <br/>
                                    <a href="tel:+573203060653" style="text-decoration: underline;" >320 3060653</a>
                                    <br/>
                                    <a href="tel:+573103087636" style="text-decoration: underline;" >310 3087636</a> 
                                </li>
                                <li>
                                    <i class="icon-right-circled" style="color: #c40e0e;"></i> Telefax:
                                    <br/>
                                     <a href="tel:+5786668866" style="text-decoration: underline;"  >86668866</a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <div class="footer_copy">
            <div class="container">
                <div class="column one">
                    <a id="back_to_top" class="button button_left button_js" href="#"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                    <div class="copyright">
                        &copy; 2021 REPIZO ABOGADOS  by <a target="_blank" rel="nofollow" href="#">DavidCastillo.co</a>
                    </div>
                    <ul class="social"></ul>
                </div>
            </div>
        </div>
    </footer>

<img src="images/agendeconnosotros.png"  onclick="myModal()" class="fixedbutton"  id="fixedbutton" width="120" height="120">
<a href="https://wa.me/+573203060653">
    <img src="images/whatsapp.png" style="left: auto !important; padding-right:15px !important; position: fixed; bottom: 10px; right: 5px; z-index: 10000; margin: 0; padding: 0; border: 0; font-size: 100%; font: inherit;vertical-align: baseline;" id="fixedbutton" width="100" height="100">
</a>

<!-- The MODAL CALENDLY -->
<div id="myModal" class="modal">
  <!-- The Close Button -->
  <span class="close">&times;</span>
  <!-- Modal Content (The Image) -->
  <div class="modal-content" id="img01">
    <div class="slideshow-container">
      <!-- SLIDES -->
      <!-- Principio del widget integrado de Calendly -->
    <div class="calendly-inline-widget" data-url="https://calendly.com/citaconrepizoabogados/15min" style="min-width:320px;height:630px;"></div>
    <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
    <!-- Final del widget integrado de Calendly -->
      <!-- Next and previous buttons -->
    </div>
  </div>
</div>
<!-- END OF MODAL -->








<script>
// Get the modal
var modal = document.getElementById("myModal");
// Get the image and insert it inside the modal - use its "alt" text as a caption
function myModal(){
  modal.style.display = "block";
  console.log("test");
}
// Get the <span> element that closes the modal
var span = document.getElementById("myModal");
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}





</script>


      <!--  ============================================  FOOTER ====================================-->
