<div class="col-md-4 col-sm-6">
                         <div class="booking-tabs animated flipInY slowest" role="tabpanel">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#tab-booking3" aria-controls="tab-booking3" role="tab" data-toggle="tab"><i class="fa fa-building-o"></i></a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tab-booking3">
                                    <div class="booking-criteria">
                                        <h4>tour Book</h4>
                                        <ul>
                                            <li><i class="glyphicon glyphicon-ok"></i> No.1 for booking in your surroundings</li>
                                            <li><i class="glyphicon glyphicon-ok"></i> No hidden costs</li>
                                            <li><i class="glyphicon glyphicon-ok"></i> Attractive offers with price advantage</li>
                                        </ul>
                                    </div>
                                    <div class="bookingform">
                                        <form action="booking_form_handler.php" method="post">
                                            <fieldset>
                                                <div class="field-separator clearfix">
                                                    <label>Destination</label>
                                                    <input type="text" id="destination" class="form-control" name="destination" placeholder="Enter place / regions">
                                                </div>
                                                <div class="field-separator clearfix">
                                                    <label>Check in</label>
                                                    <div class="input-group input-append date date-picker" >
                                                        <input type="text" id="checkin" class="form-control" name="checkin">
                                                        <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                                <div class="field-separator clearfix">
                                                    <label>Check out</label>
                                                    <div class="input-group input-append date date-picker" >
                                                        <input type="text" id="checkout" class="form-control" name="checkout">
                                                        <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="field-separator clearfix">
                                                <label>Name <span>*</span></label>
                                                <input type="text" name="name" id="name" class="form-control" >
                                            </div>
                                            <div class="field-separator clearfix">
                                                <label>Email <span>*</span></label>
                                                <input type="text" name="email" id="email" class="form-control">
                                            </div>
                                            <div class="field-separator clearfix">
                                                <label for="number">Phone Number <span class="required">*</span></label>
                                                <input class="form-control" name="number" id="number" name="number" type="text" value="" required="required">
                                            </div>
                                            <div class="clearfix">
                                                <input type="submit" value="Book Now" class="t-btn btn-red">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>