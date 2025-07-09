
  
  <?php get_header(); ?>
  <main>
    <section class="hero dark">
    </section>
    <section class = "intro dark">

        <div class="hero-fp-header">
            <div>
                <h2>
                    2 TAGE
                </h2>
                <h2>
                    11 BANDS
                </h2>
            </div>
            <div>
                <h2>
                    FREIER
                </h2>
                <h2>
                    EINTRITT
                </h2>
            </div>
            <div>
                <h2>
                    GRATIS
                </h2>
                <h2>
                    CAMPING
              </h2>
            </div>
        </div>
        <div class="hero-fp-text">
        <p>Auch heuer rocken wieder zahlreiche Bands verschiedenster Genres die Festival Bühne, zudem dürft ihr euch wieder auf das Frühschoppen mit unseren örtlichen Volksmusikanten, ein buntes Kinderprogramm, köstliche regionale Speisen – inklusive vegetarischer und veganer Optionen – und einzigartige Festivalvibes freuen! Bleibt dran für weitere Updates und seid gespannt auf das, was euch 2025 erwartet!</p>
        </div>
<?php
  $query = new WP_Query( array( 'pagename' => 'FACTS' ) );
?>
        <a class="btn" href="<?php echo get_permalink( $query->post ); ?>">Mehr dazu</a>
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