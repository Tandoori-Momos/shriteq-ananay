<?php
/*
  @Author: ananayarora
  @Date:   2016-10-21T02:22:54+05:30
  @Last modified by:   ananayarora
  @Last modified time: 2016-10-21T07:05:22+05:30
*/


    require("dash_inc.php");
?>
<center>
    <link rel="stylesheet" href="css/voyage.css" media="screen" title="no title">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/voyage.js"></script>
    <div class="voyage-page">
            <div class="where">
                <div class="tile tile1" <?php if (isset($_GET['location'])){echo "style='display:none'";}?>>
                    <br />
                    <h1>Where do you wanna go?</h1>
                    <br />
                    <input type="text" id="place" name="place" placeholder="New York, United States" value="">
                    <br />
                    <br />
                    <input type="text" id="start" name="start" placeholder="Start Date (DD-MM-YYYY)" value="">
                    <br />
                    <br />
                    <input type="text" id="end" name="end" placeholder="End Date (DD-MM-YYYY)" value="">
                    <br />
                    <br />
                    <center>
                        <div class="voyage_button go1">Go</div>
                    </center>
                </div>
                <div class="tile tile2"  <?php if (isset($_GET['location'])){echo "style='display:block'";}?>>
                    <br>
                    <h3>Flights</h3>
                    <br>
                  
                    
                    <center><div class="line"></div></center>
                      <div class = "flights">
                        <div class  = "flight-info"><span>RK141 &nbsp &nbsp &nbsp &nbsp New Delhi - New York  &nbsp &nbsp &nbsp &nbsp 1:45 PM</span></div>
                        <div class  = "flight-info"><span>MH580 &nbsp &nbsp &nbsp &nbsp New Delhi - New York  &nbsp &nbsp &nbsp &nbsp 12:30 AM</span></div>
                        <div style = "border: none;" class  = "flight-info"><span>HH371 &nbsp &nbsp &nbsp &nbsp New Delhi - New York  &nbsp &nbsp &nbsp &nbsp 9:45 AM </span></div>
                    </div>

                    <br />
                    <h3>Hotels</h3>
                    <br />
                    <center>
                    <div class="tile spot">
                            <img src="https://images.trvl-media.com/hotels/1000000/10000/8800/8736/8736_108_z.jpg" class="img" alt="" />
                            <div class="name">
                                Exun Stay - 4.98/5
                         </div>
                                                        
                        </div><br>
                        <div class="tile spot">
                            <img src="https://exp.cdn-hotels.com/hotels/3000000/2920000/2917600/2917525/2917525_139_z.jpg" class="img" alt="" />
                            <div class="name">
                                Distrikt Hotel - Good - 3.8/5
                            </div>
                        </div>
                    
                    </center>
                    <br />
                    <h3>Tourist Attractions</h3>
                    <br />
                    <center><div class="line"></div></center>
                    <br />
                    <center>
                        <div class="tile spot">
                            <img src="http://img.timeinc.net/time/photoessays/2008/new_york/ny_central_park.jpg" class="img" alt="" />
                            <div class="name">
                                Central Park
                            </div>
                        </div>
                        <br />
                        <div class="tile spot">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7_a0PevoZ5SVAhgU0m0R8fzow7LX1AxXTf_345kw5xRfexQ5RnQ55Jg" class="img" alt="" />
                            <div class="name">
                                Statue of Liberty
                            </div>
                        </div>
                    </center>
                    <h1></h1>
                </div>
                <div class="tile tile3">
                    <h3>Friends in New York, United States</h3>
                    <p></p>
                </div>
        </div>
    </div>
</center>
