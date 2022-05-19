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
          <a class="navbar-brand" href="/">Acceuil</a>
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

      <h3>Contact car je suis motiver</h3>
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        <br> <br> <br>
        <textarea name="" id="" cols="30" rows="10"></textarea>
      </div>

      <button type="button" class="btn btn-primary">button de motivaton</button>
    

      <img src="https://www.google.com/maps/vt/data=sMIMAjwO254Hn1WxU89wpo7BmSn8pYFw__Sc_GH5xlJ0kI56TENO752Q5pzpawOzCEr3QLV8foXVC3o0GVyuO4cDahUgifd3vvOqjQPiB1SAfrwUeRA00PBnlLf8sieI3gdWQ4mmjKrsLgCrIjCyANaLmNt39dF5xBYFWUHRg2-kJs3_nwviLcggHirc12vkcg56lYc3Zc64lZB-6vFd-MzozRN3f086Bn5AHzwwJPSafVrzjo_gdw" alt="">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>