<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="/lib/materialize/css/materialize.css" media="screen,projection" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="light-blue darken-3">
<?php 
if(strlen($_SESSION["name"]) > 0){
  
  echo 
  '
  <div id="modal" class="modal" style="z-index: 1003; display: block; opacity: 1; top: 10%; transform: scaleX(1) scaleY(1);">
  <div class="modal-content">
    <h4>Logged out</h4>
    <p>Have a great day - ' . $_SESSION["name"] . '!</p>
  </div>
  <div class="modal-footer">
    <a id="close-modal" class="waves-effect waves-green btn-flat">Close</a>
  </div>
</div>
  '
  ;
  session_destroy();
}

?>

  <div class="container">
    <div class="row" style="height: 100vh;display: flex;align-items: center;">
      <div class="col m4 offset-m4">
        <div class="card white hoverable">

          <form class="card-content" action="welcome.php" method="post">

            <span class="card-title" style="font-weight:bold;">Logon</span>

            <div class="row">
              <div class="input-field col s12">

                <input id="username" type="text" class="validate" name="username" required>
                <label class="active" for="username">Username</label>

              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">

                <input id="password" type="password" class="validate" required>
                <label class="active" for="password">Password</label>

              </div>
            </div>
            
          <div class="row">
          
            <div class="input-field col s6">
              <i class="material-icons prefix">language</i>
              <input type="text" name="language">
              <label>Language code</label>
              <span class="badge">Not required</span>
            </div>
            </div>
        
        </div>

        <div class="card-action">

          <button class="btn waves-effect waves-light" type="submit" name="action">Login
            <i class="material-icons right">lock_open</i>
          </button>

          <button class="btn waves-effect red lighten-3" type="reset">
            <i class="material-icons">loop</i>
          </button>

        </div>
        </form>

      </div>
    </div>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="/lib/materialize/js/bin/materialize.min.js"></script>
  <script>
    document.getElementById("close-modal").addEventListener("click", function(){
    document.getElementById("modal").remove();

  });
  </script>
</body>

</html>



<!--
    #User Stories

    [X] User can see a mock login panel containing a user name text input field, a password text input field, and 'Login' and 'Logout' buttons.
    [X] User can enter a mock login name into the User Name field.
    [X] User can enter a mock password into the Password field. Input should be masked so the user see's asterisks (*) for each character that is entered rather than the plaintext password.
    [X] User can click the 'Login' button to perform a mock login.
    [X] User can see a message if either or both of the input fields are empty and the border color of the field(s) in error should be changed to red.
    [X] User can see a login acknowledgement message in the format: <hello-in-native-language> <user-name> you have successfully logged in!
    [X] User can click the 'Logout' button to clear the text input fields and any previous messages.
    [X] User can see a new message when successfully logged out in the format: Have a great day <user-name>!

    #Bonus features

    [X] User can see an additional text input field for a language code which will be used to override the IP obtained through geolocation. Hint: this is a great feature for testing your app.


    #Constraints

    Developers should use the IP-API service to obtain the users IP.
    https://ip-api.com/docs/api:json

    Developers should use the Fourtonfish service to obtain the greeting in the users native language by passing the users IP.
    https://www.fourtonfish.com/hellosalut/hello/

    Developers must use a HTML entities decoding to decode the hello message.

-->