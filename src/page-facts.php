<?php
/* Template Name: facts */
?>

<?php
get_header();

include "/php/functions.php";
global $post;
$postID = get_the_ID();
$headings = getHeadersFromBlocks($postID);
$paragraphs = getParagraphsFromBlocks($postID);
$content = parse_blocks($post->post_content);
?>
<main>
    <section class="fact-hero">
        <div class="hero-fact-container">
        <h1><?php echo $headings[0]['text']; ?></h1>
        <div class="hero-fact-text">
            <div>
                <p><?php echo $headings[1]['text']; ?></p>
                <p><?php echo $headings[2]['text']; ?></p>
            </div>
            <div>
                <p><?php echo $headings[3]['text']; ?></p>
                <p><?php echo $headings[4]['text']; ?></p>
            </div>
            <div>
                <p><?php echo $headings[5]['text']; ?></p>
                <p><?php echo $headings[6]['text']; ?></p>
            </div>
        </div>
        </div>
    </section>
    <section class="hard-facts-first">
        <div class="hard-facts-first-container">
            <div class="hard-facts-first-text">
                <h2>FREIER EINTRITT</h2>
                <p>Das Kunstmue Festival bleibt weiterhin kostenfrei und wird vollständig von freiwilligen Helfern organisiert. Alle Einnahmen aus dem Verkauf von Getränken und Merchandise fließen in die Finanzierung des nächsten Festivals. Wir begrüßen jedoch gerne freiwillige Spenden am Eingang.</p>
                <p><span class="bold">Wichtiger Hinweis:</span> Aus Gründen des Jugendschutzes werden am Eingang für die Besucher je nach Alter verschiedenfärbige Armbänder ausgegeben. Das Mitbringen von Getränken auf das Festivalgelände ist nicht gestattet, ausgenommen ist der Campingbereich.</p>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/eingang.jpg"" alt=" Freier Eintritt">
        </div>
    </section>
    <section class="hard-facts-second">
        <div class="hard-facts-second-teaser">
            <h2>GRATIS CAMPING</h2>
            <p><span class="bold">Camping am Kunstmue Festival ist gratis.</span> Die Campingmöglichkeiten sind nicht weit vom Eingangsbereich. Die schattigen Zeltplätze findet ihr in einem kleinen Waldstück neben der erfrischenden Traun (Bademöglichkeit!). Außerdem stehen kostenlose Caravanplätze zur Verfügung.</p>
            <p><span class="bold">Wichtiger Hinweis:</span> Bitte beachtet, dass absolutes Feuerverbot herrscht!</p>
        </div>
        <div class="hard-facts-second-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/camping.jpg" alt="Camping">
            <div class="hard-facts-second-text">
                <h2>GRATIS CARAVAN</h2>
                <a href="mailto:kunstmueverein@gmail.com?subject=Reservierung Caravanplatz" class="btn">Jetzt Caravanplatz sichern!</a>

                <p>Sende eine Email mit folgenden Infos an: kunstmueverein@gmail.com</p>
                <ul>
                    <li>Name</li>
                    <li>Anzahl der Personen</li>
                    <li>Größe der Fahrzeuge</li>
                </ul>
                <p><span class="bold">Anmeldung vor Ort:</span> Anreise ist ab 14:00 Uhr möglich. Bitte kommt bei Ankunft zum Eingang, hier könnt ihr den Meldezettel ausfüllen und ihr bekommt kostenfreie Müllsäcke, welche ihr nach dem Festival wieder abgeben könnt. Camping beim Kunstmue Festival ist Ortstaxen befreit.</p>

                <p>Sollte ein angemeldeter Platz doch nicht in Anspruch genommen werden, bitten wir um eine kurze Abmeldung.</p>
            </div>
        </div>
    </section>
    <section class="hard-facts-third">
        <img class="plan" src="<?php echo get_template_directory_uri(); ?>/images/gelaendeplan.jpg" alt="Geländeplan">
        <a class="btn" href="<?php echo get_template_directory_uri(); ?>/images/gelaendeplan.jpg" download>Download Geländeplan</a>

    </section>

    <section class="facts-foodcorner">
        <div class="facts-foodcorner-container">
            <h2>FOODCORNER DER D´SPEIS</h2>
            <img class="speis" src="<?php echo get_template_directory_uri(); ?>/images/dspeis.jpg" alt="Parkinglot">
            <p>In unserem Foodcorner erwarten euch die köstlichen Spezialitäten von d’Speis aus St. Wolfgang! Sandro, Koch aus Leidenschaft, und seine Crew verwöhnen euch mit frischen, regionalen und ausgewählten Bio-Produkten. Ob saftiges Qualitätsfleisch aus der Region, kreative vegetarische Highlights oder vegane Leckerbissen – die Speisekarte bietet für jeden Geschmack etwas.
            </p>
        </div>
    </section>
    <section class="frühschoppen">
        <div class="centered">
            <div class="row-70 centered">
                <div class="frühschoppen-text">
                    <h2>FRÜHSCHOPPEN</h2>
                    <p>Am Samstag geht’s urig los: Mit dampfender Kesselheiße und den goiserer Volksmusikanten kommt Bierzeltstimmung auf!
                        Hier ist jeder eingeladen, sich beim gemeinsamen Musizieren einzubringen.
                        Und wenn die Truppe dann auch noch durch den Campingplatz marschiert, ist es vorbei mit der Ruhe – die Camper werden als erstes geweckt!</p>
                </div>
                <img class="img-frühschoppen" src="<?php echo get_template_directory_uri(); ?>/images/frühschoppen.JPG" alt=" Freier Eintritt">
            </div>

        </div>
    </section>
    <section class="facts-kinderprogramm">
        <div class="facts-kinderprogramm-container">
            <img class="img-kinderprogramm" src="<?php echo get_template_directory_uri(); ?>/images/Kinderprogram.jpg"" alt=" Freier Eintritt">
            <div class="facts-kinderprogramm-text">
                <h2>KINDERPROGRAMM</h2>
                <p>Das Kunstmue ist ein Festival für die ganze Familie. Für die Kleinen bieten wir ein umfangreiches Kinderprogramm ab 14:00 Uhr in Kooperation mit der Freiwilligen Feuerwehr Bad Goisern:</p>
                <ul>
                    <li>Nostalgiespritze</li>
                    <li>Kinderschminken</li>
                    <li>Farbschleuder- T-Shirts bedrucken</li>
                    <li>Verschiedene Spiele: Malbilder, Luftballons uvm.</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="centered">
    <div class="row-70 centered">
       <div>
        <h2>Merch</h2>
        <p>
            Deine Erinnerung vom Kunstmue Festival!
            Besucht unseren Merchandise-Stand direkt am Festivalgelände und sichert euch exklusive Produkte, die es nur hier gibt! Limitiertes Angebot, also schlagt schnell zu! Zusätzlich findet ihr coole Merch-Artikel von den Bands – perfekt, um eure Festival-Erinnerungen festzuhalten. Holt euch das Jubiläums-T-Shirt, Hoodies, Lenyards und viele weitere tolle Sachen!
        </p>
       </div>
        <img class="merch" src="<?php echo get_template_directory_uri(); ?>/images/merch.jpg" alt="Merch">
    </div>
    </section>
</main>


<?php get_footer(); ?>

</body>

</html>