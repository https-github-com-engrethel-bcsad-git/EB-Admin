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
.online-dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  background-color: #4CAF50; /* green */
  border-radius: 50%;
  vertical-align: middle;

}

.offline-dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  background-color: #F44336; /* red */
  border-radius: 50%;
  vertical-align: middle;
}


    .btn-info {
  
padding: 3px 8px;
  text-shadow: 1px 1px 1px #000;
   border-radius: 15px;
   font-size: 14px;
}

.btn-info:hover {
  background-color: sky;
  color: #fff;
}
.accept-btn, .deny-btn {
  display: inline-block;
  padding: 3px 8px;
  border-radius: 10px;
  font-size: 14px;
/*  font-weight: bold;*/
  color: #fff;
  text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
  background-color: #2ecc71;
  border: none;
  cursor: pointer;
  transition: all 0.3s ease;
}

.accept-btn:hover, .deny-btn:hover {
  background-color: #27ae60;
}

.accept-btn {
  margin-right: 10px;
}

.deny-btn {
  background-color: #e74c3c;
}

.deny-btn:hover {
  background-color: #c0392b;
}

    .modal1 {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
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
/* table Announcements */
table {
  width: 100%;
  border-collapse: collapse;
}

th {
  text-align: left;
}

td {
  padding: 20px;
  vertical-align: top;
}

img {
  max-width: 100%;
}

@media (max-width: 768px) {
  td {
    display: block;
  }
  td:first-child {
    margin-bottom: 20px;
  }
}
.title {
  margin-bottom: 20px;
}

@media (min-width: 768px) {
  .title {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px;
    background-color: #fff;
    z-index: 1;
  }
}
.body {
  text-align: justify;
  margin-top: 10px;
  vertical-align:top;
}
.Edit{
  margin-top:50px;
  background-color: #092F5E;
  color: white;
  font-size: 16px;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.3s ease;
 
}

.Edit:hover {
  background-color: #0B5ED7;
}

.Edit.large {
  font-size: 20px;
  padding: 12px 24px;
}

.Edit.large:hover {
  background-color: #0A50B5;
}

</style>
<body>
  <div class="wrapper">
    <div class="body-overlay"></div>
    
    <!-- Sidebar -->
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3><img src="img/logo.png" class="img-fluid"/><span>EBarangay</span></h3>
      </div>
      <ul class="list-unstyled components">
        <li>
          <a href="{{ route('home') }}" class="dashboard">
            <i class="material-icons">home</i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">send</i>
            <span>Document Requests</span>
          </a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu3">
            <li>
              <a href="{{ route('documentapproval') }}">Pending</a>
            </li>
            <li>
              <a href="#">Approved</a>
            </li>
            <li>
              <a href="#">History</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">people</i>
            <span>User Management</span>
          </a>
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
          <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">description</i>
            <span>Appointments</span>
          </a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu2">
            <li>
              <a href="#">Pending</a>
            </li>
            <li>
              <a href="#">Approve</a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">textsms</i>
            <span>Complaints</span>
          </a>
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
        <li class="active">
          <a href="{{ route('announcement')}}">
            <i class="material-icons">edit</i>
            <span>News and Announcements</span>
          </a>
        </li>
        <li class="">
          <a href="#">
            <i class="material-icons">settings</i>
            <span>Settings</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
    
    
      
      
      
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

<!-- main-content -->
<div class="main-content">
  <div class="row">
      <div class="table-title">
          <div class="row">
              <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
                  <h2 class="ml-lg-2">Manage News and Announcement</h2>
              </div>
              <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
                  <a class="btn btn-success" data-toggle="modal" data-target="#newannouncement">
                      <i class="material-icons">&#xE147;</i> <span>New</span>
                  </a>
              </div>
          </div>
      </div>
      <table class="table table-striped table-hover">
          <thead>
              <tr>
                  <th></th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              @foreach($announcements as $announcement)
              <tr>
                  <td>
                      <div class="container">
                          <div class="title1">
                              <h3>{{ $announcement->title }}</h3>
                          </div>
                          <p class="body">{{ $announcement->body }}</p>
                          <div class="Edit1">
                              <a href="" class="Edit">Edit</a>
                              <a data-toggle="modal" data-target="#editannouncement{{ $announcement->id }}" class="Edit">Edit</a>
                              <a data-toggle="modal" data-target="#destroyannouncement{{ $announcement->id }}" class="Edit">Delete</a>
                          </div>
                      </div>
                  </td>
                  <td>
                      <img src="{{ Storage::disk('s3')->url($announcement->image) }}" class="img-fluid">
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</div>


<!-- Modal -->
<!-- NEW POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="newannouncement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add News and Announcement Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <form action="{{ route('announcement.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="modal-body">
                  <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image" accept=".jpg, .jpeg, .png" required>
                  </div>
                  <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                  </div>
                  <div class="form-group">
                      <label>Body</label>
                      <textarea name="body" class="form-control" rows="10" placeholder="Enter Message" required></textarea>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save Data</button>
              </div>
          </form>
      </div>
  </div>
</div>
<!-- EDIT POP UP FORM (Bootstrap MODAL) -->
@foreach($announcements as $announcement)
<div class="modal fade" id="editannouncement{{ $announcement->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Announcement Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>

          <form action="{{ route('announcement.update', ['announcement' => $announcement->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="modal-body">
                  <input type="hidden" name="update_id" id="update_id">
                  <div class="form-group">
                      <label>Image</label>
                      <input type="file" name="image" accept=".jpg, .jpeg, .png">
                  </div>

                  <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" id="title" class="form-control" value="{{ $announcement->title }}" placeholder="Enter Title">
                  </div>

                  <div class="form-group">
                      <label>Body</label>
                      <textarea name="body" id="body" class="form-control" rows="10" placeholder="Enter Message">{{ $announcement->body }}</textarea>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" name="updatedata" class="btn btn-primary">Update</button>
              </div>
          </form>
      </div>
  </div>
</div>
@endforeach
<!-- DELETE POP UP FORM (Bootstrap MODAL) -->
@foreach($announcements as $announcement)
<div class="modal fade" id="destroyannouncement{{ $announcement->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Delete Announcement</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>

          <form action="{{ route('announcement.destroy', ['announcement' => $announcement->id]) }}" method="POST">
            @csrf
            @method('DELETE')
              <div class="modal-body">
                  <input type="hidden" name="delete_id" id="delete_id">
                  <p>Do you want to delete this announcement?</p>
                  <p class="text-warning"><small>This action cannot be undone.</small></p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                  <button type="submit" name="deletedata" class="btn btn-danger">Delete</button>
              </div>
          </form>
      </div>
  </div>
</div>
@endforeach


                
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
    $(document).ready(function() {
  (function() {
    function showOffline() {
      $('.indicator').removeClass('online').addClass('offline');
      $('.message').text('Offline');
    }
    function showOnline() {
      $('.indicator').removeClass('offline').addClass('online');
      $('.message').text('Online');
    }
    
    window.addEventListener('offline', function () {
     showOffline(); 
    });
    window.addEventListener('online', function () {
      showOnline();
    });
    
    if(window.navigator.onLine) {
      showOnline();
    }else {
      showOffline();
    }
  })();
});    
</script>
