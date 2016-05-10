<html>
<head>
    <meta charset="UTF-8" />


    <title>Criança da Marcela</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
    <style media="screen">

    * {
        margin: 0px;
        padding: 0px;
        outline: none;
        text-decoration: none;
        list-style: none;
        font-size: 100%;

    }

    html{
        width: 100%;
        position: relative;
    }

    body{

        font-family: 'Roboto', sans-serif;
    }

    p{
        color: #fff;
        text-align: center;
        font-size:30px;
        margin-bottom: 30px;
        display: none;
    }

    .menino{
        background-color: #1E90FF;
    }

    h1, h2{
        font-size: 100px;
        text-align: center;
    }

    .menino h1{
        color: #87CEFA;
    }

    .menino h2{
        display: none;
    }

    .menina{
        background-color: #FFC0CB;
    }

    .menina h2{
        color: #FF69B4;
    }

    .menina h1{
        display: none;
    }

    .menina .p_menina{
        display: block;
    }

    .menino .p_menino{
        display: block;
    }

    #bloco{
        width: 500px;
        height: 300px;
        position: absolute;
        top: 0px;
        left: 0px;
        right: 0px;
        bottom: 0px;
        margin: auto;
    }


    </style>

</head>

<body class="menina" id="body">

    <div class="" id="bloco">
        <p class="p_menino">a Marcela terá um ?</p>
        <p class="p_menina">a Marcela terá uma ?</p>
        <h1>MENINO</h1>
        <h2>MENINA</h2>
    </div>

    <script type="text/javascript">
    var genero = ['menino', 'menina'];

    var rand = genero[Math.floor(Math.random() * genero.length)];

    document.getElementById("body").className = "";
    document.getElementById("body").className = rand;
    </script>
</body>
</html>
