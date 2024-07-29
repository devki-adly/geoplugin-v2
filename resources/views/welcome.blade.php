<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geoplugin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- ---header-start--- -->
    <header>
        <nav class="navbar navbar-expand-lg bg-light-black">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="img/geoplugin-logo.png" class="img-fluid">
                </a>
                <button class="navbar-toggler bg-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-white fw-bold" aria-current="page" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="#">Docs</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <button class="btn text-white fw-bold" type="submit">Sign Up</button>
                        <button class="btn btn-login fw-bold" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <!-- ---banner-sections-start--- -->
    <section class="banner-section bg-light-black position-relative">
        <div class="container">
            <div class="row h-100 align-items-center align-content-center justify-content-between">
                <div class="col-md-6">
                    <h1 class="text-white pb-3">Plugin to <span class="geo-target">geo-targeting</span> and unleash your site’s potential</h1>
                    <p class="text-white pb-3 fs-5  ">IP Geolocation and reverse IP geocoding technology on the web are about detecting requests coming from your visitors and locating them in the world, down to the city they are in, based on their IP address.</p>
                    <button class="btn btn-login fw-bold" type="submit">Get Started - <span class="fw-normal">Its free</span></button>
                </div>
                <div class="col-md-5 input-col-wrapper">
                    <div class="input-feilds">
                        <div class="search-box position-relative">
                            <input type="text" class="form-control w-100 bg-transparent p-2" placeholder="180.190.153.126">
                            <span class="search-icon py-1 px-3 position-absolute end-0 top-50"><i class="fa-solid fa-magnifying-glass"></i></span>
                        </div>
                        <div class="custom-card mt-3 p-4">
                            <img src="img/clip-board.png" class="img-fluid float-end">
                            <p>"ip"<span>: "180.190.221.48",</span></p>
                            <p> "country_code"<span>: "PH",</span></p>
                            <p> "country_name"<span>: "Philippines",</span></p>
                            <p> "district"<span> "-",</span></p>
                            <p>"city_name"<span> "Alcantara",</span></p>
                            <p> "latitude"<span class="text-danger">: 9.97556,</span></p>
                            <p>"longitude"<span class="text-danger">: 123.40611,</span></p>
                            <p>""zip_code"<span>: "6034",</span></p>
                            <p>"time_zone"<span>: "+08:00",</span></p>
                            <p>"asn"<span>: "132199",</span></p>
                            <p>"as"<span>: "Globe Telecom Inc.",</span></p>
                            <span class="copy-icon"><i class="bi bi-clipboard"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute top-50 start-50 globe-img">
                <img src="img/globe.png" class="img-fluid">
            </div>
            <div class="position-absolute bottom-0 start-0">
                <img src="img/globe-mark.png" class="img-fluid">
            </div>
            <div class="position-absolute bottom-0 end-0">
                <img src="img/globe-half.png" class="img-fluid">
            </div>
        </div>
    </section>
    <!-- ---banner-sections-start--- -->
    <!-- ---main-sections-start--- -->
    <main>
        <!-- --documentaion-section-start--- -->
        <section class="documentaion-content">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-5">
                        <h2>
                            API Documentation in your language of choice
                        </h2>
                    </div>
                    <div class="col-md-6">
                        <p>
                            GeoPlugin provides a free geolocation API in multiple different programming languages in a single API call. There is no software installation required, no API key and whether your programming language of choice be Javascript, PHP, XML, JSON, ASP, or CSV, geoPlugin has a way to simply and efficiently geo-localize your visitors.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- --documentaion-section-end--- -->

        <!-- ---tabs-section-start--- -->
        <section class="tabs-content-section">
            <div class="container tabs-wrapper py-5">
                <ul class="nav nav-tabs justify-content-center border-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active fs-6 fw-bold" id="js-tab" data-bs-toggle="tab" data-bs-target="#js-tab-pane" type="button" role="tab" aria-controls="js-tab-pane" aria-selected="true">Javascript</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  fs-6 fw-bold" id="php-tab" data-bs-toggle="tab" data-bs-target="#php-tab-pane" type="button" role="tab" aria-controls="php-tab-pane" aria-selected="false">PHP</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  fs-6 fw-bold" id="xml-tab" data-bs-toggle="tab" data-bs-target="#xml-tab-pane" type="button" role="tab" aria-controls="xml-tab-pane" aria-selected="false">XML</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link  fs-6 fw-bold" id="json-tab" data-bs-toggle="tab" data-bs-target="#json-tab-pane" type="button" role="tab" aria-controls="json-tab-pane" aria-selected="false">JSON</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-6 fw-bold" id="asp-tab" data-bs-toggle="tab" data-bs-target="#asp-tab-pane" type="button" role="tab" aria-controls="asp-tab-pane" aria-selected="false">ASP</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fs-6 fw-bold" id="csv-tab" data-bs-toggle="tab" data-bs-target="#csv-tab-pane" type="button" role="tab" aria-controls="csv-tab-pane" aria-selected="false">CSV</button>
                    </li>
                </ul>
                <div class="tab-content bg-light-black tabs-list w-100 mx-auto p-5 my-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="js-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <img src="img/clip-board.png" class="img-fluid float-end">
                        <p> $request_uri<span> = 'https://api.geoplugin.com'; </span></p>
                        <p> $ip_address<span> = '8.8.8.8'; </span></p>
                        <p> $url<span>= $request_uri . "?ip=" . $ip_address; </span></p>
                        <p>$document<span class="text-danger">= file_get_contents</span>($url);</p>
                        <p>$result<span class="text-danger"> = json_decode</span>($document);</p>
                    </div>
                    <div class="tab-pane fade" id="php-tab-pane" role="tabpanel" aria-labelledby="php-tab" tabindex="0">
                        <img src="img/clip-board.png" class="img-fluid float-end">
                        <p> $request_uri<span> = 'https://api.geoplugin.com'; </span></p>
                        <p> $ip_address<span> = '8.8.8.8'; </span></p>
                        <p> $url<span>= $request_uri . "?ip=" . $ip_address; </span></p>
                        <p>$document<span class="text-danger">= file_get_contents</span>($url);</p>
                        <p>$result<span class="text-danger"> = json_decode</span>($document);</p>
                    </div>
                    <div class="tab-pane fade" id="xml-tab-pane" role="tabpanel" aria-labelledby="xml-tab" tabindex="0">
                        <img src="img/clip-board.png" class="img-fluid float-end">
                        <p> $request_uri<span> = 'https://api.geoplugin.com'; </span></p>
                        <p> $ip_address<span> = '8.8.8.8'; </span></p>
                        <p> $url<span>= $request_uri . "?ip=" . $ip_address; </span></p>
                        <p>$document<span class="text-danger">= file_get_contents</span>($url);</p>
                        <p>$result<span class="text-danger"> = json_decode</span>($document);</p>
                    </div>
                    <div class="tab-pane fade" id="json-tab-pane" role="tabpanel" aria-labelledby="json-tab" tabindex="0">
                        <img src="img/clip-board.png" class="img-fluid float-end">
                        <p> $request_uri<span> = 'https://api.geoplugin.com'; </span></p>
                        <p> $ip_address<span> = '8.8.8.8'; </span></p>
                        <p> $url<span>= $request_uri . "?ip=" . $ip_address; </span></p>
                        <p>$document<span class="text-danger">= file_get_contents</span>($url);</p>
                        <p>$result<span class="text-danger"> = json_decode</span>($document);</p>
                    </div>
                    <div class="tab-pane fade" id="asp-tab-pane" role="tabpanel" aria-labelledby="asp-tab" tabindex="0">
                        <img src="img/clip-board.png" class="img-fluid float-end">
                        <p> $request_uri<span> = 'https://api.geoplugin.com'; </span></p>
                        <p> $ip_address<span> = '8.8.8.8'; </span></p>
                        <p> $url<span>= $request_uri . "?ip=" . $ip_address; </span></p>
                        <p>$document<span class="text-danger">= file_get_contents</span>($url);</p>
                        <p>$result<span class="text-danger"> = json_decode</span>($document);</p>
                    </div>
                    <div class="tab-pane fade" id="csv-tab-pane" role="tabpanel" aria-labelledby="csv-tab" tabindex="0">
                        <img src="img/clip-board.png" class="img-fluid float-end">
                        <p> $request_uri<span> = 'https://api.geoplugin.com'; </span></p>
                        <p> $ip_address<span> = '8.8.8.8'; </span></p>
                        <p> $url<span>= $request_uri . "?ip=" . $ip_address; </span></p>
                        <p>$document<span class="text-danger">= file_get_contents</span>($url);</p>
                        <p>$result<span class="text-danger"> = json_decode</span>($document);</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---tabs-section-end--- -->
        <!-- ---graph-section-start--- -->
        <section class="text-center graph-content">
            <div class="container">
                <h3 class="fs-1">Live API statistics</h3>
                <p class="fs-5 my-0 mx-auto">Below are our external monitors for webservice uptime and internal live graphs on the lookups we handle.</p>

                <ul class="nav nav-tabs justify-content-center my-4 border-0 graph-content" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active border-0 fs-6 fw-bold" id="day-tab" data-bs-toggle="tab" data-bs-target="#dya-tab-pane" type="button" role="tab" aria-controls="day-tab-pane" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link border-0 fs-6 fw-bold" id="week-tab" data-bs-toggle="tab" data-bs-target="#week-tab-pane" type="button" role="tab" aria-controls="week-tab-pane" aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link border-0 fs-6 fw-bold" id="latency-tab" data-bs-toggle="tab" data-bs-target="#latency-tab-pane" type="button" role="tab" aria-controls="latency-tab-pane" aria-selected="false">Contact</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="day-tab-pane" role="tabpanel" aria-labelledby="day-tab" tabindex="0">
                        <div class="graph-wrapper my-0 mx-auto">
                            <canvas id="lineChart" width="800" height="400"></canvas>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="week-tab-pane" role="tabpanel" aria-labelledby="week-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="latency-tab-pane" role="tabpanel" aria-labelledby="latency-tab" tabindex="0">...</div>
                </div>
            </div>
        </section>
        <!-- ---graph-section-end--- -->

        <!-- ---geo-targetting-start--- -->
        <section class="geo-targetting">
            <div class="container">
                <h3 class="pb-5 mb-5 fs-1 text-center">
                    Utilize geo targeting -<span class="fw-normal">it's highly effective.</span>
                </h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card-wrapper">
                            <div class="card-wrap-img mx-auto">
                                <img src="img/visitor.png" class="img-fluid">
                            </div>
                            <h4 class="fs-4 text-center">Enhance the visitor experience</h4>
                            <p class="text-center fs-6">Geo-targeting is crucial for optimizing user experience.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card-wrapper">
                            <div class="card-wrap-img mx-auto">
                                <img src="img/verified.png" class="img-fluid">
                            </div>
                            <h4 class="fs-4 text-center">Build trust with your audience.</h4>
                            <p class="text-center fs-6">Create a local feel for your visitors and instantly enhance trust.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card-wrapper">
                            <div class="card-wrap-img mx-auto">
                                <img src="img/rocket.png" class="img-fluid">
                            </div>
                            <h4 class="fs-4 text-center">Drastically boost conversions.</h4>
                            <p class="text-center fs-6">Observe how geo targeting increases your conversions and revenue.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ---geo-targetting-end--- -->
         <section></section>
    </main>
    <!-- ---main-sections-end--- -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('lineChart').getContext('2d');
        const lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Sun 00:00', 'Sun 03:00', 'Sun 06:00', 'Sun 09:00', 'Sun 12:00', 'Sun 15:00', 'Sun 18:00', 'Sun 21:00', 'Mon 00:00'],
                datasets: [{
                    label: 'Requests per second',
                    data: [3.2, 3.6, 3.4, 3.8, 3.5, 3.9, 3.6, 4.0, 3.8, 3.9, 3.7, 4.1, 3.9],
                    borderColor: '#00ff00',
                    backgroundColor: 'rgba(0, 255, 0, 0.1)',
                    fill: false,
                    tension: 0,
                    borderWidth: 2,
                    pointRadius: 0,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        border: {
                            dash: [5, 5], // Dashed border pattern for the y-axis
                            display: true
                        },
                        grid: {
                            color: '#404040',
                            drawTicks: false, // Hide tick marks
                            display: true
                        },
                        beginAtZero: false,
                        min: 2.6,
                        max: 4.0,
                        ticks: {
                            color: '#b0b0b0',
                            callback: function(value) {
                                return value + 'k';
                            }
                        }
                    },
                    x: {
                        ticks: {
                            color: '#b0b0b0'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.raw + 'k requests';
                            }
                        }
                    }
                }
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>