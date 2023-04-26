<!DOCTYPE html>
<html>
<head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap" rel="stylesheet">
	<title>My Webpage</title>
	<style>

        body{
            font-family: 'Nunito', sans-serif;
            display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		height: 100vh;
		margin-top:20px;
        }
      
        .container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 400px;
  width: 40%;
  border: 2px solid #ccc;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
  padding-bottom: 100px;
  border-radius: 25px;
 
}

		.logo {
			max-width: 200px;
			margin-bottom: 10px;
		}

		.name {
			font-size: 24px;
			font-weight: bold;
			text-align: center;
			margin-bottom: 10px;
		}

		.content {
          
			text-align: center;
			font-size: 18px;
			line-height: 1.5;
			max-width: 800px;
			margin: 20px;
           
		}
   .inner{
    height: 250px;
    border-radius: 25px;
    background-color: whitesmoke;
    margin-right: 20px;
    margin-left: 20px;
    margin-bottom: 20px;
    padding-bottom: 50px;
   }
		.footer {
            margin-top: 40px;
			background-color:#031C30;
			color: #fff;
			padding: 20px;
			text-align: center;
            width: 900px;
		}

        button {
        margin-top: 50px;
  background-color:#031C30 ; /* Green background color */
  border: none; /* Remove border */
  color: white; /* White text color */
  padding: 15px 32px; /* Padding */
  text-align: center; /* Center text */
  text-decoration: none; /* Remove underline */
  display: inline-block; /* Make button inline */
  font-size: 16px; /* Font size */
  margin: 4px 2px; /* Margin */
  cursor: pointer; /* Add cursor pointer */
  border-radius: 25px; /* Add border radius */
}

button:hover {
  background-color: #1c3550; /* Darker green background color on hover */
}
</style>
	</style>
</head>
<body>
	<section class="container">
		<img src="img/mail.png" alt="Logo" class="logo">
		<h1 class="name">EBarangay</h1>
        <div class="inner">
		<p class="content">
			Hello User {{ $user->firstname }},
			Sorry but we dennissed your registration because we cannot verify your residency please a upload a clear photo of your sitio clearance
            
		</p>
    </div>
  
    <button> Sign Up</button>

  
	</section>

	
</body>
</html>
