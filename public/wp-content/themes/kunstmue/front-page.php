
  
  <?php get_header(); ?>
  <main>
    <section class="hero dark">
        <h1>SAFE THE DATE
          <br>
          24. - 25. JULI 2026
        </h1>
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

         <h2 class="position-center">Booking Phase geöffnet:
            <br>
            <span class="white">15. Oktober - 15. Dezember 2025</span></h2>
      <a class="btn" href="mailto:booking@kunstmue.com">Jetzt bewerben</a> 

        <div class="hero-fp-text">
        <p>Das Kunstmue Festival ist ein Treffpunkt für Musikliebhaber, Kulturschaffende und Freigeister. Was einst als Geheimtipp begann, ist längst zu einem fixen Bestandteil der Kulturszene im Salzkammergut geworden.</p>
        <p>Elf Bands verschiedenster Genres sorgen für ein abwechslungsreiches Line-up und echte Festivalvibes. Kulinarisch wird man durch regionale Gastronomen sowie das Kaffee- & Kuchenbuffet bestens versorgt. Samstags steht der traditionelle Frühschoppen mit örtlichen Volksmusikanten auf dem Programm, während sich die Kleinen auf ein buntes Kinderprogramm in Kooperation mit der Freiwilligen Feuerwehr Bad Goisern freuen dürfen.</p>  
      </div>
<?php
  $query = new WP_Query( array( 'pagename' => 'FACTS' ) );
?>
        <a class="btn" href="<?php echo get_permalink( $query->post ); ?>">Mehr dazu</a>
      </div>
    </section>
    <section class="below">
    
    <h2 class="white">DAS WAR DAS KUNSTMUE FESTIVAL 2024</h2>
      <div class="video-container">
        <iframe src="https://www.youtube.com/embed/Fh5mBoz6Yic?si=aWMGWTzE-s_fu_sN" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"></iframe>
      </div>

    </section>

  </main>

  <?php get_footer(); ?>

</body>
</html>