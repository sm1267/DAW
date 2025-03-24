<?php 
    include_once 'header.php';
?>

    <header class="section__container header__container">
      <div class="header__content">
        <span class="bg__blur"></span>
        <span class="bg__blur header__blur"></span>
        <h1><span>ATINGE-ȚI</span> POTENȚIALUL</h1>
        <p>
            Bine ai venit la GYM DAW, o sală de fitness modernă și prietenoasă, dedicată celor care doresc să-și transforme stilul de viață într-un mod sănătos și activ! 
            Indiferent dacă ești începător sau sportiv experimentat, GYM DAW este locul perfect pentru a-ți atinge obiectivele de fitness.
        </p>
        <?php
        if(!isset($_SESSION["userid"])) {
          echo"<a href='auth.php' class='btn'>Începe Acum</a>";
        }
        ?>
      </div>
      <div class="header__image">
        <img src="assets/header3.png" alt="header" />
      </div>
    </header>

    <section class="section__container explore__container">
      <div class="explore__header">
        <h2 class="section__header">EXPLORAȚI PROGRAMELE NOASTRE </h2>
        
      </div>
      <div class="explore__grid">
        <div class="explore__card">
          <span><i class="ri-boxing-fill"></i></span>
          <h4>Start Fresh (începători)</h4>
          <p>
          Dezvoltarea forței de bază, îmbunătățirea rezistenței și formarea unui obicei sănătos.
          </p>
          <?php
          if(!isset($_SESSION["userid"])) {
            echo"<a href='auth.php'>Join Now <i class='ri-arrow-right-line'></i></a>";
          }
          ?>
        </div>
        <div class="explore__card">
          <span><i class="ri-heart-pulse-fill"></i></span>
          <h4>Body Sculpt</h4>
          <p>
          Creat pentru cei care doresc să tonifieze și să-și sculpteze corpul.
          </p>
          <?php
          if(!isset($_SESSION["userid"])) {
            echo"<a href='auth.php'>Join Now <i class='ri-arrow-right-line'></i></a>";
          }
          ?>
        </div>
        <div class="explore__card">
          <span><i class="ri-run-line"></i></span>
          <h4>Power Boost</h4>
          <p>
          Perfect pentru cei care doresc să își îmbunătățească forța fizică și performanța.
          </p>
          <?php
          if(!isset($_SESSION["userid"])) {
            echo"<a href='auth.php'>Join Now <i class='ri-arrow-right-line'></i></a>";
          }
          ?>
        </div>
        <div class="explore__card">
          <span><i class="ri-shopping-basket-fill"></i></span>
          <h4>Fit & Fun</h4>
          <p>
          Un program distractiv, potrivit pentru cei care vor să rămână activi într-un mod relaxant.
          </p>
          <?php
          if(!isset($_SESSION["userid"])) {
            echo"<a href='auth.php'>Join Now <i class='ri-arrow-right-line'></i></a>";
          }
          ?>
        </div>
      </div>
    </section>

    <section class="section__container class__container">
      <div class="class__image">
        <span class="bg__blur"></span>
        <img src="assets/class-1.jpg" alt="class" class="class__img-1" />
        <img src="assets/class-2.jpg" alt="class" class="class__img-2" />
      </div>
      <div class="class__content">
        <h2 class="section__header">PENTRU CĂ MERIȚI CE ESTE MAI BUN!</h2>
        <p>
        La GYM DAW, sănătatea și starea ta de bine sunt în centrul atenției noastre. 
        Te invităm să descoperi o sală de fitness unde vei găsi mai mult decât antrenamente – vei găsi inspirație și sprijin.
        </p>
        <?php
          if(!isset($_SESSION["userid"])) {
            echo"<a href='auth.php' class='btn'>Join Now </a>";
          }
          ?>
      </div>
    </section>

    <section class="section__container join__container">
      <h2 class="section__header">De ce să alegi GYM DAW??</h2>
      <p class="section__subheader">
      Alege GYM DAW și începe-ți transformarea astăzi!
      </p>
      <div class="join__image">
        <img src="assets/join.jpg" alt="Join" />
        <div class="join__grid">
          <div class="join__card">
            <span><i class="ri-user-star-fill"></i></span>
            <div class="join__card__content">
              <h4>Antrenori Dedicați</h4>
              <p>Echipa noastră de experți este pregătită să te motiveze și să te ghideze.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-vidicon-fill"></i></span>
            <div class="join__card__content">
              <h4>Sesiuni Înregistrate</h4>
              <p>Disponibile gratuit pentru membrii Standard și Premium.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-building-line"></i></span>
            <div class="join__card__content">
              <h4>Facilități Premium</h4>
              <p>Vestiare moderne, dușuri curate, o zonă de socializare cu băuturi sănătoase</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container price__container">
      <h2 class="section__header">PRICING PLAN</h2>
      <p class="section__subheader">
        Planuri de abonament flexibile pentru fiecare stil de viață
      </p>
      <div class="price__grid">
        <div class="price__card">
          <div class="price__card__content">
            <h4>Planul Basic</h4>
            <h3>200 RON</h3>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              Acces la zona de forță și cardio
            </p>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              Acces în timpul orelor standard (08:00 - 20:00)
            </p>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              Vestiare și dușuri incluse
            </p>
          </div>
          <?php
          if(!isset($_SESSION["userid"])) {
            echo"<a href='auth.php' class='btn price__btn'>Join Now </a>";
          }
          ?>
        </div>
        <div class="price__card">
          <div class="price__card__content">
            <h4>Planul Standard</h4>
            <h3>350 RON</h3>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              Tot ce include Planul Basic
            </p>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              Acces nelimitat la toate facilitățile (06:00 - 22:00)
            </p>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              4 ședințe gratuite cu un antrenor personal
            </p>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              Reducere la băuturile din zona de relaxare
            </p>
          </div>
          <?php
          if(!isset($_SESSION["userid"])) {
            echo"<a href='auth.php' class='btn price__btn'>Join Now </a>";
          }
          ?>
        </div>
        <div class="price__card">
          <div class="price__card__content">
            <h4>Planul Premium</h4>
            <h3>500 RON</h3>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              Ședințe nelimitate cu antrenor personal
            </p>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              Zonă de relaxare VIP cu băuturi gratuite
            </p>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              Consultanță nutrițională lunară
            </p>
            <p>
              <i class="ri-checkbox-circle-line"></i>
              Acces prioritar la clase de grup cu locuri limitate
            </p>
          </div>
          <?php
          if(!isset($_SESSION["userid"])) {
            echo"<a href='auth.php' class='btn price__btn'>Join Now </a>";
          }
          ?>
        </div>
      </div>
    </section>

    

<?php
  include_once 'footer.php';
?>