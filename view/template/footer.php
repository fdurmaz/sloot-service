</div>
<footer class="container-fluid bg-dark text-white text-center" style="border-top: 4px solid #ffae00;">
    <div class="row py-5">
        <div class="col-md-4">
            <h3 class="title color-yellow">Contact</h3>
            <p class="font-weight-light mx-auto footer-text">
                Heeft u een pianostemmer nodig?
                Of gaat u binnenkort uw piano of
                vleugel verhuizen? Wij kunnen u helpen.
            </p>

            <ul class="list-unstyled">
                <li>Telefoon - Eric Sloot: <a href="tel:0622187427" class="color-yellow">06-22187427</a></li>
                <li>Telefoon - Rutger Sloot: <a href="tel:0629052155" class="color-yellow">06-29052155</a></li>
                <li>E-mailadres - <a href="mailto:info@slootpianoservice.nl" class="color-yellow">info@slootpianoservice.nl</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3 class="title color-yellow">Diensten</h3>
            <ul class="list-unstyled">
                <li><a href="pianos">Piano's</a></li>
                <li><a href="vleugels">Vleugels</a></li>
                <li><a href="stemmen">Stemmen</a></li>
                <li><a href="transport">Transport</a></li>
                <li><a href="huren">Verhuur</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3 class="title color-yellow">Links</h3>
            <ul class="list-unstyled">
                <li><a href="home">Home</a></li>
                <li><a href="over-ons">Over ons</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <div class="d-xs-block d-md-none">
                <a href="#"> <span><i class="fab fa-instagram socialmedia my-2"></i></span></a>
                <a href="#"> <span><i class="fab fa-facebook-square socialmedia my-2 "></i></span></a>
            </div>
        </div>
    </div>
    </div>
    <div class="row pb-5">
        <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4916.464776417673!2d6.304544!3d51.966188!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c784c38fa44161%3A0xea733e0bb49a8aa6!2sVarsseveldseweg%20130B%2C%207003%20AA%20Doetinchem!5e0!3m2!1snl!2snl!4v1571643491051!5m2!1snl!2snl" class="w-100" style="height: 300px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</footer>
<script type="text/javascript">
    (function() {
        var burger = document.querySelector('.burger');
        var nav = document.querySelector('#' + burger.dataset.target);

        burger.addEventListener('click', function() {
            burger.classList.toggle('is-active');
            nav.classList.toggle('is-active');
        });
    })();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php
if ($_SERVER['HTTP_HOST'] == "www.slootpianoservice.nl") {
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148376106-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-148376106-1');
    </script>

<?php
    // OOK NOG Cookiemelidng toevoegen
} else {
    echo "<!-- GOOGLE ANALYTICS tijdelijk uitgezet -->\n";
}
?>

</body>

</html>