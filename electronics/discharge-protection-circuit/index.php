<!DOCTYPE HTML>
<html>
    <head>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/includes.html'); ?>
    </head>
    <body>
        <?php include($_SERVER['DOCUMENT_ROOT'].'/nav.html'); ?>
        <link rel="stylesheet" href="css/page.css">

        <div class="homeImg container-fluid">
                <div class="homeDiv center">
                        <h1 class="titleMain cenX white">DISCHARGE PROTECTION CIRCUIT</span></h1>
                        <h3 class="regTitle cenX white">For 18650 Lithium-ion Cells</span></h3>
                </div>

                <div class="cenX padB60 homeSouth w100">
                    <h3 class="regTitle white">Using only low level components to achieve scalability and low cost</h3>
                </div>

        </div>

        <div class="container-fluid backDark sec">
            <div class="container">
                <h3 class="subTitle white">IDEA</h3>
                <p class="subText white extPad">Lithium battery technology is
                    widely used in mobile devices today because of its high
                    energy density. The same cells used in laptop batteries
                    can be configured to power cars, houses, virtually anything.
                     The only problem is that every battery pack has custom
                     protection circuits made for its specific configuration.
                     In order to assemble my own battery packs, I must create
                      these circuits myself. Therefore, I made a discharge protection
                      design using only low level components that is easily
                      scalable for any configuration I want to make (just change
                       one resistor!). As well, my circuit has an ultra low
                       current consumption of 30μA max, and an auto shutoff for
                       ZERO current draw in the “off” state. </p>
            </div>
        </div>

        <div class="container-fluid sec">
            <div class="container">
                <h3 class="subTitle">WHY?</h3>
                <p class="subP">Lithium ion batteries should not go lower
                    than 2.5V. When a device is “drained”, the batteries
                    actually still have some charge left. However, if we
                    continue using them at this voltage, they may become
                    unusable in the future. </p>
            </div>

            <div class="container tiles">
                <div class="row pad">
                    <div class="col-md">
                        <h3 class="subTitle spa5 padL0">CYCLES</h3>
                        <p>
                            the 2.5V cutoff is safely handled at 2.62V,
                            increasing life cycles of battery (single cell model)</p>
                    </div>
                    <div class="col-md">
                        <h3 class="subTitle spa5 padL0">EFFICIENT</h3>
                        <p>Maximum 30μA current, no relays<br/><br/>
                            Auto shutoff means ZERO quiescent current</p>
                    </div>

                </div>
                <div class="row pad padB60">
                    <div class="col-md">
                        <h3 class="subTitle padL0 spa5">SCALABLE</h3>
                        <p>Change one resistor, design any pack up to 30V 45A<br/><br/>
                        For increased specs, replace one mosfet / add more<br/></p>
                    </div>
                    <div class="col-md">
                        <h3 class="subTitle padL0 spa5">LOW COST</h3>
                        <p>Using basic logic level components<br/><br/>
                            7 resistors, 1 op amp, zener diode, NPN transistor, p-channel mosfet and a switch.</p>
                    </div>
                </div>
            </div>

            <div class="container sche">
                <h3 class="subTitle">SCHEMATIC (ROUGH)</h3>
                <p class="subP">Here is the first *rough* design schematic. On the right, you can see *my attempt*
                at explaining the features of the circuit. I am working on a clean, properly labeled design currently.</p>

                <img src="/images/IMG_1731.jpg" width="90%" class="centerImg padY40"></img>
            </div>

            <div class="container scal">
                <h3 class="subTitle">SCALABILITY</h3>
                <p class="subP">Design a pack of any size and reuse the circuitry.</p>

                <p class="subP">What happens if you want a higher voltage than 3.7? You
                    simply add more batteries in series. For example, two in series
                    would be nominal 7.4V (3.7 x 2). However, my circuit is designed
                    to shut off at 2.62V. In order to achieve the same result with
                    two batteries in series we should take our original shutoff (2.62V)
                    and multiply it by the number of batteries in series.<br/><br/>
                    In our case we get 5.24V as our shutoff.<br/><br/>The op amp is our comparator
                    of the circuit, and has a reference of 0.555V generated by the zener diode.
                    It will shut off power from the battery when its non-inverting input is 0.555V. Using the
                    voltage divider formula below I have simplified the equation to find
                    R1 for our circuit.</p>
                <p class="subP bold">
                    R1 = ( ( Vin / 0.555 ) * 180 000 ) - 180 000
                </p>

                <p class="subP">
                    Vin = desired shut off voltage (2.62V x number of batteries in series)<br/><br/>
                    We assume the second resistor is 180kΩ, and that our output from the zener reference will be 0.555V.
                </p>

                <p class="subP bold">
                    This simplifies things to an easy calculation where we can replace one resistor value R1 in the circuit for virtually any design.
                </p>

            </div>

            <div class="container">
                <h3 class="subTitle">ULTRA-LOW CURRENT</h3>
                <p class="subP">**No relays** I found many circuits online using relays, which are
                    great for high loads but draw much more current, even in the off state! You
                    can find relays in the low mA range, around 10 to 20mA but this does not
                    compare to 30μA. My circuit achieves this by using mosfets, with the
                    gate driven by an op amp. The mosfet I used is able to supply 30V and 45A,
                     so it is well beyond the scope of small projects. </p>

                <!-- <img src="images/timed.gif" width="90%" class="centerImg padY40"></img> -->
            </div>

            <div class="container">
                <h3 class="subTitle">LARGE BATTERY PACKS</h3>
                <p class="subP">If you would like to make large battery packs over these specs,
                    you would obviously have to get a more beefy mosfet. As well, replace R1
                    in the voltage divider with the formula presented in the scalability section. </p>

                <!-- <img src="images/advanced.gif" width="90%" class="centerImg padY40"></img> -->
            </div>

            <div class="container imp">
                <h3 class="subTitle">IMPROVEMENTS</h3>
                <p class="subP">The circuit is still in its first design stage. I still have to
                    complete some basic functionality but so far I am getting promising results.<br/><br/>
                    I still need to implement:</p>

                    <ul class="listPad">
                        <li>Power button turn off when circuit is on (toggle state)</li>
                        <li>Reverse polarity protection (diode)</li>
                        <li>Overcurrent protection</li>
                    </ul>
            </div>
        </div>

        <div class="container-fluid btnLinks extPad">
            <div class="container">
                    <div class="cenDiv">
                        <div class="leftCenter">
                            <h3 class="sub2">CONTRIBUTE</h3>
                            <p class="subText padB20">If any aspects of this project interest you, contact me for
                            more details, a detailed schematic, or to participate!</p>
                            <a class="btn btn-secondary btn-lg w100" href="/contact" role="button">Contact Me</a>
                        </div>
                    </div>
            </div>
        </div>

        <?php include($_SERVER['DOCUMENT_ROOT'].'/footer.html'); ?>
    </body>
</html>
