<!-- alberthflorer -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Caso de Estudio</title>
    <?php include 'view/head.php';?>
  </head>
  <body>
  	<?php include("view/header.html");?>
   	<section style="padding-top:90px;">
     <?php include("view/sliderPortada.html");?>
   	</section>
    <section style="background-color: #dbe1f2">
      <div class="mui-container">
        <div class="mui-row" style="margin-top: 35px; margin-bottom: 20px;">
          <div class="mui-col-md-6 mui-col-lg-6">
            <div class="mui-container">
              <img src="img/fondo.jpg" alt="img-articulo" width="550" height="475" class="img-articulo">
            </div>
          </div>
          <div id="nosotros" class="mui-col-md-6 mui-col-lg-6" >
            <div class="mui-container">
                <h2><span>REQUISITOS</span></h2>
                <br>
                <div class="mui-container">
                  <p class="p-texto">
                  El procedimiento deben hacerlo de manera personal en las oficinas de la DUBS, ubicada en los módulos, lado del Comedor. Los requisitos son los siguientes:
                </p>
                <p class="p-texto" style="padding-left: 25px; line-height: 30px;">
                    Formulario de solicitud: FORM: DUBS 002 (Solicitado en la fotocopiadora de Sociología).<br>
                    Fotocopia de boleta de inscripción.<br>
                    Fotocopia de histórico académico.<br>
                    Fotocopia de cédula de identidad.<br>
                    Fotocopia de certificado de nacimiento.<br>
                    Fotocopia de factura de agua o luz (si vive en alquiler o anticrético: recibo de alquiler o fotocopia del contrato anticrético).<br>
                    Carta dirigida al Director de la DUBS.<br>
                    Presentar la documentación en un folder amarillo.                
                  </p>
                </div>
            </div>
          </div>
        </div>
          
      </div>
    </section>
    <section style="background-color: #fafafa">
    <div class="mui-row" style="margin-left:0;margin-right:0 ">
        <div class="mui-container" style="margin-top: 25px; margin-bottom: 20px;">
          <div id="contactenos" class="mui-col-md-6 mui-col-lg-6"  style="background: #fafafa; height: auto;">
            <div class="mui-container">
              <div style="width: 80%;margin: auto">
                <form class="mui-form">
                    <h2><span>CONTACTENOS</span></h2>
                    <div class="mui-col-lg-12">
                      <div class="mui-textfield mui-textfield--float-label">
                        <input type="text">
                        <label>Nombres</label>
                      </div>
                    </div>
                    <div class="mui-col-lg-6">
                      <div class="mui-textfield mui-textfield--float-label">
                        <input type="text">
                        <label>Registro</label>
                      </div>
                    </div>
                    <div class="mui-col-md-6 mui-col-lg-6">
                      <div class="mui-textfield mui-textfield--float-label">
                        <input type="text">
                        <label>Carrera</label>
                      </div>
                    </div>
                    <div class="mui-col-md-6 mui-col-lg-6">
                      <div class="mui-textfield mui-textfield--float-label">
                        <input type="text">
                        <label>Celular</label>
                      </div>
                    </div>
                    <div class="mui-col-md-6 mui-col-lg-6">
                      <div class="mui-textfield mui-textfield--float-label">
                        <input type="email">
                        <label>Email</label>
                      </div>
                    </div>
                    <div class="mui-col-md-12 mui-col-lg-12">
                      <div class="mui-textfield mui-textfield--float-label">
                        <textarea></textarea>
                        <label>Consulta</label>
                      </div>
                    </div>
                    <div class="mui-col-md-12 mui-col-lg-12">
                      <input type="button" class="mui-btn mui-btn--raised" value="Enviar"/>
                    </div>
                </form>
              </div>
            </div>
          </div>
          <div class="mui-col-md-6 mui-col-lg-6"  style="background: #fafafa; height: 450px;">
              <div id="map" style="width:100%;height:100%; border:solid black 1px;"></div>
              <script>

    function myMap() {
        var myCenter = new google.maps.LatLng(-17.338763, -63.269827);
        var mapCanvas = document.getElementById("map");
        var mapOptions = { center: myCenter, zoom: 17 };
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({ position: myCenter, icon: 'img/puntero.png' });
        marker.setMap(map);
        infowindow.open(map, marker);
    }
</script>
                  
                  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk25qMd0LfYaD1psOjgTpiaHaOGcCChso&callback=myMap"></script>
          </div>
        </div>
    </div> 
    </section>
    <section style="background-image: url('img/comedor1.jpg'); background-size: cover; background-position: center;">
      <div class="mui-container">
        <div  class="div-circulo" >
          <div class="mui-row" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
            <div >
              <h3 style="color: white">NUESTRA HISTORIA</h3>
              
            </div>
            <div style="margin: 20px 45px 20px 45px">
              <p style="text-align: center;">
                Desde los inicios de la Universidad en Montero, los Franciscanos Conventuales con el impulso de Padre Peregrino se fueron concretizando pasos para que fuera una realidad, ayudados por los residentes bolivianos en Suiza se concretizo la FINOR (Universidad de Norte)...
              </p>
            </div>
            <div>
              <a href="nosotros.php">
                <button class="mui-btn mui-btn--raised">conoce mas</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
  <footer class="">
  			<?php include("view/footer.html");?>
  </footer>
</html>
