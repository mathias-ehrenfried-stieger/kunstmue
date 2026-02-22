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
                <h2><?php echo $headings[7]['text']; ?></h2>
                <?php echo $paragraphs[0]; ?>
                <?php echo $paragraphs[1]; ?>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/eingang.jpg"" alt=" Freier Eintritt">
        </div>
    </section>
    <section class="hard-facts-second">
        <div class="hard-facts-second-teaser">
            <h2><?php echo $headings[8]['text']; ?></h2>
            <?php echo $paragraphs[2]; ?>
            <?php echo $paragraphs[3]; ?>
        </div>
        <div class="hard-facts-second-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/camping.jpg" alt="Camping">
            <div class="hard-facts-second-text">
                <h2><?php echo $headings[9]['text']; ?></h2>
                <a href="mailto:kunstmueverein@gmail.com?subject=Reservierung Caravanplatz" class="btn">Jetzt Caravanplatz sichern!</a>

                <?php echo $paragraphs[4]; ?>
                <ul>
                    <li>Name</li>
                    <li>Anzahl der Personen</li>
                    <li>Größe der Fahrzeuge</li>
                </ul>
                <?php echo $paragraphs[5]; ?>
                <?php echo $paragraphs[6]; ?>
            </div>
        </div>
    </section>
    <section class="hard-facts-third">
        <img class="plan" src="<?php echo get_template_directory_uri(); ?>/images/gelaendeplan.jpg" alt="Geländeplan">
        <a class="btn" href="<?php echo get_template_directory_uri(); ?>/images/gelaendeplan.jpg" download>Download Geländeplan</a>

    </section>

    <section class="facts-foodcorner">
        <div class="facts-foodcorner-container">
            <h2><?php echo $headings[10]['text']; ?></h2>
            <img class="speis" src="<?php echo get_template_directory_uri(); ?>/images/dspeis.jpg" alt="Parkinglot">
            <?php echo $paragraphs[7]; ?>
        </div>
    </section>
    <section class="frühschoppen">
        <div class="centered">
            <div class="row-70 centered">
                <div class="frühschoppen-text">
                    <h2><?php echo $headings[11]['text']; ?></h2>
                    <?php echo $paragraphs[8]; ?>
                </div>
                <img class="img-frühschoppen" src="<?php echo get_template_directory_uri(); ?>/images/frühschoppen.JPG" alt=" Freier Eintritt">
            </div>

        </div>
    </section>
    <section class="facts-kinderprogramm">
        <div class="facts-kinderprogramm-container">
            <img class="img-kinderprogramm" src="<?php echo get_template_directory_uri(); ?>/images/Kinderprogram.jpg"" alt=" Freier Eintritt">
            <div class="facts-kinderprogramm-text">
                <h2><?php echo $headings[12]['text']; ?></h2>
                <?php echo $paragraphs[9]; ?>
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
        <h2><?php echo $headings[13]['text']; ?></h2>
        <?php echo $paragraphs[10]; ?>
       </div>
        <img class="merch" src="<?php echo get_template_directory_uri(); ?>/images/merch.jpg" alt="Merch">
    </div>
    </section>
</main>


<?php get_footer(); ?>

</body>

</html>