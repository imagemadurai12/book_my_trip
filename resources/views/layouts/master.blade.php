<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> BookMyTrip | Home </title>
    <link href="/assets/css/indexStyle.css" rel="stylesheet" />
    <link href="/assets/css/blogs.css" rel="stylesheet"/>
    <link href="/assets/css/blogCreate.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/assets/css/showBlog.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>
</head>

<body>
    <div id="wrapper">
        <style>
            .login-credentials-container{
                /* background-color: red; */
            }
            header .grid1440
            {
                height: 100%;
                width: 80%;
                /* background-color: purple; */
                position: relative;
            }
            header .grid1440 .login-credentials-container{
                position: absolute;
                top:0%;
                right:0%;
            }
        </style>
        
        <header>
            <div class="grid1440">
                <a href="/" id="logo">
                    <img src="/assets/images/logo.jpg" alt="bookmytrip_logo" height="72">
                </a>
                <div class="login-credentials-container">
                <div id="contact">
                    <p> Call us at (Toll-free) </p>
                    <h3> 1800-500-5555 </h3>
                </div>
                <div id="links">
                    <p> <a href="/login"> Login </a> | <a href="/register"> Sign Up </a> </p>
                </div>
                <div id="searchBar">
                    <form action="" id="searchForm">
                        <input type="submit" value=" " />
                        <input type="text" placeholder="Search the website" />
                    </form>
                </div>
                </div>
            </div>
        </header>

        <nav>
            <div class="grid1440">
                <ul class="mainmenu">
                    <li><a href=""> Hotels </a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#"> International Hotels </a></li>
                                <li><a href="#"> Luxury Hotels </a></li>
                                <li><a href="#"> Economy Hotels </a></li>
                                <li><a href="#"> Budget Hotels </a></li>
                                <li><a href="#"> Offers on Hotels </a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href=""> Flights </a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#"> International Flights </a></li>
                                <li><a href="#"> Domestic Flights </a></li>
                                <li><a href="#"> Private Jets </a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href=""> Offers </a>
                        <div class="submenu">
                            <ul>
                                <li><a href="#"> Weekend Offers </a></li>
                                <li><a href="#"> Package Offers </a></li>
                                <li><a href="#"> First time user offers </a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href=""> Vacations </a></li>
                    <li><a href=""> Travel Guides </a></li>
                    <li><a href="/blogs"> Blogs </a></li>
                </ul>
            </div>
        </nav>
        <!-- Header end -->


        
        @yield('contents')



        <!-- Footer part start-->
        <section id="footer">
            <div class="grid1440">
                <ul class="footSection sec1">
                    <li> <a href=""> Company </a> </li>
                    <li> <a href=""> About </a> </li>
                    <li> <a href=""> Terms &amp; Conditions </a> </li>
                    <li> <a href=""> Privacy Policies </a> </li>
                    <li> <a href=""> FAQs </a> </li>
                    <li> <a href=""> Careers </a> </li>
                </ul>
                <ul class="footSection sec2">
                    <li> <a href=""> Book Flights </a> </li>
                    <li> <a href=""> Book Hotels </a> </li>
                    <li> <a href=""> Book Buses </a> </li>
                    <li> <a href=""> Refund Policies </a> </li>
                    <li> <a href=""> Help &amp; Support </a> </li>
                </ul>
                <ul class="footSection sec3">
                    <li> <a href=""> Follow Us </a> </li>
                    <li>
                        <a href=""> <span class="socialmedia sm1"> </span> </a>
                        <a href=""> <span class="socialmedia sm2"> </span> </a>
                        <a href=""> <span class="socialmedia sm3"> </span> </a>
                        <a href=""> <span class="socialmedia sm4"> </span> </a>
                        <a href=""> <span class="socialmedia sm5"> </span> </a>
                    </li>
                </ul>
                <ul class="footSection sec4">
                    <li> <a href=""> Subscribe to newsletter </a> </li>
                    <li>
                        <p> If you want to get alerts about our offers and keep in touch, subscribe to our newsletter below </p>
                    </li>
                    <li>
                        <form action=""> <input type="text" placeholder="Enter your email" /><input type="submit" /> </form>
                    </li>
                </ul>
            </div>
        </section>

        <section id="copyright">
            <div class="grid1440">
                <p> &copy; Copyright 2019. All rights reserved. </p>
            </div>
        </section>

    </div>
    <!-- Footer start -->
    <script src="/assets/js/carouselScript.js"> </script>
    <script src="/assets/js/parallaxScript.js"> </script>
    <script src="/assets/js/loaderScript.js"> </script>
    <script src="/assets/js/uiScript.js"> </script>
</body>

</html>