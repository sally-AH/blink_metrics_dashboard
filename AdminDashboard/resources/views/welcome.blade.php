<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/app.css">
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
                                <ion-icon name="logo-apple"></ion-icon>
                            </span>
                            <span class="title">Name</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="menu-row">
                            <span class="icon">
                                <ion-icon name="logo-apple"></ion-icon>
                            </span>
                            <span class="title">Name</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="menu-row">
                            <span class="icon">
                                <ion-icon name="logo-apple"></ion-icon>
                            </span>
                            <span class="title">Name</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="">
                        <div class="menu-row">
                            <span class="icon">
                                <ion-icon name="logo-apple"></ion-icon>
                            </span>
                            <span class="title">Name</span>
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
            <div class="cardBox">
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
            
        </div>
    </div>

    
    {{-- Scripts --}}
    <script src="assets/js/app.js"></script>
    {{-- ICONS --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

