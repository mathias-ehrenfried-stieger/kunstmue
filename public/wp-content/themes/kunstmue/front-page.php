
  
  <?php get_header(); ?>
  <main>
    <section class="hero dark">
      <div class="centered">
      
      </div>
    </section>
    <section class = "intro">
      <div class="front-page-container">
        <h2>Willkommen beim Kunstmue Festival Bad Goisern!</h2>
        <p>Auch heuer rocken wieder zahlreiche Bands verschiedenster Genres die Festival Bühne, zudem dürft ihr
euch wieder auf das Frühschoppen mit unseren örtlichen Volksmusikanten, 
ein buntes Kinderprogramm, köstliche regionale Speisen 
– inklusive vegetarischer und veganer Optionen – und einzigartige Festivalvibes freuen!
Bleibt dran für weitere Updates und seid gespannt auf das, was euch 2025 erwartet!</p>
<?php
  $query = new WP_Query( array( 'pagename' => 'FACTS' ) );
?>
        <a class="btn" href="<?php echo get_permalink( $query->post ); ?>">Mehr über uns</a>
      </div>
    </section>
    <section class="below">
      <h1>DAS WAR DAS KUNSTMUE FESTIVAL 2024</h1>
      <div class="video-container">
        <iframe src="https://www.youtube.com/embed/Fh5mBoz6Yic?si=aWMGWTzE-s_fu_sN" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"></iframe>
      </div>

    </section>

  </main>

  <?php get_footer(); ?>

</body>
</html>