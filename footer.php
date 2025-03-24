<footer class="section__container footer__container">
      <span class="bg__blur"></span>
      <span class="bg__blur footer__blur"></span>
      <div class="footer__col">
        <div class="footer__logo"><img src="assets/logo.png" alt="logo" /></div>
        <?php
        $api_url = 'https://zenquotes.io/api/quotes';

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
            exit;
        }

        curl_close($ch);

        $quotes = json_decode($response, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            die('Eroare la parsarea datelor JSON');
        }

        $random_quote = $quotes[array_rand($quotes)];
        ?>
       <p>
                "<?= htmlspecialchars($random_quote['q']) ?>"
                - <?= htmlspecialchars($random_quote['a']) ?>
        </p>
        <div class="footer__socials">
          <a href="#"><i class="ri-facebook-fill"></i></a>
          <a href="#"><i class="ri-instagram-line"></i></a>
          <a href="#"><i class="ri-twitter-fill"></i></a>
        </div>
      </div>
    </footer>
    <div class="footer__bar">
      Maeschi Stefan-Andrei. Proiect DAW
    </div>
  </body>
</html>