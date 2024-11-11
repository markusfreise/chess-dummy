<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Chess</title>
        <script src="js/site.js"></script>
        <link rel="stylesheet" href="css/site.css">
    </head>

    <body>
        <div id="app">
            <div id="board">
                <div v-for="row in 8" class="row">
                    <div v-for="col in 8" class="col" :class="{'black': (row + col) % 2 == 0}">
                    </div>
                </div>
                <div class="piece queen white" :class="position(pieces.queen_white)"><img src="/images/queen-white.svg" alt=""></div>
            </div>
            <div id="input">
                <input type="text" v-model="temp_position.x" @keyup.enter="move">
                <input type="text" v-model="temp_position.y" @keyup.enter="move">
                <span @click="move" class="button">Move</span>
            </div>
    </body>

</html>
