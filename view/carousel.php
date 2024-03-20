<style>
    #item1{
      background-image: url('img/sort.gif');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
    }
    #item2{
      background-image: url('img/baguette.png');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
    }
    #item3{
      background-image: url('img/Poudlard.png');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
    }
    #item4{
      background-image: url('img/Sorcier.png');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
    }
    #item5{
      background-image: url('img/HarryPotter.png');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
    }
    #item6{
      background-image: url('img/emblème.png');
            background-size: 100%;
            background-position: center;
            background-repeat: no-repeat;
    }
    body {
      background-color: black;
    }
</style>

<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div id='item1' class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Livrer une bataille de sort</h1>
                <p class="opacity-75">apprenez les meilleurs sorts pour battre les plus grands ennemis</p>
                <p><a class="btn btn-lg btn-primary" href="/inscription">Inscrivez-vous</a></p>
              </div>
            </div>
          </div>
          <div id='item2' class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>  
            <div class="container">
              <div class="carousel-caption">
                <h1>Les meilleurs objets magiques</h1>
                <p>Allez voir les objets en ventes dans notre magasin en ligne</p>
                <p><a class="btn btn-lg btn-primary" href="/produit">Allez voir</a></p>
              </div>
            </div>
          </div>
          <div id='item3' class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Allez à Poudlard</h1>
                <p>Allez voir les locaux de Poudlard</p>
                <p><a class="btn btn-lg btn-primary" href="/404">Découvrir</a></p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>  
  <div class="pt-3 mt-5 container marketing border border-8 border-color-dark">
        <div class="row">
            <div class="col-lg-4">
                <svg id="item4" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                <h2 class="fw-normal text-white">Les maisons</h2>
                <p class="text-white">Les maisons vous sont ouvertes allez faire un tour pour découvrir à quelle maison vous appartenez.</p>
                <p><a class="btn btn-secondary" href="https://www.wizardingworld.com/">Plus de détails</a></p>
            </div>
            <div  class="col-lg-4">
                <svg id="item5" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                <h2 class="fw-normal text-white">L'histoire</h2>
                <p class="text-white">Allez-vous renseigner sur l'histoire d'Harry Potter</p>
                <p><a class="btn btn-secondary" href="https://fr.wikipedia.org/wiki/Harry_Potter">Découvrir</a></p>
            </div>
            <div class="col-lg-4">
                <svg id="item6" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
                <h2 class="fw-normal text-white">Sortilège</h2>
                <p class="text-white">Allez vous renseigner sur les sorts présents sur ce site</p>
                <p><a class="btn btn-secondary" href="https://harrypotter.fandom.com/fr/wiki/Cat%C3%A9gorie:Sorts_par_nom">Voir détails</a></p>
            </div>
        </div>
    </div>
