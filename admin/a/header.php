<header class="animatedfadeInDown">
    <div class="header-div">
    
        <div class="text-div">
            <div class="text-div-in"><span>Welcome<p id="display-fullname"></p></span><img src="./all-images/hand.gif" alt="hand"></div>
            
            <div class="text-div-i">
                <p>last login date: <small id="display-last-login"></small></p>
                <p>|</p>
                <span>Status: <p id="display-status-name"></p></span>
            </div>
        </div>
    
        <div class="search-div-in">
            <span id="time"></span>
            <script>formatTime()</script>
            <div class="input-div">
                <i class="bi-search"></i>
                <span>|</span>
                <input type="text" placeholder="Search" />
            </div>
            
            <div class="notification-div">
                <div class="icon-div">
                    <i class="bi-gear"></i>
                    <div class="notification-div-in"> 4 </div>
                </div>
                <div class="icon-div">
                    <i class="bi-bell"></i>
                </div>
                
            </div>
            
            <hr/>
            <img src="all-images/profile.png" alt="profile">
        </div>
      

            <script>
            //   var staff_id = sessionStorage.getItem('staff_id');
                _get_staff_login(staff_id);
            </script>
    </div>
 </header>