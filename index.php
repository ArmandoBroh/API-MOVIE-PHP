<?php
const API_URL="https://whenisthenextmcufilm.com/api";

$ch= curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result= curl_exec($ch);
$data= json_decode($result,true);
curl_close($ch);
#var_dump($data);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
/>
</head>

<main>
    
<section class="intro">
<h1>¿Cual es la siguiente pelicula de marvel a estrenar?</h1>
</section>

<hgroup>
        <h3><?= $data["title"];?> Se estrena en <?=$data["days_until"]; ?> Dias </h3>
        <p class="estreno">Fecha de estreno: <?=$data["release_date"];?> </p>
        <p class="next">La siguiente pelicula a estrenar es: <a> <?= $data["following_production"]["title"];?> </a></p>
    </hgroup>
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="400" alt="">
    </section>

    <style>

    :root{
       color-scheme: dark light;
    }
        img{
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 5px 8px gray;
            display: flex;
            justify-content: center;
        }

        hgroup{
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .estreno{
            color: yellow;
        }

        .next{
            color: aliceblue;
        }

        .intro{
            text-shadow: 2px 3px gray;
            justify-content: center;
            align-items: center;
            display: flex;
            text-align: center;
        }

    </style>

</main>