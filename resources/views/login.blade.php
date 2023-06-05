<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin log in</title>
  <link rel="stylesheet" href="css/login.css">
  <!-- https://bytewebster.com/ -->
  <!-- https://bytewebster.com/ -->
  <!-- https://bytewebster.com/ -->
</head>
<body  style="background-image: url('img/bg4.png');">
<div class="container">
      <div class="forms-container">
        <div class="form-control signup-form">
        </div>
        <div class="form-control signin-form">
           <form action="{{ route('home') }}">
              <img src="img/hero2.png" alt="Welcome back!" class="center-image2"/>
             <div class="input-container">
              <div class="icon">
                  <i class="fas fa-user"></i>
              </div>
              <div class="input1">
                   <input type="text" placeholder="Username" required />
              </div>
         
         </div>
         <div class="input-container">
              <div class="icon">
                <i class="fas fa-lock"></i>
              </div>
              <div class="input1">
                <input id="passwordInput" type="password" placeholder="Password" required />
               
              </div>
            </div>
            <button>Sumbit</button>
          </form>
        
        </div>
      </div>
              <div class="intros-container">
               <div class="intro-control signin-intro">
                  <div class="intro-control__inner">
                     <!-- Replace text with image -->
                     <img src="img/admin.png" alt="Welcome back!" class="center-image"/>
                  </div>
               </div>
               <div class="intro-control signup-intro">
                  <!-- Add your content here -->
               </div>
            </div>

  <script  src="./script.js">
// https://bytewebster.com/
// https://bytewebster.com/
// https://bytewebster.com/
      const signupBtn = document.getElementById("signup-btn");
      const signinBtn = document.getElementById("signin-btn");
      const mainContainer = document.querySelector(".container");

      signupBtn.addEventListener("click", () => {
        mainContainer.classList.toggle("change");
      });
      signinBtn.addEventListener("click", () => {
        mainContainer.classList.toggle("change");
      });
      
  function togglePasswordVisibility() {
    var passwordInput = document.getElementById("passwordInput");
    var toggleButton = document.getElementById("toggleButton");

    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      toggleButton.textContent = "Hide";
    } else {
      passwordInput.type = "password";
      toggleButton.textContent = "Show";
    }
  }

  </script>
</body>
</html>