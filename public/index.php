  <!-- Page d'accueil/présentation -->
  <!DOCTYPE html>
  <html lang="fr">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/index.css">
  <title>Nexora</title>
  </head>
  <body>

  <?php include "../includes/header-welcome.php" ?>
    <main>
      <section id="hero">
        <div id="hero-img">
          <img src="../assets/img/jiji.png">
        </div>

        <div id="hero-about">
          <h3><em><b>Nexora. Un seul espace pour organiser ta vie.</b></em></h3>
          <em>Un assistant personnel intelligent combinant productivité, finances et habitudes.</em>
          <a class="btn btn-primary btn-lg btn-anim " href="register.php">Voir le tableau de bord</a>
        </div>
      </section>

      <section id="about">
        <div>
          <h3><em><b>Pourquoi Nexora ?</b></em></h3>
          <p>
            Nexora est une webapp tout-en-un pensée pour t’aider à mieux structurer ton quotidien. <br>
            Que tu sois étudiant, actif ou simplement en quête d’un meilleur équilibre de vie, Nexora regroupe en un seul espace les outils essentiels pour suivre ton temps, ton énergie, ton budget et tes routines. <br>
            Conçue avec une interface douce, fluide et personnalisable, l’application te permet de rester organisé sans te submerger. <br>
          </p>
        </div>

        <div>
        <h3><em><b>Ce que Nexora t’apporte :</b></em></h3>
        <ul>
          <li><b>Un cadre structurant</b> pour mieux t’organiser au quotidien, sans pression.</li>
          <li><b>Une vision claire</b> de tes priorités, de ton équilibre et de ton évolution personnelle.</li>
          <li><b>Une dynamique positive</b> pour te motiver, progresser et garder le cap.</li>
          <li><b>Une interface apaisante</b> pensée pour rendre la gestion de soi simple et agréable.</li>
        </ul>
        </div>
      </section>

      <section id="features">
      <div>
          <h3><em><b>Ce que vous pouvez faire avec Nexora</b></em></h3>
          <ul>
            <li><b>Dashboard : </b>Vue centralisée de la semaine et des modules</li>
            <li><b>Calendrier : </b>Événements colorés, suivi rapide</li>
            <li><b>ToDo List : </b>Priorisation et progression claire</li>
            <li><b>Module Financier : </b>Simulation, prévision, objectifs d’épargne</li>
            <li><b>Habit Tracker : </b>Tableau interactif, statistiques de progression</li>
          </ul>
        </div>


        <div>
          <img src="../assets/img/nexoraAndFeatures.png">
        </div>
      </section>

      <section id="cta">
        <div>
          <h3><em><b>Reprends le contrôle de ta routine.</b></em></h3>
          <a  class="btn btn-primary btn-lg btn-anim " href="register.php">Se connecter</a>
          <a class="footer-a" href="#features">En savoir plus sur les fonctionnalités</a>
        </div>
      </section>
    </main>
  </body>
  </html>