<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="pictures/icon.jpg">
    <title>Document</title>
    <style>
        body {
            background-color:#e6f2ff
        }
        h2 {
            color: #000000;
            font-size: 2.5rem;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 20px;
        }
        .cards {
            list-style-type: none;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 0;
        }

        .card {
            background-color: #b3d4fc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: calc(33.333% - 20px);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-content {
            padding: 20px;
            text-align: center;
        }

        .card-content h3 {
            margin: 0;
            font-size: 1.5rem;
            color: #000000;
        }

        .card-content p {
            margin: 0;
            font-size: 1rem;
            color: #333;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .card:hover .card-content p {
            opacity: 1;
        }

        .tooltip {
            visibility: hidden;
            background-color: #3f51b5;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            border-radius: 6px;
            position: absolute;
            z-index: 1;
            bottom: 100%;
            left: 50%;
            margin-left: -60px;
            width: 120px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .card:hover .tooltip {
            visibility: visible;
            opacity: 1;
        }

        .tooltip::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #3f51b5 transparent transparent transparent;
        }

        .back-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
}
    </style>
</head>
<body>
    <h2>Gondozottjaink</h2>
    <br>
    <ul class="cards">
        <li class="card"><div class="card-content">
                <h3>Kiss Anna</h3>
                <p>82 éves, kedvenc időtöltése: könyvek olvasása</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Kovács József</h3>
                <p>78 éves, kedvenc időtöltése: kertészkedés</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Nagy Mária</h3>
                <p>75 éves, kedvenc időtöltése: kézimunka</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Kovács József</h3>
                <p>62 éves, kedvenc időtöltése: kertészkedés</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Szabó Anna</h3>
                <p>79 éves, kedvenc időtöltése: festés</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Tóth László</h3>
                <p>55 éves, kedvenc időtöltése: olvasás</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Varga Éva</h3>
                <p>56 éves, kedvenc időtöltése: biciklizés</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Papp Gábor</h3>
                <p>54 éves, kedvenc időtöltése: videójátékok</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Molnár Katalin</h3>
                <p>68 éves, kedvenc időtöltése: séta a természetben</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Farkas Péter</h3>
                <p>61 éves, kedvenc időtöltése: fotózás</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Balogh Zsuzsanna</h3>
                <p>56 éves, kedvenc időtöltése: főzés</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Szűcs Ferenc</h3>
                <p>58 éves, kedvenc időtöltése: horgászat</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Kiss Judit</h3>
                <p>74 éves, kedvenc időtöltése: zongorázás</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Kovács Géza</h3>
                <p>62 éves, kedvenc időtöltése: kertészkedés</p>
           </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Szabó Éva</h3>
                <p>76 éves, kedvenc időtöltése: festés</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Varga László</h3>
                <p>65 éves, kedvenc időtöltése: olvasás</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Papp Anna</h3>
                <p>57 éves, kedvenc időtöltése: biciklizés</p>
            </div>
        </li>
        <li class="card">
            <div class="card-content">
                <h3>Balogh Péter</h3>
                <p>58 éves, kedvenc időtöltése: horgászat</p>
            </div>
        </li>
    </ul>
    <a href="index.php" class="back-button">Vissza a főoldalra</a>
</body>