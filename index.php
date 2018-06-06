<!DOCTYPE html>

<?php
	session_start();
	$modalLoadScript = '<script type="text/javascript">
					 $(window).on("load",function(){
					 $("#myModal").modal("show");
					});
					</script>';
					
	$contactLoadScript = '<script">showContactFormOnLink();</script>';
	$contactScript = '<script>$(window).on("load", function() {	
	$(".hide-show").hide(500)
	$(".form-row").show()
});</script>';
if(isset($_SESSION['emailinfo']))
{
	$bootstrapModal = '
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Komunikat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ' .$_SESSION['emailinfo'] .'
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-brown" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>';
}
?>


<html lang="pl">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Drewno kominkowe</title>

	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="script/animations.js"></script>
	<script src="script/contact.js"></script>

	<link rel="shortcut icon" href="content/fireplace.png" >
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>
  
<div class="loader"></div>
 <?php
		if(isset($_SESSION['emailinfo']))
			{
				echo $modalLoadScript;
				echo $bootstrapModal;
				unset($_SESSION['emailinfo']);
			}

		if(isset($_GET['kontakt']))
			{
				echo $contactLoadScript;
				echo $contactScript;
			}
?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Drewno kominkowe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Strona główna
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="offer.php">Oferta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.php">Galeria</a>
            </li>
            <li class="nav-item">
              <p class="nav-link contact" onmouseover="this.style.cursor='pointer';">Kontakt</p>
            </li>
			
          </ul>
        </div>
      </div>
    </nav>
	
    <header>
      <div id="carouselExampleIndicators" class="carousel slide animation-fade-in fade-in-on-load" data-ride="carousel">
		<div class="fixed-header">
			<h1>Drewno kominkowe</h1>
			<h2>Dąbrowa Górnicza</h2>
			 
			
		<button  onclick="location.href='offer.php';" type="button" class="btn-header" onmouseover="this.style.cursor='pointer';"><p class="btn-text">SPRAWDŹ OFERTĘ</p></button>
			
		</div>
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active" style="background-image: url('content/header1.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Jakość</h3>
              <p>Drewno opałowe dostarczane przez naszą firmę charakteryzuje wysoka jakość</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('content/header2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Doświadczenie</h3>
              <p>Nasza firma posiada wieloletnie doświadczenie w sprzedaży i przygotowaniu drewna opałowego</p>
            </div>
          </div>
          <div class="carousel-item" style="background-image: url('content/header3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Cena</h3>
              <p>Oferujemy drewno w konkurencyjnej cenie oraz dobry stosunek cen do jakości</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

     <div class="container">
<hr>

      <div class="row slide animation-fade-in description">
        <div class="col-sm-8 hide-show">
          <h2 class="mt-4 top-header">Krótko o nas</h2>
		   <img class ="icon" src="content/network.png"/>
		   <br><br><br><br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deserunt neque tempore recusandae animi soluta quasi? Asperiores rem dolore eaque vel, porro, soluta unde debitis aliquam laboriosam. Repellat explicabo, maiores!</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis optio neque consectetur consequatur magni in nisi, natus beatae quidem quam odit commodi ducimus totam eum, alias, adipisci nesciunt voluptate. Voluptatum.</p>
          
            <p class="btn btn-primary btn-lg btn-brown contact" href="#">Skontaktuj się z nami</p>
          
        </div>
        <div class="col-sm-4 hide-show">
		
          <h2 class="mt-4 top-header">Kontakt</h2>
		  <img class ="icon" src="content/phone.png"/>
		  <br><br><br><br>
          <address>
            <strong>Adres linia 1</strong>
            <br>123 Adres linia 2
            <br>Miejscowość 49-123
            <br>
          </address>
          <address>
            <abbr title="Phone">P:</abbr>
            123-456-789
			<br>
            <abbr title="Email">E:</abbr>
            <a href="mailto:#">adres@email.pl</a>
          </address>
        </div>
      </div>

	<h2 class="form-row scrollTo">Wyślij nam wiadomość</h2>
	
<div class="form-row row slide animation-fade-in">
		<div class="col-sm-12">	
	  
<form id="contact-form" method="post" action="contact.php" role="form">

    <div class="messages"></div>

    <div class="controls">

        <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_name">Nazwisko*</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Proszę wpisać swoje imię *" required="required" data-error="To pole jest wymagane.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
			
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_email">Email *</label>
                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Proszę wpisać swój adres email *" required="required" data-error="To pole jest wymagane.">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_phone">Telefon</label>
                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Proszę wpisać swój nr telefonu">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Treść wiadomości*</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Twoja wiadomość*" rows="4" required="required" data-error="To pole jest wymagane."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" name="submit" class="btn btn-success btn-send btn-brown" value="Wyślij">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <p class="text-muted"><strong>*</strong>Te pola są wymagane</p>
            </div>
			<div class="col-md-7">
				<p class="return-home" onmouseover="this.style.cursor='pointer';">Powrót do strony głównej</p>
			</div>
        </div>
    </div>
		</div>
		</div>
</form>
	  <hr/>
      <div class="row slide animation-fade-in ">
        <div class="col-sm-4 my-4 hide-show">
          <div class="card">
            <img class="card-img-top" src="content/foto1.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Tytuł 1</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary btn-brown" data-toggle="modal" data-target="#modal1">Więcej...</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4 hide-show">
          <div class="card">
            <img class="card-img-top" src="content/foto1.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Tytuł 2</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary btn-brown" data-toggle="modal" data-target="#modal2">Więcej...</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4 my-4 hide-show">
          <div class="card">
            <img class="card-img-top" src="content/foto1.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Tytuł 3 </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary btn-brown" data-toggle="modal" data-target="#modal3">Więcej...</a>
            </div>
          </div>
        </div>

<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tytuł 1</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, vel ad zril propriae, atqui consul ornatus sea an, at vitae albucius mei. Enim ridens aliquid ut vis, brute dolorem adversarium ea sit. Noster impetus corrumpit ut cum, vix ad labore conceptam. Vim idque velit utroque ei. Nam at tritani iudicabit, no tale error has. Vel quodsi perfecto evertitur ad, justo elitr nostro ne pri.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tytuł 2</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lorem ipsum dolor sit amet, vel ad zril propriae, atqui consul ornatus sea an, at vitae albucius mei. Enim ridens aliquid ut vis, brute dolorem adversarium ea sit. Noster impetus corrumpit ut cum, vix ad labore conceptam. Vim idque velit utroque ei. Nam at tritani iudicabit, no tale error has. Vel quodsi perfecto evertitur ad, justo elitr nostro ne pri.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>		
		
		<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tytuł 3</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Lorem ipsum dolor sit amet, vel ad zril propriae, atqui consul ornatus sea an, at vitae albucius mei. Enim ridens aliquid ut vis, brute dolorem adversarium ea sit. Noster impetus corrumpit ut cum, vix ad labore conceptam. Vim idque velit utroque ei. Nam at tritani iudicabit, no tale error has. Vel quodsi perfecto evertitur ad, justo elitr nostro ne pri.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>
		
      </div>       
	  <hr class="hide-show" />
	  <div class="row slide animation-fade-in ">
		<div class="col-sm-12 hide-show">
		<h2 class="mt-4 top-header">Nasza lokalizacja</h2>
		<img class ="icon" src="content/map.png"/>
		<br><br><br><br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d163008.21078764653!2d19.08208671806221!3d50.32918980239293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716dc1279cdfc03%3A0xed1b2cecf3834175!2zQWxlamEgWmEgUmVtaXrEhSwgRMSFYnJvd2EgR8Ozcm5pY3ph!5e0!3m2!1spl!2spl!4v1525720149695" height="450" frameborder="0" style="border:1px solid grey; width: 100%;" allowfullscreen></iframe>
	<br>
	<hr class="hide-show" />
	</div>
		</div>
	
	  
	  <div class="row animation-fade-in ">
		<div class="col-xs-12 hide-show">
		<br><br>
		</div>
	  </div>
	  </div>
	  <footer class="py-5 footer-brown animation-fade-in">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; DREWNO BARTKA 2018</p>
		<p class="m-0 text-center text-white">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a> </p>
		<p class="m-0 text-center text-white">Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></p>
	
		
      </div>
    </footer>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
