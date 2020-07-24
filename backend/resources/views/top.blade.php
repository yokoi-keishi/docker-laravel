<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="{{ asset('css/top.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
  <header>
    <div class="header-logo">
      <div class="header-logo-text">
        <h1>Keishi Portfolio!</h1>
        <p>This portfolio was create for the first time.<br>The original application is also included, so please take a look.</p>
      </div>
    </div>
  </header>

  <main class="py-3">
    <div class="container mx-1">
      <!-- nav bar -->
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <!-- nav bar 1 -->
        <li class="nav-item">
          <a class="nav-link active text-secondary" id="home-tab" data-toggle="tab"      href="#home" role="tab" aria-controls="home"      aria-selected="true">Home</a>
        </li>
        <!-- nav bar 2 -->
        <li class="nav-item">
          <a class="nav-link text-secondary" id="profile-tab" data-toggle="tab"      href="#profile" role="tab" aria-controls="profile"      aria-selected="false">Profile</a>
        </li>
        <!-- nav bar 3 -->
        <li class="nav-item">
          <a class="nav-link text-secondary" id="skill-tab" data-toggle="tab"      href="#skill" role="tab" aria-controls="skill"      aria-selected="false">Skill</a>
        </li>
        <!-- nav bar 4 -->
        <li class="nav-item">
          <a class="nav-link text-secondary" id="app-tab" data-toggle="tab"      href="#app" role="tab" aria-controls="app"      aria-selected="false">Application</a>
        </li>
      </ul>
      <!-- End nav bar -->

      <!-- Start tab content -->
      <div class="tab-content bg-light" id="myTabContent">
        <!-- content 1 -->
        <div class="tab-pane fade show active" id="home" role="tabpanel"      aria-labelledby="home-tab">
          <div class="row px-3 py-3">
            <div class="col-sm-3 icon-zone">
              <img class="icon" src="{{ asset('/image/yokoi_keishi.jpg') }}" alt="アイコン">
            </div>
            <div class="col-sm-9 tab-content-text">
              <p>初めまして！</p>
            </div>
          </div>
        </div>
        <!-- content 2 -->
        <div class="tab-pane fade" id="profile" role="tabpanel"       aria-labelledby="profile-tab">
          <div class="row px-3 py-3">
            <div class="col-sm-3 icon-zone">
              <img class="icon" src="{{ asset('/image/yokoi_keishi.jpg') }}" alt="アイコン">
            </div>
            <div class="col-sm-9 tab-content-text">
              <p>こんにちは！</p>
            </div>
          </div>
        </div>
        <!-- content 3 -->
        <div class="tab-pane fade" id="skill" role="tabpanel"       aria-labelledby="skill-tab">
          <div class="row px-3 py-3">
            <div class="col-sm-3 icon-zone">
              <img class="icon" src="{{ asset('/image/yokoi_keishi.jpg') }}" alt="アイコン">
            </div>
            <div class="col-sm-9 tab-content-text">
              <p>横井啓志です！</p>
            </div>
          </div>
        </div>
        <!-- content 4 -->
        <div class="tab-pane fade" id="app" role="tabpanel"       aria-labelledby="app-tab">
          <div class="row px-3 py-3">
            <div class="col-sm-3 icon-zone">
              <img class="icon" src="{{ asset('/image/yokoi_keishi.jpg') }}" alt="アイコン">
            </div>
            <div class="col-sm-9 tab-content-text">
              <p>show application!</p>
            </div>
          </div>
        </div>
        <!-- End tab content -->
      </div>
    </div>
  </main>

  <footer>
    ©️ 2019 yokoi-keishi 
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>