<?php if ($page=="add-staff"){?>

    <div class="staff-details animated FadeinRight">
       
       <div class="staff-details-div">
           <div class="text-div">
               <i class="bi-person-add"></i>
               <span>ADD NEW STAFF</span>
           </div>
   
           <div class="exit" onclick="alert_close()">
               <i class="bi-x"></i>
           </div>
       </div>
   
    
        <div class="staff-add-body">
            <div class="alert alert-success staff-alert">Kindly fill the form below to <span>ADD NEW STAFF</span></div>
            <div class="form">
                <div class="form-div">
                    <label>FULL NAME: <span>*</span></label>
                    <input type="text" placeholder="FULL NAME" id="fullname"/>
                </div>

                <div class="form-div">
                    <label>EMAIL ADDRESS: <span>*</span></label>
                    <input type="text" placeholder="EMAIL ADDRESS" id="email_address"/>
                </div>

                <div class="form-div">
                    <label>PHONE NUMBER: <span>*</span></label>
                    <input type="text" placeholder="PHONE NUMBER" id="phone_number"/>
                </div>

                <div class="form-div">
                    <label>HOME ADDRESS: <span>*</span></label>
                    <input type="text" placeholder="HOME ADDRESS" id="home_address"/>
                </div>

                <div class="form-div">
                    <label>SELECT ROLE: <span>*</span></label>
                    <input type="text" placeholder="SELECT ROLE" id="select_role"/>
                </div>

                <div class="form-div">
                    <label>SELECT STATUS: <span>*</span></label>
                    <input type="text" placeholder="SELECT STATUS" id="select_status"/>
                </div>

                <button><i class="bi-check"></i>SUBMIT</button>
            </div>
        </div>
       
    </div>
<?php }?>

<?php if ($page=="update-staff"){?>
    <div class="update_staff">
        <div class="update-staff animated FadeinUp">
            
            <div class="update-staff-div">
                <div class="staff-details-div staff-update">
                    <div class="text-div">
                        <i class="bi-person"></i>
                        <span>ADMINISTRATIVE PROFILE</span>
                    </div>
            
                    <div class="exit" onclick="alert_close()">
                        <i class="bi-x"></i>
                    </div>
                </div>
            </div>

            <div class="staff-update-div">
                <div class="update-staff-div-in">
                    <img src="all-images/bg-1.jpeg" class="img"alt="studying">
                    
                    <div class="profile-div">
                        <div class="profile-div-inner">
                            <div class="profile-div-in">
                                <img src="all-images/passport.jpg" alt="passport">
                            </div>

                            <div class="text-div">
                                <h3>Bamirin Francis</h3>
                                <div class="status-div">
                                    <label>STATUS: <span>ACTIVE</span> </label>
                                    <label> | LAST LOGIN DATE: <span>2024-07-03 06:20:14</span></label>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="basic-div">
                    <div class="basic-div-in">
                        <h3>BASIC INFORMATION</h3>
                        <hr>

                        <div class="input-div-in">
                            <div class="input-div-inn">
                                <span>FULLNAME:</span><br clear="all"/>
                                <input type="text" value="BAMIRIN FRANCIS" id="fullname"/>
                            </div>

                            <div class="input-div-inn">
                                <span>EMAIL:</span><br clear="all"/>
                                <input type="text" value="francisbamirin6@gmail.com" id="email"/>
                            </div>

                            <div class="input-div-inn">
                                <span>HOME ADDRESS:</span><br clear="all"/>
                                <input type="text" value="francisbamirin6@gmail.com" id="home_address"/>
                            </div>

                            <div class="input-div-inn">
                                <span>PHONE NUMBER:</span><br clear="all"/>
                                <input type="text" value="francisbamirin6@gmail.com" id="phone_number"/>
                            </div>

                        </div>
                    </div>


                    <div class="basic-div-in account">
                        <h3>ACCOUNT INFORMATION</h3>
                        <hr>

                        <div class="account-div">
                            <div class="staff-id">
                                <span>STAFF ID:</span><br clear="all"/>
                                <div class="input-inner">                             
                                    <input type="text" value="LTS01220240627114043" id="fullname"/>
                                    <i class="bi-lock"></i>
                                </div>                          
                            </div>

                        <div class="account-div-inner">
                                <div class="inner">
                                    <span>DATE OF REGISTRATION:</span><br clear="all"/>
                                    <div class="input-inner text">              
                                        <input type="text" value="2024-06-27 06:40:43" id="home_address"/>
                                        <i class="bi-lock"></i>
                                    </div>  
                                    
                                </div>

                                <div class="inner">
                                    <span>LAST LOGIN DATE:</span><br clear="all"/>
                                    <div class="input-inner text">                              
                                        <input type="text" value="2024-07-30 06:40:43" id="phone_number"/>
                                        <i class="bi-lock"></i>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="basic-div-in account">
                        <h3>ADMINISTRATIVE INFORMATION</h3>
                        <hr>

                    

                        <div class="account-div-inner">
                            <div class="inner inner-div">
                                <span>STAFF ROLE:</span><br clear="all"/>
                                <div class="input-inner text">              
                                    <input type="text" value="ADMIN" id="home_address"/>
                                
                                </div>  
                                
                            </div>

                            <div class="inner inner-div">
                                <span>LAST LOGIN DATE:</span><br clear="all"/>
                                <div class="input-inner text">                              
                                    <input type="text" value="ACTIVE" id="phone_number"/>
                                    
                                </div>  
                            </div>
                        </div>

                    </div>

                    <button>UPDATE PROFILE <i class="bi-check"></i></button>
                </div>
            </div>
        </div>
    </div>
<?php }?>