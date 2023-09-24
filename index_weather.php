<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.1.1-web/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.2.32/vue.cjs.js" charset="utf-8"></script>
    <title>Modul 4 Pemrograman Web</title>
</head>

<body>
    <div class="dropdown">
        <nav>
            <img src="images/logoweb.jpg">
            <ul>
                <li><a href="#">Kategori <i class="fa-solid fa-caret-down"></i></a>
                    <ul>
                        <li><a href="#">Cloudy</a></li>
                        <li><a href="#">Rain</a></li>
                        <li><a href="#">Summer</a></li>
                        <li><a href="#">Spring</a></li>
                        <li><a href="#">Autumn</a></li>
                    </ul>
                </li>
                <li><a href="profile.php">Profile</i></a></li>
                <li><a href="calculator.php">Calculator</i></a></li>
                <li><a href="table.php">Weather-List</i></a></li>
                <li><a href="form.php">Form</i></a></li>
                <li><a href="index_weather.php">Home</i></a></li>
            </ul>
        </nav>
    </div>

    <div class="sidebar">
        <div class="berita">
            <div class="card-image"> <img src="images/weather.jpg" alt=""></div>
            <p>BREAKING NEWS</p>
            <div class="card-info">
                <ul>
                    <li><a href="https://edition.cnn.com/2022/03/14/weather/cloud-seeding-weather-modification-wxn/index.html">Scientists in the US are flying planes into clouds to make it snow more</a></li>
                    <p>Jennifer Gray and Rachel Ramirez</p>
                    <p>March 14, 2022</p>
                    <li><a href="https://edition.cnn.com/travel/gallery/saudi-winter-weather/index.html">Desert snows in Saudi Arabia</a></li>
                    <p>January 21, 2022</p>
                    <li><a href="https://edition.cnn.com/2022/02/02/weather/gallery/winter-storm-february/index.html">Winter storm threatens millions across US</a></li>
                    <p>February 5, 2022</p>
                    <li><a href="https://edition.cnn.com/2022/04/12/weather/weather-extreme-fire-risk-plains-dangerous-outbreak/index.html">'It looks like a pretty bad scenario,' an expert says about today's extreme fire threat</a></li>
                    <p>Caitlin Kaiser and Judson Jones</p>
                    <p>April 12, 2022</p>
                    <li><a href="https://edition.cnn.com/2022/04/11/weather/arkansas-tornado-wxn/index.html">Area near Little Rock, Arkansas, hit by 'large, extremely dangerous' tornado</a></li>
                    <p>Steve Almasy, Brandon Miller and Chris Boyette</p>
                    <p>April 12, 2022</p>
                </ul>
            </div>
        </div>
        <div class="search">
            <input type="text" placeholder="Search">
            <button>
                <i class="fas fa-search" style="font-size: 18px;"></i>
            </button>
        </div>
    </div>

    <div class="container">
        <div class="card-content">
            <div class="card">
                <div class="card-image"> <img src="images/Tokyo, Jepang.jpg" alt=""></div>
                <div class="card-info">
                    <h3>
                        <h3>Tokyo, Jepang</h3>
                        <p>32°</p>
                        <p>Japan's capital and the world's most populous metropolis. It is also one of Japan's 47 prefectures, consisting of 23 central city wards and multiple cities, towns and villages west of the city center. The Izu and Ogasawara Islands
                            are also part of Tokyo.</p>
                    </h3>
                </div>
            </div>
            <div class="card">
                <div class="card-image"> <img src="images/New York City, Amerika Serikat.jpg" alt=""></div>
                <div class="card-info">
                    <h3>
                        <h3>New York City, Amerika Serikat</h3>
                        <p>20°</p>
                        <p>New York City comprises 5 boroughs sitting where the Hudson River meets the Atlantic Ocean. At its core is Manhattan, a densely populated borough that’s among the world’s major commercial, financial and cultural centers.</p>
                    </h3>
                </div>
            </div>
            <div class="card">
                <div class="card-image"> <img src="images/Los Angeles, Amerika Serikat.jpg" alt=""></div>
                <div class="card-info">
                    <h3>
                        <h3>Los Angeles, Amerika Serikat</h3>
                        <p>18°</p>
                        <p>Los Angeles is a sprawling Southern California city and the center of the nation’s film and television industry. Near its iconic Hollywood sign, studios such as Paramount Pictures, Universal and Warner Brothers offer behind-the-scenes
                            tours. On Hollywood Boulevard.</p>
                    </h3>
                </div>
            </div>
            <div class="card">
                <div class="card-image"> <img src="images/Chicago, Amerika Serikat.jpg" alt=""></div>
                <div class="card-info">
                    <h3>
                        <h3>Chicago, Amerika Serikat</h3>
                        <p>18°</p>
                        <p>Chicago, on Lake Michigan in Illinois, is among the largest cities in the U.S. Famed for its bold architecture, it has a skyline punctuated by skyscrapers such as the iconic John Hancock Center, 1,451-ft. Willis Tower (formerly
                            the Sears Tower) and the neo-Gothic Tribune Tower.</p>
                    </h3>
                </div>
            </div>
            <div class="card">
                <div class="card-image"> <img src="images/London, Britania Raya.jpg" alt=""></div>
                <div class="card-info">
                    <h3>
                        <h3>London, Britania Raya</h3>
                        <p>25°</p>
                        <p>London, the capital of England and the United Kingdom, is a 21st-century city with history stretching back to Roman times. At its centre stand the imposing Houses of Parliament, the iconic ‘Big Ben’ clock tower and Westminster
                            Abbey, site of British monarch coronations.</p>
                    </h3>
                </div>
            </div>
        </div>
        <div class="pagination">
            <li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
            <li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
            <li class="page-item dots"><a class="page-link" href="#">...</a></li>
            <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
            <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
            <li class="page-item dots"><a class="page-link" href="#">...</a></li>
            <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
            <li class="page-item next-page"><a class="page-link" href="#">Next</a></li>

        </div>
    </div>

    <section id="footer">
        <div class="footer container">
            <div class="brand">
                <h1>Muhammad Rizal Rifaldi</h1>
            </div>
            <div class="social-icon">
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/clouds/344/facebook-new.png" width="100px" height="100px" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/clouds/344/twitter.png" width="100px" height="100px" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/clouds/344/instagram-new--v3.png" width="100px" height="100px" /></a>
                </div>
                <div class="social-item">
                    <a href="#"><img src="https://img.icons8.com/clouds/344/github.png" width="100px" height="100px" /></a>
                </div>
            </div>
            <p>Copyright © 2022 Muhammad Rizal Rifaldi. All rights reserved</p>
        </div>
    </section>

</body>

</html>