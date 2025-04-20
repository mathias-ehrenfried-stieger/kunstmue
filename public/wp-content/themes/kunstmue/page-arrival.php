<?php
/* Template Name: arrival */
?>

<?php get_header(); ?>
<main>
    <section class="arrival-hero">
        <h1>KUNSTMUE FESTIVAL BAD GOISERN<br>
            FREE AKTERNATIVE MUSIC FESTIVAL</h1>
    </section>
    <section class="hard-facts-fourth">
        <div class="hard-facts-fourth-content">
            <h2>ANFAHRT</h2>
            <p>Das Kunstmue Festival findet im malerischen Herzen des Salzkammerguts statt. Eingebettet in eine atemberaubende Bergkulisse und entlang des Traunflusses, der an warmen Tagen für erfrischende Abkühlung sorgt, bietet dieser Veranstaltungsort ein einzigartiges Festivalerlebnis.</p>
            <p>Adresse: Gschwandt 115, 4822 Bad Goisern am Hallstättersee</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6394.427288725513!2d13.620197179469779!3d47.63535434091935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47714ba8950ae2df%3A0x3615cd61b060e599!2sKunstmue%20Festival!5e0!3m2!1sde!2sat!4v1716211962402!5m2!1sde!2sat" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="hard-facts-fifth-container">
        <div class="hard-facts-fifth">
            <h2>ANREISE</h2>
            <p>Das Kunstmue Festival Gelände kann gut mit den öffentlichen Verkehrsmitteln erreicht werden. Wir bitten um eine umweltschonende Anreise:</p>
            <div class="timeline-container">
                <div class="desktop anreiseart">
                    <h3>
                        ZUG
                    </h3>
                    <h3>
                        BUS
                    </h3>
                    <h3>
                        AUTO
                    </h3>
                </div>
                <div class="anreiseding">
                    <img class="anreisegrafik" src="<?php echo get_template_directory_uri(); ?>/images/anreise-ding.svg" alt="Anreise">
                </div>
                <div class="anreisebeschreibung">
                    <div>
                        <h2 class="mobile">ZUG</h2>
                        <p>
                            Aussteigen in Bhf. Bad Goisern. Vom Bahnhofsplatz aus bei der Straßengabelung die rechte Straße entlang bis zur Brücke über den Mühlbach, unmittelbar danach rechts. Etwa 250 bis 300 Meter geradeaus, dann rechts, über die Goiserer Brücke, nach der Brücke gleich links. Ca. 300 bis 400 Meter geradeaus, bis auf der linken Seite die Kunstmühle auftaucht.
                        </p>
                    </div>
                    <div>
                        <h2 class="mobile">BUS</h2>
                        <p>
                            Haltestelle: Bad Goisern Mitte / B145. Von der Bushaltestelle Richtung Bad Goisern Zentrum und von dort links halten. Weiter bis zur evangelischen Kirche, vorbei bis zur Goiserer Brücke (über die Traun), nach der Brücke gleich links, Ca. 300 bis 400 Meter geradeaus, bis auf der linken Seite die Kunstmühle auftaucht. Der Weg zum Festival ist ab der Ortseinfahrt beschildert.
                        </p>
                    </div>
                    <div>
                        <h2 class="mobile">AUTO</h2>
                        <p>
                            Anfahrt über B 145, Ortseinfahrt Bad Goisern Mitte (Kreisverkehr beim Hofer Supermarkt), ins Zentrum bis zur großen Kreuzung. Dort geradeaus, an der evangelischen Kirche vorbei bis zur Goiserer Brücke (über die Traun), nach der Brücke gleich links, Ca. 300 bis 400 Meter geradeaus, bis auf der linken Seite die Kunstmühle auftaucht. Der Weg zum Festival ist ab der Ortseinfahrt beschildert. Begrenzte Parkmöglichkeiten gibt es am Straßenrand der Hinlaufstraße.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="facts-parking">
        <div class="facts-parking-container">
            <h2>PARKMÖGLICHKEITEN</h2>
            <img class="park-plan" src="<?php echo get_template_directory_uri(); ?>/images/parking.png" alt="Parkinglot">
        </div>

    </section>

    <?php
    $query = new WP_Query( array( 'pagename' => 'FACTS' ) );
    ?>
    <section class="centered">
        <div class="container__basic__center pd5">
        <div class="row-80">
        <div class="col__basic">
        <h2>Gratis Caravan & Camping</h2>
        <p>Es gibt genügend Zeltplätze in einem kleinen Waldstück neben der Traun. Außerdem stehen kostenlose Caravanplätze zur Verfügung.
            Weitere Infos unter <a  href="<?php echo get_permalink( $query->post ); ?>">FACTS!</a><p>
                <a href="mailto:kunstmueverein@gmail.com?subject=Reservierung Caravanplatz" class="btn">Jetzt Caravanplatz sichern!</a>

        </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Leit-Traun.jpg" alt="Traun">
        </div>
        </div>

    </section>
</main>


<?php get_footer(); ?>

</body>

</html>