<?php
/* Template Name: arrival */
?>

<?php get_header();
include "/php/functions.php";
global $post;
$postID = get_the_ID();
$headings = getHeadersFromBlocks($postID);
$paragraphs = getParagraphsFromBlocks($postID);
$content = parse_blocks($post->post_content);
  
?>
<main>
    <section class="arrival-hero">
        <div class="hero-text-general"><h1><?php echo $headings[0]['text']; ?></h1>
        <h2><?php echo $headings[1]['text']; ?></h2></div>
    </section>
    <section class="hard-facts-fourth">
        <div class="hard-facts-fourth-content">
            <h2><?php echo $headings[2]['text']; ?></h2>
            <?php echo $paragraphs[0]; ?>
            <?php echo $paragraphs[1]; ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6394.427288725513!2d13.620197179469779!3d47.63535434091935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47714ba8950ae2df%3A0x3615cd61b060e599!2sKunstmue%20Festival!5e0!3m2!1sde!2sat!4v1716211962402!5m2!1sde!2sat" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="hard-facts-fifth-container">
        <div class="hard-facts-fifth">
            <h2><?php echo $headings[3]['text']; ?></h2>
            <?php echo $paragraphs[2]; ?>
            <div class="timeline-container">
                <div class="desktop anreiseart">
                    <h3>
                        <?php echo $headings[4]['text']; ?>
                    </h3>
                    <h3>
                        <?php echo $headings[5]['text']; ?>
                    </h3>
                    <h3>
                        <?php echo $headings[6]['text']; ?>
                    </h3>
                </div>
                <div class="anreiseding">
                    <img class="anreisegrafik" src="<?php echo get_template_directory_uri(); ?>/images/anreise-ding.svg" alt="Anreise">
                </div>
                <div class="anreisebeschreibung">
                    <div>
                        <h2 class="mobile"><?php echo $headings[4]['text']; ?></h2>
                        <?php echo $paragraphs[3]; ?>
                    </div>
                    <div>
                        <h2 class="mobile"><?php echo $headings[5]['text']; ?></h2>
                        <?php echo $paragraphs[4]; ?>
                    </div>
                    <div>
                        <h2 class="mobile"><?php echo $headings[6]['text']; ?></h2>
                        <?php echo $paragraphs[5]; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="facts-parking">
        <div class="facts-parking-container">
            <h2><?php echo $headings[7]['text']; ?></h2>
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
        <h2><?php echo $headings[5]['text']; ?></h2>
        <?php echo $paragraphs[6]; ?>       
        </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Leit-Traun.jpg" alt="Traun">
        </div>
        </div>

    </section>
</main>


<?php get_footer(); ?>

</body>

</html>