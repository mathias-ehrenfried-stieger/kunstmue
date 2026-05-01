<?php 
/* Template Name: partner */
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
  <section class="partner-hero">
    <div class="partner-hero-text">
    <h1><?php echo $headings[0]['text'];?> </h1>
    <h2><?php echo $headings[1]['text'];?></h2>
    <?php echo $paragraphs[0]; ?>
    </div>
  </section>
  <section class="partner-logo">
    <div class="partner-logo-container">

      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/KUPF-Logo2018.svg" alt="logos">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/rockantenne.png" alt="logos">

      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/Feuerwehr.JPG" alt="logos">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/goisern.jpg" alt="logos">
  
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/dachstein.png" alt="logos">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/pomberger.jpg" alt="logos">
      
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/zebau.jpg" alt="logos">

      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/traudi.png" alt="logos">

      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/eddi.png" alt="logos">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/CG.jpg" alt="logos">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logos/s82.png" alt="logos">

  </div>
  </section>
  </main>
 

  <?php get_footer(); ?>

</body>
</html>