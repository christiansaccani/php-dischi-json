<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpotiDiscc</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- vue 3 -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>
<div id="app">

    <h1>SpotiDisco</h1>

    <section>
        <div v-for="currentDisc in discList" class="card mb-4 text-center my_card" style="width: 18rem;">
            <img :src="currentDisc.poster" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{currentDisc.title}}</h5>
                <p class="card-text">{{currentDisc.author}}</p>
                <h6 class="card-title">{{currentDisc.year}}</h6>
            </div>
        </div>
    </section>

</div> 
<script src="./js/main.js"></script>
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<!-- !DEVO USCIRE A DARE DELLE LEZIONI, PER TANTO FINIRO' L'ESERCIZIO IN SERATA! -->