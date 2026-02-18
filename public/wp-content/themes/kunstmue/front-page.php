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
    <section class="hero dark">
        <h1><?php echo $headings[0]['text']; ?></h1>
    </section>
    <section class = "intro dark">

        <div class="hero-fp-header">
            <div>
                <h2><?php echo $headings[1]['text']; ?></h2>
            </div>
            <div>
                <h2><?php echo $headings[2]['text']; ?></h2>
            </div>
            <div>
                <h2><?php echo $headings[3]['text']; ?></h2>
            </div>
        </div>

        <div class="hero-fp-text">
          <?php echo $paragraphs[0]; ?>
          <?php echo $paragraphs[1]; ?>
        </div>
<?php
  $query = new WP_Query( array( 'pagename' => 'FACTS' ) );
?>
        <a class="btn" href="<?php echo get_permalink( $query->post ); ?>">Mehr dazu</a>
      </div>
    </section>
    <section class="below">
    
    <h2 class="white"><?php echo $headings[4]['text']; ?></h2>
      <div class="video-container">
        <iframe src="https://www.youtube.com/embed/8vhV0w_7fXk?si=S-k4Pi0KvRKeYC50" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"></iframe>
      </div>

    </section>

  </main>

  <?php get_footer(); ?>

</body>
</html>