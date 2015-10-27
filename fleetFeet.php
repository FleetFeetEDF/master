<?php 
    // $servername = "faure.cs.colostate.edu";
    // $username = "MethaneAnalysis";
    // $password = "MethProj!5";

    // $connection = new mysqli($servername, $username, $password);

    // //check connection
    // if (mysqli_connect_error())
    // {
    //     die("Connection failed: ");
    // }

    // echo "faure Connected successfully";
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <meta name="keywords" content="EDF, edf, Methane, leak, leaks, methane leak, climate change, big data">
        <meta name="description" content="Natural gas heats our homes and cooks our dinner. But when natural gas—mostly methane—leaks into the air, it's a big problem for the climate. So EDF and Google Earth Outreach teamed up to build a faster, cheaper way to find and assess leaks under our streets and sidewalks. We tested it as part of a pilot mapping program, and here's what we found.">
        <meta name="author" content="Big Data group, CS Dept., CSU">
        <!-- <meta http-equiv="refresh" content="3"> -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <!-- <meta http-equiv="refresh" content="3"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        
        <title>fleetFeet | BDG</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
       <link rel="shortcut icon" type="image/x-icon" href="img/kiddie.png" />
        <link rel="stylesheet" href="css/general-style.css"/>
        <link rel="stylesheet" href="css/ion.rangeSlider.css">
        <link rel="stylesheet" type="text/css" href="css/fleetFeet.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/ion.rangeSlider.skinNice.css">
        <link rel="stylesheet" type="text/css" href="slick/slick.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="slick/slick.min.js">
        </script>

        <script src="js/moment.js"></script>
        <style>


        </style>
    </head>
<body>       
   
  <div class="page-container">
        
        <!-- Navigation Bloc -->
        <div id="nav-bloc" class="bloc bgc-1 d-bloc animated">

            <div class="container">
               
                <nav class="navbar">
                    
                    <div class="navbar-header">
                        
                        <a class="navbar-brand"  href="/">fleetFeet</a>
                        <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
                            <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                        </button>
                    
                    </div>
                    
                    <div class="collapse navbar-collapse navbar-1">
                    
                        <ul class="site-navigation nav">
                            <li>
                                <a href="fleetFeet.php">Home</a>
                            </li>
                            <li>
                                <a href="about.php">About</a>
                            </li>
                            <li>
                                <a href="documents.php">Documents</a>
                            </li>
                            <li>
                                <a href="download.php">Download</a>
                            </li>
                            <li>
                                <a href="people.php">People</a>
                            </li>
                        </ul>
                    
                    </div>
                
                </nav>
            
            </div>
        </div>


        <!-- Navigation Bloc END -->

        <!-- BODY -->
        
        <div class="bloc  l-bloc" id="bloc-1">
            <div class="container bloc-lg">
                <div class="data">

                </div>
                <hr class="featurette-divider">
                
                <div id="map">
                    <!-- Map -->
                </div>
                
                <div class="mapTool">
                    <img src="" width="55">
                    <img src="http://www.iconsplace.com/download/black-open-in-browser-256.png" width="55">
                    <img src="" width="55">
                    <img src="http://downloadicons.net/sites/default/files/ray-standard-map-icons-27560.png" width="55">
                    <img src="" width="55">
                    <img src="http://icons.iconarchive.com/icons/icons8/windows-8/512/Maps-Center-Direction-icon.png" width="55">
                    <img src="" width="55">
                    <img src="http://uxrepo.com/static/icon-sets/typicons/svg/direction-outline.svg" width="55">
                    <img src="" width="55">
                    <img src="http://cdn.1001freedownloads.com/vector/thumb/63372/land-parcels.png" width="55">
                    <img src="" width="55">
                    <img src="http://freeiconbox.com/icon/256/33083.png" width="55">
                    <img src="" width="55">
                    <img src="http://simpleicon.com/wp-content/uploads/map-marker-20.svg" width="59">
                    <img src="" width="55">
                    <img src="http://freeiconbox.com/icon/256/21857.png" width="59">
                    <img src="" width="55">
                    <img src="https://cdn2.iconfinder.com/data/icons/flat-academic-icons/300/flat-globe-512.png" width="55">
                    <img src="" width="55">
                    <img src="http://simpleicon.com/wp-content/uploads/map-marker-4.svg" width="55">
                </div>


                <div class="timeLine">
                    
                    <input type="text" id="range" name="range" value="">
    
                </div>
                <div class="container0">
                
                </div>
                                <div class="charts">
                    

                </div>
        </div>



        </div>
        <!-- BODY END -->

            <div class="container1">
                
            </div>

            <div class="container2">

            </div>

            <div class="container3">

                <div class="container3-subcontainer1">


                    <div class="container3-about">

                        <div class="container3-about-title">
                            <span id="about"><strong>About</strong></span>

                        </div>
                        <div class="container3-about-image">
                            <div class="container3-about-image-left">
                                <img src="https://s3.amazonaws.com/emma-assets/88e4/eb4823d23a7c6965af2708fcfb90f039/Google-Earth-Outreach275x96.png" alt="google out reach" width="150px">
                            </div>
                            <div class="container3-about-image-right">
                                <img src="https://www.edf.org/cdn/farfuture/Q072T_Hxa2v26JFGnENVn5CQmhKN2lJVxuyvpT_HWus/mtime:1376318730/sites/all/themes/edf/images/footLogo.gif" alt="edf" width="130px">
                            </div>
                        </div>
                        <div class="container3-about-intro">
<span id="intro">Natural gas: Local leaks impact global climate EDF and Google Earth Outreach use new approach to pinpoint climate pollution</span>
                        </div>

                    </div>

                    <div class="container3-documents">
                        <div class="container3-documents-title">
                            <span id="documents"><strong>Documents</strong></span>
                        </div>
                        <div class="container3-documents-link">
                            <br/><br/>
                            <span id="publication"><a href="">Publication</a></span><br/><br/>
                            <span id="photo"><a href="">Photo</a></span>

                        </div>
                    </div>

                </div>
                
                <div class="container3-subcontainer2">

                    <div class="container3-download">
                        <div class="container3-download-title">
                            <span id="download"><strong>Download</strong></span>
                        </div>

                        <div class="container3-download-link">
                            <br/><br/>
                            <span id="sourceCode"><a href="">Code</a></span><br/><br/>
                            <span id="documents_link"><a href="">Documents</a></span>

                        </div>

                    </div>




                    <div class="container3-extra1">
                        <div class="container3-extra1-title">
                            <span id="source"><strong>Source</strong></span>
                        </div>
                        <div class="outLinks">
                            <img src="img/GitHub-Mark-Light-64px.png" alt="GitHub-Mark-Light-64px.png" width="60px">
                        </div>
                        <div class="others"></div>
                    </div>

                </div>

            </div>
    </div>

    <!-- Footer - bloc-10 -->
    <div class="bloc  d-bloc" id="bloc-10">
        <div class="container bloc-sm">
            <div class="bloc-footer">

            <section class="footer-bottom-section">
                <div class="footer-legal">
                    <span class="footer-copyright">Copyright © 2015 Big Data Group. All rights reserved</span>
                    <span><span> | </span><a href="http://www.cs.colostate.edu/~sangmi/dokuwiki/doku.php"><strong>Bid Data Group</strong></a></span><span> |  </span><span><a href="#"><strong>Privacy</strong></a></span>
                </div>
            </section>

            </div>
        </div>
    </div>

        <script src="https://maps.googleapis.com/maps/api/js">
        </script>
        <script>
            var map;
            var marker;
             function initialize(){
                var mapCanvas = document.getElementById('map');
                var mapOptions = {
                    center: new google.maps.LatLng(40.573436, -105.086547),
                    zoom:9,
                    mapTypeId: google.maps.MapTypeId.HYBRID
                }
                map = new google.maps.Map(mapCanvas,mapOptions);

                var newLatLng = {lat:40.573436, lng:-105.086547};
             marker = new google.maps.Marker({
                    position:new google.maps.LatLng(40.573436, -105.086547),
                    map:map,
                    title: 'Hello world'
                });

                marker = new google.maps.Marker({
                    position:new google.maps.LatLng(40.57343600000000000001, -105.78654700000000000001),
                    map:map,
                    title: 'ni hao'
                });



           }
             google.maps.event.addDomListener(window, 'load', initialize);

        </script>

        <script src="js/ion.rangeSlider.min.js"></script>

        <script>
                $("#range").ionRangeSlider({
////////////////////////////date   hours
  
    //                 min: +moment().subtract(12, "hours").format("X"),
    // max: +moment().format("X"),
    // from: +moment().subtract(6, "hours").format("X"),
    // prettify: function (num) {
    //     return moment(num, "X").format("MMM Do, hh:mm A");
    // }
///////////////////////////

//////////////////////////////////date date
    type:"double",
    min: +moment().subtract(1, "years").format("X"),
    max: +moment().format("X"),
    from: +moment().subtract(8, "months").format("X"),
    to:+moment().subtract(5,"months").format("X"),
    prettify: function (num) {
        return moment(num, "X").format("LL");
    }
////////////////////////////////////////////////////////


//////////////////range
                    //     input:"#range",
                    //     type: "double",
                    //     min: 0,
                    //     max: 100,
                    //     from: 50,
                    //     to:60,
                    //     keyboard: true,

                    //     onStart: function (data) {
                    //         console.log("onStart");
                    //     },
                    //     onChange: function (data) {
                    //         console.log("onChange");
                    //     },
                    //     onFinish: function (data) {
                    //         console.log("onFinish");
                    //     },
                    //     onUpdate: function (data) {
                    //         console.log("onUpdate");
                    // }
////////////////////////////range

                });
                // $(function () {

                //     $("#range").ionRangeSlider({
                //         hide_min_max: true,
                //         keyboard: true,
                //         min: 0,
                //         max: 31,
                //         from: 15,
                //         type: 'single',
                //         step: 1,
                //         prefix: "",
                //         grid: true,
                //         onStart: function (data) {
                //             console.log("onStart");
                //         },
                //         onChange: function (data) {
                //             console.log("onChange");
                //         },
                //         onFinish: function (data) {
                //             console.log("onFinish");
                //         },
                //         onUpdate: function (data) {
                //             console.log("onUpdate");
                //     });

                // });
        </script>
            <!-- Footer - bloc-10 END -->
        <script type="text/javascript" src="js/base.js"></script>
</body>
</html>
