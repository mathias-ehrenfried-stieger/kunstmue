<?php 
/* Template Name: line-up */
?>

<?php get_header();

include "/php/functions.php";
global $post;
$postID = get_the_ID();
$headings = getHeadersFromBlocks($postID);
$paragraphs = getParagraphsFromBlocks($postID);
$content = parse_blocks($post->post_content);
 ?>

  <main id="line-up">
  <section class="line-up-hero">
    <div class = "hero-text-general">
    <h1><?php echo $headings[0]['text']; ?></h1>
    <h2><?php echo $headings[1]['text']; ?></h2>
    </div>
    </section>
    <section class="line-up-container dark">
        <div>
        <div class="line-up-content">
        <img class="plan desktop" src="<?php echo get_template_directory_uri(); ?>/images/bands-2026-desktop.jpg" alt="Line Up">   

        <img class="plan mobile" src="<?php echo get_template_directory_uri(); ?>/images/bands-2026-mobile.jpg" alt="Line Up"> 
        <!--<a class="btn" href="<?php echo get_template_directory_uri(); ?>/images/time-table-desktop.jpg" download>Download Time-Table</a> -->
        </div> 
        </div>
      </section>
  <section class = "section__normal pd-16-tb">
      <h2><?php echo $headings[2]['text']; ?></h2>
      <div class="container__basic">
          <h3><?php echo $headings[3]['text']; ?></h3>
           <?php echo $paragraphs[0]; ?>
           <?php echo $paragraphs[1]; ?>
           <?php echo $paragraphs[2]; ?>
          <h3><?php echo $headings[4]['text']; ?></h3>
           <?php echo $paragraphs[3]; ?>
           <?php echo $paragraphs[4]; ?>
           <?php echo $paragraphs[5]; ?>
           <?php echo $paragraphs[6]; ?>
           <?php echo $paragraphs[7]; ?>
          <h3><?php echo $headings[5]['text']; ?></h3>

           <?php echo $paragraphs[8]; ?>
           <?php echo $paragraphs[9]; ?>
          <ul class="hover-none">
                <li>Kaffee & Kuchenbuffet</li>
                <li>Kesselheisse mit diversen Würstel und Gebäck</li>
                <li>Eierspeis</li>
                <li> frisches Gebäck von Kurtis Cafe & Bäckerei</li>
                <li>diverse vegane und vegetarische Aufstriche</li>
          </ul>
           <?php echo $paragraphs[10]; ?>
           <?php echo $paragraphs[11]; ?>
          <ul class="hover-none">
              <li>Nostalgiespritze</li>
              <li>Kinderschminken</li>
              <li>Farbschleuder – T-Shirts bedrucken</li>
              <li>Verschiedene Spiele: Malbilder, Luftballons uvm.</li>
          </ul>
      </div>
  </section>
<!--  <section class="section__normal">-->
<!--            <div class="img-big">-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/images/baden.jpg" alt="Baden">-->
<!--            </div>-->
<!--  </section>-->
  </main>
 

  <?php get_footer(); ?>

</body>
</html>