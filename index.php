<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Spotify</title>
</head>
<body>

    <main>

        <div id="app">

            <div class="container">
                <h1 class="text-center">
                    Boolify Music
                </h1>

                <div class="row">

                    <div v-for="(elem, index) in data" :key="index">

                        <div class="card" style="width: 18rem;">
                          <img :src="elem.poster" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{elem.artist}}</h5>
                            <p class="card-text">{{elem.album}}</p>
                          </div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{elem.year}}</li>
                            <li class="list-group-item">{{elem.genre}}</li>
                        </div>

                    </div>
                


                </div>

            </div>


        </div>

    </main>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="main.js"></script>

</html>