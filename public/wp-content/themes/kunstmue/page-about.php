<?php 
/* Template Name: about */
?>

  <?php get_header();
  include '/php/functions.php';
  global $post;
  $postID = get_the_ID();
  $headings = getHeadersFromBlocks($postID);
  $paragraphs = getParagraphsFromBlocks($postID);
  $content = parse_blocks($post->post_content);
  $images = getImageFromBlocks($postID);
  $imageSrc = wp_get_attachment_image( $images[0]['id'], 'large' );
  foreach($paragraphs as $para)
  {
    echo "sick para action new: " . $para . "\n\n";
    echo "escaped html" . esc_html($para). "\n\n";
  }

  ?>
  <main>
    <section class="about-hero">
        <div class="hero-text-general"><h1><?php echo $headings[0]['text']; ?></h1>
        <h2><?php echo $headings[1]['text']; ?></h2></div>
    </section>
      <section class="section__normal">
        <div class="front-page-container">
            <h2><?php echo $headings[2]['text']; ?></h2>
            <p><?php echo $paragraphs[0]; ?></p>
            <p><?php echo $paragraphs[1]; ?></p>
            <p><?php echo $paragraphs[2]; ?></p>
            <p><?php echo $paragraphs[3]; ?></p>
            <p><?php echo $paragraphs[4]; ?></p>
            <div class="img-big">
                <img src="<?php echo get_template_directory_uri(); ?>/images/early-image.jpg" alt="Kunstmue Festival">
            </div>
        </div>

      </section>
      <section class="section__normal dark">
        <div class="front-page-container">
            <h2><?php echo $headings[3]['text']; ?></h2>
            <p><?php echo $paragraphs[5]; ?></p>
            <p><?php echo $paragraphs[6]; ?></p>
            <p><?php echo $paragraphs[7]; ?></p>
            <p><?php echo $paragraphs[8]; ?></p>

        </div>

      </section>
  </main>
 

  <?php get_footer(); ?>

</body>
</html>