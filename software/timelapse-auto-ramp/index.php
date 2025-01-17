<!DOCTYPE HTML>
<html>
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes.html'); ?>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.html'); ?>
        <link rel="stylesheet" type="text/css" href="css/page.css"/>

        <link href="/lightbox/ekko-lightbox.css" rel="stylesheet">

            <div class="container-fluid">
                <div class="container ">
                    <div class="row">
                        <div class="col topPad cenX">

                                <h1 class="titleMain">TIMELAPSE AUTO-RAMP</h1>
                                <h3 class="regTitle">a Photoshop Plugin | Java</h3>


                        </div>
                        <!-- <div class="col-4 topPad">

                            yoyoyo
                        </div> -->
                    </div>

                    <div class="cenX padB60">
                        <a class="btn btn-primary btn-lg" href="releases/proRAW.jar" role="button" download>Download V1.0 .jar</a>
                        <a class="linkGrey" id="srcCode" href="https://github.com/DevonCrawford/Timelapse-Auto-Ramp-Photoshop-Plugin">View source code</a>
                    </div>

                    <div class="row exText">
                        <div class="col-4">
                            <h5 class="cenX">Original</h5>
                        </div>
                        <div class="col-4">
                            <h5 class="cenX">VS</h5>
                        </div>
                        <div class="col-4">
                            <h5 class="cenX">Processed</h5>
                        </div>
                    </div>
                    <video width="100%" autoplay loop class="round3 vid">
                        <source src="results/Timelapse-auto-ramp-compressed-3.mp4"></source>
                    </video>
                </div>
            </div>

            <div class="container-fluid theoryDiv sec">
                <div class="container">
                    <h3 class="subTitle white">THEORY</h3>
                    <p class="subText white extPad" id="desc">My algorithm simply looks for changes in shutter speed,
                         aperture, and iso, then mathematically calculates the
                         exposure offset required to match the difference between
                         a change in two pictures, evenly applies the exposure change
                         across leading images, and writes new exposure to the
                         RAW (.xmp) files. This allows photoshop or after effects
                         to access my calculations with no issue, and use the ramped
                         values when rendering. This makes best use in difficult
                         lighting conditions such as a timelapse of a sunrise, where
                         your best option is to change the exposure manually, as the
                         sun rises. If you did not use this technique you will notice
                         flickering on auto mode, or stick with one setting on manual,
                         making some parts underexposed and others overexposed.</p>
                </div>
            </div>

            <div class="container-fluid sec">
                <div class="container">
                    <h3 class="subTitle">HOW TO SHOOT</h3>
                        <ul class="listPad">
                            <li>manually change camera settings when shooting to
                                achieve good lighting (this will create a flicker
                                during the timelapse, but my program is made to even
                                out this change)</li>
                            <li>edit images in photostop lightroom, be sure to SAVE
                                METADATA TO FILE, which creates .xmp files for my
                                program to use</li>
                        </ul>
                </div>

                <div class="container">
                    <h3 class="subTitle">HOW TO USE</h3>
                        <ul class="listPad">
                            <li>Close photoshop (After saving metadata)</li>
                            <li>open up command prompt / terminal</li>
                            <li>cd to location of program (ex. cd Downloads)</li>
                            <li>run by typing <code>java -jar proRAW.jar</code></li>
                            <li>input the file path of the first image</li>
                            <li>Open photoshop and changes will be applied!</li>
                        </ul>
                </div>

                <div class="container">
                    <img src="images/cmd.PNG" width="90%" class="centerImg padB40"></img>
                </div>
            </div>

            <!-- <div class="container-fluid sec">
                <div class="container">
                    <h3 class="subTitle">RESULTS</h3>
                    <div class="row justify-content-center">
                        <div class="row">
                            <a href="results/sunset-result.mp4" data-toggle="lightbox" data-type="video" data-gallery="video-gallery" class="col-sm-4">
                                <img src="results/thumbs/sunset-cmp.jpg" class="img-fluid">
                            </a>
                            <a href="https://www.youtube.com/watch?v=tPx9ZOmckCc" data-toggle="lightbox" data-gallery="video-gallery" data-type="youtube" class="col-sm-4">
                                <img src="/images/IMG_1083.jpg" class="img-fluid">
                            </a>
                            <a href="/timelapses/DamBeach.mp4" data-toggle="lightbox" data-gallery="video-gallery" data-type="video" class="col-sm-4">
                                <img src="/images/IMG_1691.jpg" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->

            <!--  -->
            <!-- btnLINKS -->
            <div class="container-fluid btnLinks extPad">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 bot">
                            <div class="leftCenter">
                                <h3 class="sub2">FOUND A BUG?</h3>
                                <p class="subText">Let me know on github</p>
                                <a class="btn btn-success btn-lg w100" href="https://github.com/DevonCrawford/Timelapse-Auto-Ramp-Photoshop-Plugin/issues" role="button">Issues</a>
                            </div>
                        </div>
                        <div class="col-md-4 bot">
                            <div class="leftCenter">
                                <h3 class="sub2">CONTRIBUTE</h3>
                                <p class="subText">Take part in the project</p>
                                <a class="btn btn-secondary btn-lg w100" href="/contact" role="button">Contact Me</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="leftCenter">
                                <h3 class="sub2">GET FOR FREE</h3>
                                <p class="subText">No install necessary</p>
                                <a class="btn btn-primary btn-lg w100" href="releases/proRAW.jar" role="button" download>Download .jar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <p class="subText extPad">Note: This program currently has no GUI therefore when you
                    click on the .jar file it appears to not open. Make sure
                    you open the file in command prompt following the
                    instructions above.</p>
            </div>

        <?php include($_SERVER['DOCUMENT_ROOT'].'/footer.html'); ?>
        <script src="scripts/mobile.js" type="text/javascript"></script>

        <script src="/lightbox/ekko-lightbox.js"></script>
        <script type="text/javascript">
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
       </script>
    </body>
</html>
