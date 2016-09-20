<!--<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l4 s12">
                <img src="images/logo2.png" id="logofooter" />
                <h5 class="white-text" id="PJ">Point Jardin</h5>
                <p class="grey-text text-lighten-4">
                    <i class="small material-icons" id="icnfooter">room</i>
                    <p> 54 route Nationale 12
                        <br> 28380 Saint-Rémy-sur-Avre</p>
                    <i class="small material-icons" id="icnfooter">phone</i>
                    <p class="phone" id="icnfooter">02.37.63.50.22</p>
                    <i class="small material-icons" id="icnfooter">mail</i>
                    <p class="phone"><a href="mailto:info@point-jardin.fr" id="icnfooter">info@point-jardin.fr</a></p>-->
                    <!-- Modal Structure -->
            <!--<div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Votre message a bien été envoyé</h4>
                    <p>Nous vous répondrons dans les plus brefs délais.</p>
                    <p class="abientot">A bientôt sur <a href="http://www.point-jardin.fr/">Point Jardin</a></p>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
                </div>
            </div>
            </div>
            <div class="col l4 s12">
                <h5 class="white-text">Horaires</h5>
                <div class="horaires">
                    <ul>
                        <li>Du lundi au vendredi : 8h/12h - 13h30/18h</li>
                        <li>Le samedi : 9h/17h30 non stop</li>
                        <li>Le dimanche : Ouverture exceptionnelle indiquée en page Accueil.</li>
                    </ul>
                </div>
            </div>
            <div class="col l4 s12" id="fbplugin">
                <div class="fb-page" data-href="https://www.facebook.com/pointjardin" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                    <blockquote cite="https://www.facebook.com/pointjardin" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pointjardin">Point Jardin</a></blockquote>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                
            </div>
        </div>
    </div>
</footer>-->

<!--Import jQuery before materialize.js-->
<!--APPEL SCRIPT JQUERY-->
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/parallax.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>


<!-- Appel du script facebook -->
<div id="fb-root"></div>
<!--<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.7&appId=236776263018908";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>-->

<script type="text/javascript">
// create the back to top button
$('body').prepend('<a href="#" class="back-to-top">Back to Top</a>');

var amountScrolled = 300;

$(window).scroll(function() {
	if ( $(window).scrollTop() > amountScrolled ) {
		$('a.back-to-top').fadeIn('slow');
	} else {
		$('a.back-to-top').fadeOut('slow');
	}
});

$('a.back-to-top, a.simple-back-to-top').click(function() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
});
</script>

<!--<script>
    $(".button-collapse").sideNav();
</script>-->

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <SCRIPT>$(document).ready(function(){
      $('.parallax').parallax();
    });</SCRIPT>
    
<script>
$(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });</script>


</body>

</html>