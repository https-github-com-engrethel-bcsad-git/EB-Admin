<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400&display=swap" rel="stylesheet">
<title>My Webpage</title>
<style>
body {
  font-family: 'Nunito', sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin: 0;
  padding: 0;
}
.container {
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
max-width: 800px;
width: 90%;
border: 2px solid #ccc;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
padding: 40px;
border-radius: 25px;
margin: 20px;
}

.logo {
max-width: 200px;
margin-bottom: 20px;
}

.name {
font-size: 30px;
font-weight: bold;
text-align: center;
margin-bottom: 10px;
}

.content {
text-align: center;
font-size: 18px;
line-height: 1.5;
margin: 0px;
width:90%;
}

.inner {
height: 250px;
border-radius: 25px;
background-color: whitesmoke;
margin-bottom: 20px;
padding-bottom: 50px;
}

.footer {
margin-top: 40px;
background-color: #031C30;
color: #fff;
padding: 20px;
text-align: center;
width: 90%;
max-width: 900px;
margin-bottom: 20px;
}

button {
margin-top: 50px;
background-color: #031C30;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;
border-radius: 25px;
}

button:hover {
background-color: #1c3550;
}

/* Media queries */

/* For screens smaller than 600px */
@media (max-width: 600px) {
.container {
padding: 20px;
}
.name {
font-size: 20px;
}
.content {
font-size: 16px;
}
.inner {
height: 200px;
}
button {
margin-top: 30px;
}
}

/* For screens between 600px and 900px */
@media (min-width: 600px) and (max-width: 900px) {
.container {
padding: 30px;
}
.name {
font-size: 22px;
}
.content {
font-size: 17px;
}
.inner {
height: 225px;
}
button {
margin-top: 40px;
}
}
</style>
</head>
<body>
<div class="container">
{{-- <h1 class="name">EBarangay</h1> --}}
<div class="content">
<br>
<div class="inner">
    <br>
<h1 style="font-size:25px";>Hello {{ $user->firstname }},</h1>
<p>We regret to inform you that your registration has been denied as you failed to upload a sitio clearance.</p>
<button>Sign Up</button>
</div>
</div>
</div>

</body>
</html>