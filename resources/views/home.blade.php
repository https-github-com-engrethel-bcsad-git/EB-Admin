<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>EBarangay</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    
    
    <!--google fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


<!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

</head>

<style> 
.boxes {
display: flex;
flex-wrap: wrap;
justify-content: space-between;
}

.box {
flex: 1 1 20%;
max-width: 20%;
height: auto;
margin-bottom: 20px;
background-color: whitesmoke;
text-align: center;
padding: 20px;
box-sizing: border-box;
border-radius: 25px;
box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* add a box-shadow */

}

.box img {
max-width: 100%;
max-height: 70%;
margin-bottom: 10px;
}

.box .caption {
font-weight: bold;
margin-bottom: 10px;
}

.box button {
background-color: #4CAF50;
color: white;
border: none;
padding: 10px;
border-radius: 5px;
cursor: pointer;
}

@media screen and (max-width: 960px) {
.box {
flex: 1 1 30%;
max-width: 30%;
}
}

@media screen and (max-width: 768px) {
.box {
flex: 1 1 45%;
max-width: 45%;
}
}

@media screen and (max-width: 480px) {
.box {
flex: 1 1 100%;
max-width: 100%;
}
}

</style>
<body>


<div class="wrapper">


    <div class="body-overlay"></div>
    
    <!-------------------------sidebar------------>
            <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3><img src="img/logo.png" class="img-fluid"/><span>EBarangay</span></h3>
        </div>
        <ul class="list-unstyled components">
        <li  class="active">
                <a href="#" class="dashboard"><i class="material-icons">home</i>
                <span>Dashboard</span></a>
            </li>
    

            <li class="dropdown">
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
                class="dropdown-toggle">
                <i class="material-icons">people</i>User Management</a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                    <li>
                        <a href="{{ route('user_approval') }}">User Approval</a>
                    </li>
                    <li>
                        <a href="{{ route('user_account') }}">User Account</a>
                    </li>
                    <li>
                        <a href="#">Admin Account</a>
                    </li>
                </ul>
            </li>
            
            <li class="dropdown">
                <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" 
                class="dropdown-toggle">
                <i class="material-icons">description</i><span>Appointments</span></a>
                <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                    <li>
                        <a href="#">Pening</a>
                    </li>
                    <li>
                        <a href="#">Approve</a>
                    </li>
                    
                </ul>
            </li>
            
                <li class="dropdown">
                <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" 
                class="dropdown-toggle">
                <i class="material-icons">textsms</i>
            
                
                <span>Complaints</span></a>
                <ul class="collapse list-unstyled menu" id="pageSubmenu3">
                    <li>
                        <a href="#">Pending</a>
                    </li>
                    <li>
                        <a href="#">Ongoing</a>
                    </li>
                    <li>
                        <a href="#">Settled</a>
                    </li>
                </ul>
            </li>
            
            
                <li  class="">
                <a href="#"><i class="material-icons">edit</i><span>News and Announcements
                </span></a>
            </li>
            <li  class="">
                <a href="#"><i class="material-icons">settings</i><span>Settings
                </span></a>
            </li>
            
            
            
        </ul>

        
    </nav>
    
    
    
    
    <!--------page-content---------------->
    
    <div id="content">
        
        <!--top--navbar----design--------->
        
        <div class="top-navbar">
            <div class="xp-topbar">

            <!-- Start XP Row -->
            <div class="row"> 
                <!-- Start XP Col -->
                <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                    <div class="xp-menubar">
                            <span class="material-icons text-white">signal_cellular_alt
                            </span>
                        </div>
                </div> 
                <!-- End XP Col -->

                <!-- Start XP Col -->
                <div class="col-md-5 col-lg-3 order-3 order-md-2">
                    <div class="xp-searchbar">
                        <form>
                            <div class="input-group">
                                <input type="search" class="form-control" 
                                placeholder="Search">
                                <div class="input-group-append">
                                <button class="btn" type="submit" 
                                id="button-addon2">GO</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End XP Col -->

                <!-- Start XP Col -->
                <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                    <div class="xp-profilebar text-right">
                            <nav class="navbar p-0">
                    <ul class="nav navbar-nav flex-row ml-auto">   
                        <li class="dropdown nav-item active">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <span class="material-icons">notifications</span>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">You have 5 new messages</a>
                                </li>
                                <li>
                                    <a href="#">You're now friend with Mike</a>
                                </li>
                                <li>
                                    <a href="#">Wish Mary on her birthday!</a>
                                </li>
                                <li>
                                    <a href="#">5 warnings in Server Console</a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <span class="material-icons">question_answer</span>

                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown">
                            <img src="img/user.png" style="width:40px; border-radius:50%;"/>
                            <span class="xp-user-live"></span>
                            </a>
                            <ul class="dropdown-menu small-menu">
                                <li>
                                    <a href="#">
                                        <span class="material-icons">
person_outline
</span>Profile

                                    </a>
                                </li>
                                <li>
                                    <a href="#"><span class="material-icons">
settings
</span>Settings</a>
                                </li>
                                <li>
                                    <a href="#"><span class="material-icons">
logout</span>Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                
            
        </nav>
                        
                    </div>
                </div>
                <!-- End XP Col -->

            </div> 
            <!-- End XP Row -->

        </div>
        
        
        </div>
        
        
        
        <!--------main-content------------->
        
        <div class="main-content">
            <div class="row">
            
</div><section class="boxes">
<div class="box">
<img src="img/resident.png" alt="Image 1">
<div class="caption">Caption 1</div>
<button>Button 1</button>
</div>
<div class="box">
<img src="image2.jpg" alt="Image 2">
<div class="caption">Caption 2</div>
<button>Button 2</button>
</div>
<div class="box">
<img src="image3.jpg" alt="Image 3">
<div class="caption">Caption 3</div>
<button>Button 3</button>
</div>
<div class="box">
<img src="image4.jpg" alt="Image 4">
<div class="caption">Caption 4</div>
<button>Button 4</button>
</div>
</section>

</div>


<!----------html code compleate----------->

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$(".xp-menubar").on('click',function(){
$('#sidebar').toggleClass('active');
$('#content').toggleClass('active');
});

$(".xp-menubar,.body-overlay").on('click',function(){
    $('#sidebar,.body-overlay').toggleClass('show-nav');
});

});
</script>