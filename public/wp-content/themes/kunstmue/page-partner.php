<?php 
/* Template Name: partner */
?>

<?php get_header();
include "/php/functions.php";
global $post;
$postID = get_the_ID();
$headings = getHeadersFromBlocks($postID);
$paragraphs = getParagraphsFromBlocks($postID);
$images = getImageFromBlocks($postID);
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

      <?php foreach ($images as $image) : ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?: 'logos'); ?>">
      <?php endforeach; ?>

  </div>
  </section>
  </main>
 

  <?php get_footer(); ?>

</body>
</html>