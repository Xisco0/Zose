<?php if ($page=='log-in'){?>


    <div class="form log-div animated Fadein" id="next_1">
                       
        <div class="text-div">
            <h3>Administrative Login</h3>
            <div class="alert alert-success">Kindly provide your <span>Email Address</span> and <span>Password</span> and proceed to login</div>
        </div>
        <div class="input-div">
            <div class="input-div-in">
                <input type="text" placeholder="Email Address" id="email" required="required"/>
                <i class="bi-envelope"></i>
            </div>
            <div class="input-div-in">
                <input type="password" placeholder="Password" id="password" required="required"/>
                <i class="bi-lock"></i>
            </div>
            <div class="btn-div">
                <button onclick="dashboard_url()" id="submit_btn">Login <i class="bi-check"></i></button>
                <span  onclick="_next_page('next_2')"> Forgot Password</span>
                
            
            </div>
        </div>
        <div class="contact-div">
            <div class="icon-div">
                <ul>
                <div class="icon">
                <i class="bi-facebook" title="facebook"></i>
                </div>

                <li class="icon twitter">
                <i class="bi-twitter" title="twitter"></i>
                </li>

                <li class="icon google">
                <i class="bi-google" title="google"></i>
                </li>

                <li class="icon linkein">
                <i class="bi-linkedin" title="linkein"></i>
                </li>

                <li class="icon pinterest">
                <i class="bi-pinterest" title="pinterest"></i>
                </li>
                </ul>
            </div>
        </div>
    </div>






    <div class="form log-div animated Fadein" id="next_2">
                    
        <div class="input">
            <div class="text-div">
                <h3>Forgot Password</h3>             
                <div class="alert alert-success">Kindly provide your <span>Email Address</span> to<span> Recover your Password</span> </div>
            </div>
            <div class="input-div">
                <div class="input-div-in">
                    <input type="text" placeholder="Email Address"  required="required"/>
                    <i class="bi-envelope"></i>
                </div>
                
                <div class="btn-div">
                    <button  onclick="_get_page('reset_password')" class="submit" id="submit_btn">Proceed <i class="bi-arrow-right"></i></button>
                    <div class="login">
                        <span>Already have an account ?</span><h3 onclick="_next_page('next_1')">Login</h3>
                    </div>
                </div>
            </div>
            <div class="contact-div">
                <div class="icon-div">
                    <ul>
                    <div class="icon">
                    <i class="bi-facebook" title="facebook"></i>
                    </div>
    
                    <li class="icon twitter">
                    <i class="bi-twitter" title="twitter"></i>
                    </li>
    
                    <li class="icon google">
                    <i class="bi-google" title="google"></i>
                    </li>
    
                    <li class="icon linkein">
                    <i class="bi-linkedin" title="linkein"></i>
                    </li>
    
                    <li class="icon pinterest">
                    <i class="bi-pinterest" title="pinterest"></i>
                    </li>
                    </ul>
                </div>
            </div>
        </div>  
    </div>

    
<?php }?>

<?php if ($page=='reset_password'){?>
    <div class="reset-div">
        <div class="reset-div-in">
            <div class="text-div">
                <span><i class="bi-person-fill-lock"></i> RESET PASSWORD</span>
                <div class="icon-div" onclick="alert_close()">
                    <i class="bi-x"></i>
                </div>
            </div>
            <div class="alert alert-success"><i class="bi-person-fill-lock"></i> Dear <span>Bamirin Francis,</span> an <span>OTP</span> has been sent to your email address (<span>francisbamirin45@gmail.com</span>) to reset Password. 
            Kindly check your INBOX or SPAM to confirm.</div>


            <div class="input-div">
                <span>Enter OTP: </span>
                </br>
                <input type="text" placeholder="Enter OTP" id="otp"/>
            </div>
            <div class="label">
                <span>OTP</span> not received? <span><i class="bi-send"></i> RESEND OTP</span>
            </div>
            <div class="input-div">
                <span>CREATE PASSWORD: </span>
                </br>
                <input type="text" placeholder="CREATE PASSWORD" id="create_password"/>
                <p>Atleast 8 Characters required including lower & upper cases and special characters and number</p>
            </div>
            <div class="input-div">
                <span>CONFIRM PASSWORD: </span>
                </br>
                <input type="text" placeholder="CONFIRM PASSWORD" id="confirm_password"/>
            </div>
            <button onclick="_get_section('password_reset_completed')"><i class="bi-check"></i>Reset Password</button>
        </div>
    </div>
<?php }?>

<?php if ($page=='password_reset_completed'){?>

    <div class="reset-success">
    <div class="reset-success-div">
        <div class="img-div">
            <img src="./all-images/original-gif.gif" alt="reset-success">
        </div>
        <div class="text-div">
            <h3>PASSWORD RESET SUCCESSFUL!</h3>
            <button class="log-div" onclick="window.location.reload();"><i class="bi-check"></i> Login</button>
        </div>
    </div>
    </div>

<?php }?>

