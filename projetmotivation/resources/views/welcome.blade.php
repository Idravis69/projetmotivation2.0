<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('welcome') }}">Acceuil</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/apropos">A propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Connexion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.espacefitness.ca/wp-content/uploads/2021/04/motivation-72-dpi.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/09/Motivation-arrows.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://uploads-ssl.webflow.com/6089b7ddf582a661e6591d03/609a86c939b24c23c60328f2_1300X560%20de%20photo%20blog%20(1).png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum culpa quisquam accusantium incidunt aliquid impedit, officia cum doloremque dolor cupiditate labore explicabo corrupti ex eaque, repudiandae accusamus vitae debitis! At. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi repellat doloribus distinctio eaque veritatis, libero maiores aliquam esse excepturi architecto earum laboriosam labore vero neque. Repellendus doloribus nostrum consequatur perspiciatis. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi quibusdam eos officia molestiae ipsum est officiis repellendus, enim tenetur a qui placeat similique voluptatem ratione veniam harum, consequatur sunt asperiores!</p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>