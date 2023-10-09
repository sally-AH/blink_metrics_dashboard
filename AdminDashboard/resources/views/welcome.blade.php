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
                            <span class="title">Blink Metrics</span>
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
                            1,504
                        </div>
                        <div class="cardNumber">
                            Daily Views
                        </div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card draggable resizable" draggable="true">
                    <div>
                        <div class="numbers">
                            80
                        </div>
                        <div class="cardNumber">
                            Sales
                        </div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card draggable resizable" draggable="true">
                    <div>
                        <div class="numbers">
                            284
                        </div>
                        <div class="cardNumber">
                            Comments
                        </div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </div>
                </div>
                <div class="card draggable resizable" draggable="true">
                    <div>
                        <div class="numbers">
                            $7,842
                        </div>
                        <div class="cardNumber">
                            Earnings
                        </div>
                    </div>
                    <div class="iconBox">
                        <ion-icon name="cash-outline"></ion-icon>
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
                    <!-- weather widget start -->
                    <div id="m-booked-weather-bl250-90349"> 
                        <div class="booked-wzs-250-175 weather-customize" style="background-color:#137AE9;width:160px;" id="width1"> 
                            <div class="booked-wzs-250-175_in"> 
                                <div class="booked-wzs-250-175-data"> 
                                    <div class="booked-wzs-250-175-left-img wrz-03"> </div> 
                                    <div class="booked-wzs-250-175-right"> 
                                        <div class="booked-wzs-day-deck">
                                            <div class="booked-wzs-day-val"> 
                                                <div class="booked-wzs-day-number">
                                                    <span class="plus">+</span>25
                                                </div> 
                                                <div class="booked-wzs-day-dergee"> 
                                                    <div class="booked-wzs-day-dergee-val">&deg;</div> 
                                                    <div class="booked-wzs-day-dergee-name">C</div> 
                                                </div> 
                                            </div> 
                                            <div class="booked-wzs-day"> 
                                                <div class="booked-wzs-day-d">H: 
                                                    <span class="plus">+</span>25&deg;
                                                </div> 
                                                    <div class="booked-wzs-day-n">L: 
                                                        <span class="plus">+</span>24&deg;
                                                    </div> 
                                                </div> 
                                            </div> 
                                            <div class="booked-wzs-250-175-info"> 
                                                <div class="booked-wzs-250-175-city">Beirut </div> 
                                                <div class="booked-wzs-250-175-date">Monday, 09 October</div> 
                                                <div class="booked-wzs-left"> 
                                                    <span class="booked-wzs-bottom-l">See 7-Day Forecast</span> 
                                                </div> 
                                            </div> 
                                        </div> 
                                    </div> 
                                    <table cellpadding="0" cellspacing="0" class="booked-wzs-table-250"> <tr> <td>Sun</td> <td>Tue</td> <td>Wed</td> <td>Thu</td> <td>Fri</td> <td>Sat</td> </tr> <tr> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-01"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-03"></div></td> <td class="week-day-ico"><div class="wrz-sml wrzs-18"></div></td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>25&deg;</td> <td class="week-day-val"><span class="plus">+</span>25&deg;</td> <td class="week-day-val"><span class="plus">+</span>24&deg;</td> <td class="week-day-val"><span class="plus">+</span>25&deg;</td> <td class="week-day-val"><span class="plus">+</span>25&deg;</td> <td class="week-day-val"><span class="plus">+</span>25&deg;</td> </tr> <tr> <td class="week-day-val"><span class="plus">+</span>24&deg;</td> <td class="week-day-val"><span class="plus">+</span>23&deg;</td> <td class="week-day-val"><span class="plus">+</span>23&deg;</td> <td class="week-day-val"><span class="plus">+</span>23&deg;</td> <td class="week-day-val"><span class="plus">+</span>24&deg;</td> <td class="week-day-val"><span class="plus">+</span>24&deg;</td> </tr> </table> </div> </div> </div><script type="text/javascript"> var css_file=document.createElement("link"); var widgetUrl = location.href; css_file.setAttribute("rel","stylesheet"); css_file.setAttribute("type","text/css"); css_file.setAttribute("href",'https://s.bookcdn.com/css/w/booked-wzs-widget-275.css?v=0.0.1'); document.getElementsByTagName("head")[0].appendChild(css_file); function setWidgetData_90349(data) { if(typeof(data) != 'undefined' && data.results.length > 0) { for(var i = 0; i < data.results.length; ++i) { var objMainBlock = document.getElementById('m-booked-weather-bl250-90349'); if(objMainBlock !== null) { var copyBlock = document.getElementById('m-bookew-weather-copy-'+data.results[i].widget_type); objMainBlock.innerHTML = data.results[i].html_code; if(copyBlock !== null) objMainBlock.appendChild(copyBlock); } } } else { alert('data=undefined||data.results is empty'); } } var widgetSrc = "https://widgets.booked.net/weather/info?action=get_weather_info;ver=7;cityID=977;type=3;scode=65581;ltid=3457;domid=w209;anc_id=90103;countday=undefined;cmetric=1;wlangID=1;color=137AE9;wwidth=160;header_color=ffffff;text_color=333333;link_color=08488D;border_form=1;footer_color=ffffff;footer_text_color=333333;transparent=0;v=0.0.1";widgetSrc += ';ref=' + widgetUrl;widgetSrc += ';rand_id=90349';var weatherBookedScript = document.createElement("script"); weatherBookedScript.setAttribute("type", "text/javascript"); weatherBookedScript.src = widgetSrc; document.body.appendChild(weatherBookedScript) </script><!-- weather widget end -->
                </div>
                <div class="chart draggable resizable" draggable="true"> 
                    {{-- height="352" --}}
                    
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/show/6YqgG1UezfW9khCvLh8rvw?utm_source=generator&theme=0" width="100%"  frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                    </iframe>

                
                    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                    <div class="elfsight-app-979d9386-fb96-4139-8d14-6ff111bea77e"></div>
                </div>
            </div>

            <div class="chartBox dragContainer">
                
                <div class ="chart draggable resizable" draggable="true">
                    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                    <div class="elfsight-app-cbc43a71-5c19-4f75-a32d-94bfe9636a81"></div>
                </div>

                <div class ="chart draggable resizable" draggable="true">
                    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                    <div class="elfsight-app-29f9fa6a-c0c7-4376-a0e5-9545755d558a"></div>
                </div>


            </div>
            
            <div class="chartBox">

            
                <div id="map" class="chart draggable resizable" draggable="true"></div>
                    
                    <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container chart draggable resizable" draggable="true">
                    <div id="tradingview_fffe5"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                    <script type="text/javascript">
                        new TradingView.widget(
                            {
                                "autosize": true,
                                "symbol": "NASDAQ:AAPL",
                                "interval": "D",
                                "timezone": "Etc/UTC",
                                "theme": "light",
                                "style": "0",
                                "locale": "en",
                                "enable_publishing": false,
                                "allow_symbol_change": true,
                                "container_id": "tradingview_fffe5"
                            }
                        );
                    </script>
                </div>
                <!-- TradingView Widget END -->
            </div>
            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
            <div class="elfsight-app-553d27cc-31e1-448f-beb0-f905b98bbd2b"></div>
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

