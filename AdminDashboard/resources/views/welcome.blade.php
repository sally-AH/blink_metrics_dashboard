<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
    <title>Blink Matrics Dashboard</title>

</head>
</head>
<body>
    <div class="container">
        {{-- NAV --}}
        <div class="navigation">
            <ul>
                <li>
                    <a href="">
                        <div class="menu-row">
                            <span class="icon">
                                <img src="assets/logo/ic_launcher.png" class="logo" alt="">
                            </span>
                            <span class="title">Blink Matricx</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="menu-row">
                            <span class="icon">
                                <ion-icon name="home-outline"></ion-icon>
                            </span>
                            <span class="title">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="menu-row">
                            <span class="icon">
                                <ion-icon name="people-outline"></ion-icon>
                            </span>
                            <span class="title">Customers</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="menu-row">
                            <span class="icon">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </span>
                            <span class="title">Messages</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="menu-row">
                            <span class="icon">
                                <ion-icon name="help-outline"></ion-icon>
                            </span>
                            <span class="title">Help</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="menu-row">
                            <span class="icon">
                                <ion-icon name="settings-outline"></ion-icon>
                            </span>
                            <span class="title">Settings</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="menu-row">
                            <span class="icon">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </span>
                            <span class="title">Sign Out</span>
                        </div>
                    </a>
                </li>


            </ul>
        </div>

        {{-- Main --}}
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
            </div>
            {{-- Cards --}}
            <div class="cardBox dragContainer">
                <div class="card draggable resizable" draggable="true" >
                    <div>
                        <div class="numbers">
                            1
                        </div>
                        <div class="cardNumber">
                            Daily Views
                        </div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="logo-apple"></ion-icon>
                    </div>
                </div>
                <div class="card draggable resizable" draggable="true">
                    <div>
                        <div class="numbers">
                            2
                        </div>
                        <div class="cardNumber">
                            Daily Views
                        </div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="logo-apple"></ion-icon>
                    </div>
                </div>
                <div class="card draggable resizable" draggable="true">
                    <div>
                        <div class="numbers">
                            3
                        </div>
                        <div class="cardNumber">
                            Daily Views
                        </div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="logo-apple"></ion-icon>
                    </div>
                </div>
                <div class="card draggable resizable" draggable="true">
                    <div>
                        <div class="numbers">
                            4
                        </div>
                        <div class="cardNumber">
                            Daily Views
                        </div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="logo-apple"></ion-icon>
                    </div>
                </div>

            </div>
            {{-- Charts --}}
            <div class="chartBox dragContainer">
                <div class="chart draggable resizable" draggable="true">
                    <canvas id="chart1" ></canvas>
                </div>
                <div class="chart draggable resizable" draggable="true">
                    <canvas id="chart2"></canvas>
                </div>
            </div>

            {{-- Widgets --}}

            <div class="chartBox dragContainer">
                <div class="chart draggable resizable" draggable="true">
                    <div id="ww_c2c1741309648" v='1.3' loc='id' a='{"t":"horizontal","lang":"en","sl_lpl":1,"ids":[],"font":"Arial","sl_ics":"one_a","sl_sot":"celsius","cl_bkg":"image","cl_font":"#FFFFFF","cl_cloud":"#FFFFFF","cl_persp":"#81D4FA","cl_sun":"#FFC107","cl_moon":"#FFC107","cl_thund":"#FF5722"}'>More forecasts: 
                        <a href="https://weatherwidget.org/fr/" id="ww_c2c1741309648_u" target="_blank">Widget meteo html</a>
                    </div>
                    <script async src="https://app2.weatherwidget.org/js/?id=ww_c2c1741309648"></script>
                </div>
                <div class="chart draggable resizable" draggable="true"> 
                    {{-- height="352" --}}
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/7qVcmaCAKgmZoAhjPMsXvC?utm_source=generator&theme=0" width="100%" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/6YqgG1UezfW9khCvLh8rvw?utm_source=generator&theme=0" width="100%"  frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                    </iframe>
                </div>
            </div>

            <div class="chartBox dragContainer">
                <div id="map" class="draggable resizable" draggable="true"></div>
            </div>

        </div>
    </div>

    
    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/map.js"></script>
    {{-- ICONS --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

