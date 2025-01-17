<!DOCTYPE HTML>
<html>
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes.html'); ?>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.html'); ?>
        <link rel="stylesheet" href="css/page.css">

        <div class="homeImg">
            <div class="homeDiv center">
                    <h1 class="titleMain cenX"><span class="backW">A* PATHFINDING VISUALIZATION</span></h1>
                    <h3 class="regTitle cenX"><span class="backW">Java and C</span></h3>
            </div>

            <div class="cenX padB60 homeSouth">
                <a class="btn btn-primary btn-lg" href="releases/APathfinding-Visual.jar" role="button" download>Download .jar</a>
                <a class="linkGrey" id="srcCode" href="https://github.com/DevonCrawford/A-Pathfinding-Visualization">View source code</a>
            </div>
        </div>

        <div class="container-fluid backDark sec">
            <div class="container">
                <h3 class="subTitle white">IDEA</h3>
                <p class="subText white extPad">I made this visualization to show
                    the beauty of pathfinding. You can modify all major features
                    of my algorithm through the graphics interface. Create maps
                    in the grid easily and test the efficiency of the algorithm
                    on the fly. Try it in diagonal mode, or non diagonal, variable
                    speed, show steps or timed efficiency. If you zoom far enough
                    on the mouse wheel you can view all calculations as they occur
                    for "F cost" (top left), "G cost" (bottom left) and "H cost" (bottom right).</p>
            </div>
        </div>

        <div class="container-fluid sec">
            <div class="container">
                <h3 class="subTitle">BASIC CONTROLS</h3>
                <p class="subP">You must create a map to start the pathfinding. The start node is
                    blue, end node is red and the walls are black.<br/><br/>To create nodes:</p>

                    <ul class="listPad minpadY">
                        <li>Start: hold 's' + left click</li>
                        <li>End: hold 'e' + left click</li>
                        <li>Wall: left click</li>
                    </ul>
                    <p class="subP">To delete nodes:</p>
                    <ul class="listPad minpadY">
                        <li>Same as creation, except right click!</li>
                    </ul>
            </div>

            <div class="container">
                <h3 class="subTitle">DIAGONAL</h3>
                <p class="subP">My algorithm supports borth diagonal and non-diagonal pathfinding.<br/><br/>
                    Simply check the "diagonal" box in the control panel (bottom left of the screen).</p>
                    <img src="images/diagonal.gif" width="90%" class="centerImg padB40"></img>
            </div>

            <div class="container">
                <h3 class="subTitle">VARIABLE SPEED</h3>
                <p class="subP">You may change the speed of the visualization during runtime.</p>
                <ul class="listPad minpadY">
                    <li>By default, speed is 50%</li>
                </ul>
                <p class="subP">Notice: speed control only works when <code>showSteps</code> is true.
                                <br/>If <code>showSteps</code> is false, that leads to the next section..</p>
            </div>

            <div class="container">
                <h3 class="subTitle">TIMED EFFICIENCY</h3>
                <p class="subP">You may choose to view a step-by-step process of the algorithm by selecting <code>showSteps</code> box at the bottom left.</p>
                <ul class="listPad minpadY">
                    <li>If showSteps is false, the algorithm will skip visuals until the end, and process as fast as possible.</li>
                </ul>
                <p class="subP">Also known as <code>Timed Efficiency</code>. This is useful when you want to analyze the efficiency of the algorithm in various
                     conditions, map sizes and so on. The example below shows <code>showSteps</code> as false, where it times the algorithm and outputs <code>Completed in 4ms</code>
                     at the bottom left.</p>
                <img src="images/timed.gif" width="90%" class="centerImg padY40"></img>
            </div>

            <div class="container">
                <h3 class="subTitle">ADVANCED</h3>
                <p class="subP">Those are the basics! Now you can be free to make the map as complicated as you desire. (Not really, because making the map too large will overflow the stack).</p>

                <img src="images/advanced.gif" width="90%" class="centerImg padY40"></img>
            </div>

            <div class="container">
                <h3 class="subTitle">ZOOM</h3>
                <p class="subP">You can (kind of) zoom with the scroll wheel. I wouldn't really advise it.
                     It does not zoom into your mouse, only towards the top left corner, and
                     making the map too big will crash the program. This needs some work.
                     However, If you zoom in far enough you can view each nodes information.
                     The top left is the "F cost", bottom left is "G cost" and bottom right
                     is "H cost". I will work on properly implementing a zoom feature soon.</p>
            </div>

            <div class="container">
                <h3 class="subTitle">COMMAND LINE (C)</h3>
                <p class="subP">*Calling all low-level devs*. I recreated my A* pathfinding algorithm in C!
                    Instead of a graphics interface this is meant to run on the command line and
                    analyze a maze given by a .txt file. '#' characters are walls, 'O' characters
                    are open, 'S' is the start and 'G' is the end. Visit the <a href="#">github page</a> for details
                    on how to run, and obtain the executables.</p>
                <img src="images/c.PNG" width="90%" class="centerImg padY40"></img>
            </div>
        </div>

        <div class="container-fluid btnLinks extPad">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 bot">
                        <div class="leftCenter">
                            <h3 class="sub2">FOUND A BUG?</h3>
                            <p class="subText">Let me know on github</p>
                            <a class="btn btn-success btn-lg w100" href="https://github.com/DevonCrawford/A-Pathfinding-Visualization/issues" role="button">Issues</a>
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
                            <a class="btn btn-primary btn-lg w100" href="releases/APathfinding-Visual.jar" role="button" download>Download .jar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include($_SERVER['DOCUMENT_ROOT'].'/footer.html'); ?>
    </body>
</html>
