<?php include 'header.php'; ?>

<!-- END-HEADER -->
<section class="banner-tems text-center">
    <div class="container">
        <div class="banner-content">
            <h2>RESERVATION</h2>
            <p></p>
        </div>
    </div>
</section>
<!-- RESERVATION -->
<section class="section-reservation-page">
    <div class="container">
        <div class="reservation-page">
            <!-- STEP -->

            <!-- END / STEP -->
            <div class="row">
                <!--  SIDEBAR -->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <!-- SELECT-ROOM -->
                        <div class="reservation-room-selected ">
                            <!-- HEADING -->
                            <h2 class="reservation-heading">Select Rooms</h2>
                            <!-- END / HEADING -->
                            <!-- CURRENT -->
                            <div class="reservation-room-seleted_current bg-blue">
                                <h6>YOU ARE BOOKING ROOM 2</h6>
                                <span>2 Adult, 1 Chirld</span>
                            </div>
                            <!-- CURRENT -->
                            <div class="content-room">
                                <div class="room room-1">ROOM 2 <span>2 Adult, 1 Child</span></div>
                            </div>
                        </div>
                        <!-- END/SELECT-ROOM -->
                        <!-- WIDGET CHECK AVAILABILITY -->
                        <div class="widget widget_check_availability widget-1">
                            <h4 class="widget-title">YOUR RESERVATION</h4>
                            <div class="check_availability">
                                <h6 class="check_availability_title">your stay dates</h6>
                                <div class="check_availability-field">
                                    <label>Arrive</label>
                                    <div class="input-group date" data-date-format="dd-mm-yyyy" id="datepicker1">
                                        <input class="form-control wrap-box" type="date" placeholder="Arrival Date">

                                    </div>
                                </div>
                                <div class="check_availability-field">
                                    <label>Night</label>
                                    <select class="awe-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="check_availability-field">
                                    <label>Depature</label>
                                    <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                        <input class="form-control wrap-box" type="date" placeholder="Departure Date">

                                    </div>
                                </div>
                                <h6 class="check_availability_title">ROOMS &amp; GUest</h6>
                                <div class="check_availability-field">
                                    <label>ROOMS</label>
                                    <select class="awe-select">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="check_availability_group">
                                    <span class="label-group">ROOMS 1</span>
                                    <div class="check_availability-field_group">
                                        <div class="check_availability-field">
                                            <label>Adult</label>
                                            <select class="awe-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="check_availability-field">
                                            <label>Chirld</label>
                                            <select class="awe-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="check_availability_group">
                                    <span class="label-group">ROOMS 2</span>
                                    <div class="check_availability-field_group">
                                        <div class="check_availability-field">
                                            <label>Adult</label>
                                            <select class="awe-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="check_availability-field">
                                            <label>Chirld</label>
                                            <select class="awe-select">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn-room btn">CHECK AVAILABLE</button>
                            </div>
                        </div>
                        <!-- END / WIDGET CHECK AVAILABILITY -->
                    </div>
                </div>
                <!--  END/SIDEBAR -->
                <!-- CONTENT -->
                <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="reservation_content">
                        <!-- RESERVATION ROOM -->
                        <div class="reservation-room">
                            <!-- ITEM -->
                            <div class="reservation-room_item">
                                <h2 class="reservation-room_name"><a href="#">Luxury room</a></h2>
                                <div class="reservation-room_img">
                                    <a href="#"><img src="images/Reservation/luxury.jpg" alt="#"
                                            class="img-responsive"></a>
                                </div>
                                <div class="reservation-room_text">
                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of</p>
                                        <ul>
                                            <li>1 King Bed</li>
                                            <li>Free Wi-Fi in all guest rooms</li>
                                            <li>Separate sitting area</li>
                                        </ul>
                                    </div>
                                    <div style="margin-bottom:10px;">
                                        <p class="reservation-room_price">
                                            <span class="reservation-room_amout">&#8377; 330</span> / days
                                        </p>
                                    </div>

                                    <a href="book_now.php" class="btn btn-room" style="margin-left:0px;">BOOK ROOM</a>
                                    <a href="360/index.html" target="_blank" class="btn btn-room"
                                        style="margin-left:0px;">Virtual Tour</a>
                                </div>

                            </div>
                            <!-- END / ITEM -->
                            <!-- ITEM -->
                            <div class="reservation-room_item">
                                <h2 class="reservation-room_name"><a href="#">COUPLE room</a></h2>
                                <div class="reservation-room_img">
                                    <a href="#"><img src="images/Reservation/COUPLE.jpg" alt="#"
                                            class="img-responsive"></a>
                                </div>
                                <div class="reservation-room_text">
                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type ...</p>
                                        <ul>
                                            <li>1 King Bed</li>
                                            <li>Free Wi-Fi in all guest rooms</li>
                                            <li>Separate sitting area</li>
                                        </ul>
                                    </div>

                                    <div class="clear"></div>

                                    <div style="margin-bottom:10px;">
                                        <p class="reservation-room_price">
                                            <span class="reservation-room_amout">&#8377; 330</span> / days
                                        </p>
                                    </div>

                                    <a href="book_now.php" class="btn btn-room" style="margin-left:0px;">BOOK ROOM</a>
                                    <a href="360/index.html" target="_blank" class="btn btn-room"
                                        style="margin-left:0px;">Virtual Tour</a>
                                </div>

                            </div>
                            <!-- END / ITEM -->
                            <!-- ITEM -->
                            <div class="reservation-room_item  current-select">
                                <h2 class="reservation-room_name"><a href="#">STANDARD room</a></h2>
                                <div class="reservation-room_img">
                                    <a href="#"><img src="images/Reservation/STANDARD.jpg" alt="#"
                                            class="img-responsive"></a>
                                </div>
                                <div class="reservation-room_text">
                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type ...</p>
                                        <ul>
                                            <li>1 King Bed</li>
                                            <li>Free Wi-Fi in all guest rooms</li>
                                            <li>Separate sitting area</li>
                                        </ul>
                                    </div>
                                    <div style="margin-bottom:10px;">
                                        <p class="reservation-room_price">
                                            <span class="reservation-room_amout">&#8377; 330</span> / days
                                        </p>
                                    </div>

                                    <a href="book_now.php" class="btn btn-room" style="margin-left:0px;">BOOK ROOM</a>
                                    <a href="360/index.html" target="_blank" class="btn btn-room"
                                        style="margin-left:0px;">Virtual Tour</a>
                                </div>

                            </div>
                            <!-- END / ITEM -->
                            <!-- ITEM -->
                            <div class="reservation-room_item">
                                <h2 class="reservation-room_name"><a href="#">FAMILY room</a></h2>
                                <div class="reservation-room_img">
                                    <a href="#"><img src="images/Reservation/family.jpg" alt="#"
                                            class="img-responsive"></a>
                                </div>
                                <div class="reservation-room_text">
                                    <div class="reservation-room_desc">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer took a galley of type ...</p>
                                        <ul>
                                            <li>1 King Bed</li>
                                            <li>Free Wi-Fi in all guest rooms</li>
                                            <li>Separate sitting area</li>
                                        </ul>
                                    </div>

                                    <div class="clear"></div>
                                    <div style="margin-bottom:10px;">
                                        <p class="reservation-room_price">
                                            <span class="reservation-room_amout">&#8377; 330</span> / days
                                        </p>
                                    </div>

                                    <a href="book_now.php" class="btn btn-room" style="margin-left:0px;">BOOK ROOM</a>
                                    <a href="360/index.html" target="_blank" class="btn btn-room"
                                        style="margin-left:0px;">Virtual Tour</a>
                                </div>

                            </div>
                            <!-- END / ITEM -->
                        </div>
                        <!-- END / RESERVATION ROOM -->
                    </div>
                </div>
                <!-- END / CONTENT -->
            </div>
        </div>
    </div>
</section>
<!-- END / RESERVATION -->

<?php include ('footer.php'); ?>