 
      (function() {
        function _checkActiveSession() {
            let access_key = JSON.parse(sessionStorage.getItem("access_key"));
            if (!access_key) {
                _logOut();
            }
        }
    
        _checkActiveSession();
    })();
