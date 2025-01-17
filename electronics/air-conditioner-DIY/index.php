<!DOCTYPE HTML>
<html>
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes.html'); ?>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.html'); ?>
        <link rel="stylesheet" href="css/page.css">

        <link href="/lightbox/ekko-lightbox.css" rel="stylesheet">

        <div class="container-fluid">
            <div class="container ">
                    <div class=" topPad cenX">

                        <h1 class="titleMain">ARDUINO AIR CONDITIONER</h1>

                        <div class="cenX">
                            <h3 class="regTitle">Watch the Video</h3>
                            <div class="aspect-ratio">
                                <iframe width="960"  height="540" src="https://www.youtube.com/embed/_vQMtW00UQo" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>

                        <h3 class="subTitle ">As seen on..</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fofficial.arduino%2Fposts%2F2096778760348432&width=500" width="100%" height="371" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

                            </div>
                            <div class="col-md-6">
                            <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">These college students built an air conditioner for their dorm using cardboard + Arduino: <a href="https://t.co/36cDEbeAwT">https://t.co/36cDEbeAwT</a> <a href="https://t.co/Fsb8hUBDcA">pic.twitter.com/Fsb8hUBDcA</a></p>&mdash; Hackster.io (@Hacksterio) <a href="https://twitter.com/Hacksterio/status/920382531836538886?ref_src=twsrc%5Etfw">October 17, 2017</a></blockquote>

                            </div>
                        </div>
                    </div>
            </div>
        </div>


        <div class="container-fluid backDark sec">
            <div class="container">
                <h3 class="subTitle white">IDEA</h3>
                <p class="subText white extPad">What started out as a joke
                     turned into a reality. Last year I lived in the dorms,
                     and our room had an uncontrolled furnace. The room was
                     around 26 to 28 degrees celsius at all times, so I thought
                     I would do something about it. The idea was to take the
                     cold winter air from outside and distribute it into two
                      separate rooms automatically, driven by temperature
                       sensors. But we had to do it cheap, so we used cardboard
                        for the ventilation shafts and hot glued it to the
                         ceiling. This is probably what attracted a lot of
                         attention, for this sketchy yet functional build. </p>
            </div>
        </div>

        <div class="container-fluid sec">
            <div class="container">
                <h3 class="subTitle">THE BEGINNING</h3>
                <p class="subP">This project sparked my interest in electronics.
                     I want to be able to solve any future problems I encounter
                      with my knowledge of electronics and computer software.
                      This was just the beginning. </p>

                      <div class="row justify-content-center padX60F">
                          <div class="row">
                              <a href="images/first-setup.jpg" data-toggle="lightbox" data-type="image" data-gallery="gal" class="col-sm">
                                  <img src="images/first-setup.jpg" class="img-fluid">
                              </a>


                          </div>
                      </div>
            </div>

            <div class="container tiles">
                <h3 class="subTitle">SETUP</h3>

                    <p class="subP">Arduino makes it very easy to program microcontrollers
                         with basic knowledge of the C language.<br/><br/>
                     I tested out each component individually, starting with the
                     display, mosfets, switches, and fans. Once I was confident in
                     the operation of each component I put it all together on one
                      breadboard. The circuit build itself was quite simple and took
                      only a few hours. I did brake some parts however, and had
                      to wait for new ones to ship.</p>

                      <div class="row justify-content-center padX60F">
                          <div class="row">
                              <a href="images/fan-setup.jpg" data-toggle="lightbox" data-type="image" data-gallery="gal" class="col-md-3 col-sm-6">
                                  <img src="images/fan-setup.jpg" class="img-fluid">
                              </a>
                              <a href="images/testing-mosfet.jpg" data-toggle="lightbox" data-type="image" data-gallery="gal" class="col-md-3 col-sm-6">
                                  <img src="images/testing-mosfet.jpg" class="img-fluid">
                              </a>
                              <a href="images/arduino.jpg" data-toggle="lightbox" data-type="image" data-gallery="gal" class="col-md-3 col-sm-6">
                                  <img src="images/arduino.jpg" class="img-fluid">
                              </a>
                              <a href="images/switches.jpg" data-toggle="lightbox" data-type="image" data-gallery="gal" class="col-md-3 col-sm-6">
                                  <img src="images/switches.jpg" class="img-fluid">
                              </a>

                          </div>
                      </div>
            </div>

            <div class="container sche">
                <h3 class="subTitle">CHALLENGES</h3>
                <p class="subP">The real challenge was
                figuring out how to implement the electronics in our environment.
                Bare wires were duct taped to the walls for fan control and
                temperature readings. Fans were also duct taped into a cardboard
                frame, then taped into appropriate ventilation shafts.</p>

                <p class="subP">There was also some strange noise interference
                    on the temperature sensors. Occasionally dropping from 20C to -40C.
                    The noise is most likely created from the bare wires which span about
                    8 feet to the temperature sensor, and interference on the breadboard.
                    Given that I currently could not solve the problem in hardware,
                     I wrote a function that gets 8 temperature readings (ticks) over 4 seconds,
                     calculates the average, and discards any values which offset the average
                     by 5 Celsius. After approximately 8 seconds the temperature reading
                     appeared very accurate, and was enough to continue our build.</p>

                     <div class="row justify-content-center padX60F">
                         <div class="row">

                             <a href="images/cardboard-fan.jpg" data-toggle="lightbox" data-type="image" data-gallery="gal" class="col-sm">
                                 <img src="images/cardboard-fan.jpg" class="img-fluid">
                             </a>

                             <a href="images/glue-to-ceiling.jpg" data-toggle="lightbox" data-type="image" data-gallery="gal" class="col-sm">
                                 <img src="images/glue-to-ceiling.jpg" class="img-fluid">
                             </a>
                             <a href="images/wiring.jpg" data-toggle="lightbox" data-type="image" data-gallery="gal" class="col-sm">
                                 <img src="images/wiring.jpg" class="img-fluid">
                             </a>

                         </div>
                     </div>


            </div>

            <div class="container scal">
                <h3 class="subTitle">RESULTS</h3>
                <p class="subP">Surprisingly, the computer fans were able to keep both rooms at
                    a steady 20 Celsius. I was not sure if the airflow was enough to combat the
                    heater, but it appears so. You can control the “set temperature” with the
                    four switches on the breadboard if you would like to make changes. Although
                    this project was quite simple, it really got me thinking just how many problems
                     I may be able to solve in the real world, with electronics and software. There
                      seems to be no real limit. This was my first project with an Arduino, and my
                       first experience making a functional circuit driven by a microcontroller
                       to solve a real life problem. Looking forward to more advanced projects
                       in the future!</p>

                       <div class="row justify-content-center padX60F">
                           <div class="row">
                               <a href="images/final-1.jpg" data-toggle="lightbox" data-type="image" data-gallery="gal" class="col-sm">
                                   <img src="images/final-1.jpg" class="img-fluid">
                               </a>
                               <a href="images/final-2.jpg" data-toggle="lightbox" data-type="image" data-gallery="gal" class="col-sm">
                                   <img src="images/final-2.jpg" class="img-fluid">
                               </a>

                           </div>
                       </div>
            </div>
        </div>

        <!-- btnLINKS -->
        <div class="container-fluid btnLinks extPad">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 bot">
                        <div class="leftCenter">
                            <h3 class="sub2">CODE</h3>
                            <p class="subText">View the code on github</p>
                            <a class="btn btn-success btn-lg w100" href="https://github.com/DevonCrawford/Air-Conditioner-Arduino" role="button">Source Code</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="leftCenter">
                            <h3 class="sub2">WATCH</h3>
                            <p class="subText">video about the build process</p>
                            <a class="btn btn-danger btn-lg w100" href="https://www.youtube.com/watch?v=_vQMtW00UQo" role="button">YouTube Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include($_SERVER['DOCUMENT_ROOT'].'/footer.html'); ?>
        <script src="scripts/widgets.js" charset="utf-8"></script>

        <script src="/lightbox/ekko-lightbox.js"></script>
        <script type="text/javascript">
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
       </script>
    </body>
</html>
