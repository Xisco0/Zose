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
                    <input type="text"  placeholder="FULL NAME"  id="fullname">
                </div>

                <div class="form-div">
                    <label>EMAIL ADDRESS: <span>*</span></label>
                    <input type="text" placeholder="EMAIL ADDRESS" id="email_address"/>
                </div>

                <div class="form-div">
                    <label>PHONE NUMBER: <span>*</span></label>
                    <input type="text" placeholder="PHONE NUMBER" maxlength="11" id="phone_number"/>
                </div>

                <div class="form-div">
                    <label>SELECT ROLE: <span>*</span></label>
                    <select id="role_id">
                        <option value='select_role' disabled selected >--SELECT ROLE--</option>
                        <script>_get_role();</script>
                    </select>
                </div>

                <div class="form-div">
                    <label>SELECT STATUS: <span>*</span></label>
                    <select id="status_id">
                        <option value="select_status" disabled selected >--SELECT STATUS--</option>
                        <script>_get_status();</script>
                    </select>
                </div>

                <button id="submit_btn" onclick="_add_new_staff()"><i class="bi-check"></i> SUBMIT</button>
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
                                <img src="all-images/image_profile.png" alt="passport">
                            </div>

                            <div class="text-div">
                                <h3 id="staff-profile-fullname"></h3>
                                <div class="status-div">
                                    <label>STATUS: <span id="get-staff-status-name"></span> </label>
                                    <label> | LAST LOGIN DATE: <span id="get-staff-last-login"></span></label>
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
                                <input type="text"  id="profile-fullname"/>
                            </div>

                            <div class="input-div-inn">
                                <span>EMAIL:</span><br clear="all"/>
                                <input type="text"  id="profile-email"/>
                            </div>

                            <div class="input-div-inn">
                                <span>HOME ADDRESS:</span><br clear="all"/>
                                <input type="text"  id="profile-home-address"/>
                            </div>

                            <div class="input-div-inn">
                                <span>PHONE NUMBER:</span><br clear="all"/>
                                <input type="text"  id="profile-phone-number"/>
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
                                    <input type="text"  id="profile-staff-id"/>
                                    <i class="bi-lock"></i>
                                </div>                          
                            </div>

                        <div class="account-div-inner">
                                <div class="inner">
                                    <span>DATE OF REGISTRATION:</span><br clear="all"/>
                                    <div class="input-inner text">              
                                        <input type="text"  id="profile-date" disabled/>
                                        <i class="bi-lock"></i>
                                    </div>  
                                    
                                </div>

                                <div class="inner">
                                    <span>LAST LOGIN DATE:</span><br clear="all"/>
                                    <div class="input-inner text">                              
                                        <input type="text"  id="profile-last-login" disabled/>
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
                                    <select id="role_id">
                                        <script>_get_role('<?php echo $ids ?>')</script>
   
                                    </select>
                                
                                </div>  
                                
                            </div>

                            <div class="inner inner-div">
                                <span>STATUS ID:</span><br clear="all"/>
                                <div class="input-inner text">                              
                                    <SELECT id="status_id">
                                    <script>_get_status('<?php echo $ids ?>')</script>
                                      
                                    </SELECT>
                                    
                                </div>  
                            </div>
                        </div>

                    </div>
                    <script>_get_staff_profile('<?php echo $ids ?>')</script>

                    <button onclick="_update_all_staff('<?php echo $ids ?>')" id="submit_btn">UPDATE PROFILE <i class="bi-check"></i></button>
                </div>
            </div>
        </div>
    </div>
<?php }?>