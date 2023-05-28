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

  display: inline-block;
  padding: 3px 8px;
  border-radius: 10px;
  font-size: 14px
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
.action{
  display:flex;
  color:white;
  position:relative;
}
.button1{
  margin-right:6px;
    margin-top:7px;
    height:30px;
    text-transform:uppercase;
    padding-top: 3px;
    border-radius: 15px;
    padding-bottom:0px;
    padding-right:10px;
    padding-left:10px;
    font-size: 12px;
    font-weight:normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    background-color: #198754;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 1px solid #808080;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5),
              inset 0 -2px 4px rgba(0, 0, 0, 0.5);
}

.button2{
  margin-top:7px;
    height:30px;
    text-transform:uppercase;
    padding-top: 0px ;
    border-radius: 15px;
    padding-bottom:0px;
    padding-right:17px;
    padding-left:17px;
    font-size: 12px;
    font-weight:normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    background-color: #E90C0C;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 1px solid #808080;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5),
              inset 0 -2px 4px rgba(0, 0, 0, 0.5);
}
th {
      border-right: 1px solid #ccc;
   }
   .btn btn-add{

   }
   .modal-content {
    
  width:800px;
 
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
.modal .modal-title {
  padding-left:300px;
}
 
.modal-header {
  color:white;
  border-radius:0px;
  background: linear-gradient(90.55deg, #024AA2 53.38%, #024AA2 115.43%);
  }

  .modal-body .form-group {
    margin-bottom: 20px;
  }

  .modal-body label {
    font-weight: bold;
  }
  .btnclose {
    height: 40px;
    background-color: #FF0000; /* Red background color */
    color: #fff;
    border: none;
    border-radius: 0px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .btnclose:hover {
    background-color: #CC0000; /* Darker shade of red on hover */
  }
  .btnsave {
    height: 40px;
    background: linear-gradient(0deg, #007bff, #007bff),
                linear-gradient(0deg, #43ABE0, #43ABE0);
    color: #fff;
    border: none;
    border-radius: 0px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .btnsave:hover {
    background: linear-gradient(0deg, #87CEEB, #87CEEB),
                linear-gradient(0deg, #87CEEB, #87CEEB);
  }

  .btncancel {
    height: 40px;
    background-color: #FF0000; /* Red background color */
    color: #fff;
    border: none;
    border-radius: 0px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
 
  .btncancel:hover {
    background-color: #CC0000; /* Darker shade of red on hover */
  }
  .btnupdate {
    height: 40px;
    background: linear-gradient(0deg, #007bff, #007bff),
                linear-gradient(0deg, #43ABE0, #43ABE0);
    color: #fff;
    border: none;
    border-radius: 0px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .btnupdate:hover {
    background: linear-gradient(0deg, #87CEEB, #87CEEB),
                linear-gradient(0deg, #87CEEB, #87CEEB);
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
          <ul id="homeSubmenu1">
            <li>
              <a href="{{ route('user_approval')}}">User Approval</a>
            </li>
            <li class="active">
              <a href="{{ route('user_account')}}">User Account</a>
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
          <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="material-icons">textsms</i>
            <span>Complaints</span>
          </a>
          <ul class="collapse list-unstyled menu" id="pageSubmenu4">
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
        <li>
          <a href="{{ route('announcement')}}">
            <i class="material-icons">edit</i>
            <span>News and Announcements</span>
          </a>
        </li>
        <li>
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
                                    <button class="btn3" type="submit" 
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
      <div class="col-md-12">
          <div class="table-wrapper">
              <div class="table-title">
                  <div class="row">
                      <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                          <h2 class="ml-lg-2">User Account</h2>
                      </div>
                      <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
                        <a class="btnadd" data-toggle="modal" data-target="#newuser">
                          <i class="material-icons">&#xE147;</i> <span>New</span>
                        </a>
                      </div>
                  </div>
              </div>
              <table class="table table-striped table-hover">
                  <thead>
                      <tr>
                          <th>
                              <span class="custom-checkbox">
                                  <input type="checkbox" id="selectAll">
                                  <label for="selectAll"></label>
                              </span>
                          </th>
                          <th>ID</th>
                          <th>Full Name</th>
                          <th>Address</th>
                          <th>Contact</th>
                          <th>Email Address</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach($users as $user)
                      @if ($user->account_status == 1)
                      <tr>
                          <td>
                              <span class="custom-checkbox">
                                  <input type="checkbox" id="checkbox1" name="option[]" value="1">
                                  <label for="checkbox1"></label>
                              </span>
                          </td>
                          <td>{{ $user->id }}</td>
                          <td>{{ $user->firstname }} {{ $user->middlename }} {{ $user->lastname }}</td>
                          <td>{{ $user->house_number }} {{ $user->street }}, {{ $user->brgy }} {{ $user->zip }}, {{ $user->city }}</td>
                          <td>{{ $user->phone }}</td>
                          <td>{{ $user->email }}</td>
                          <td>
                              @if ($user->active_status == 0)
                              <span class="online-dot"></span> Online
                              @else
                              <span class="offline-dot"></span> Offline
                              @endif
                          </td>
                          <td>
                              <div class="action">
                                  {{-- <a href="/user/{{ $user->id }}/edit" class="button1">Edit</a> --}}
                                  <a data-toggle="modal" data-target="#editannouncement{{ $user->id }}" class="button1">Edit</a>
                                  <form action="{{ route('user_account.delete', $user->id) }}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="button2" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                  </form>
                              </div>
                          </td>
                      </tr>
                      @endif
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>

<!-- Modal -->
<!-- NEW POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="newuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-light">
        <h5 class="modal-title" id="exampleModalLabel">Add User Data</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action="{{ route('announcement.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="modal-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Firstname</label>
                <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname">
              </div>
             
              <div class="form-group">
                <label>Middlename</label>
                <input type="text" name="middlename" class="form-control" placeholder="Enter Middle Name">
              </div>
              <div class="form-group">
                <label>Lastname</label>
                <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname">
              </div>
              <div class="form-group">
                <label>Contact Number</label>
                <input type="tel" name="phone" pattern="[0-9]{11}" class="form-control" placeholder="Enter Contact Number">
              </div>
              <div class="form-group">
                <label>Birthday</label>
                <input type="date" name="bday" class="form-control" placeholder="Enter Birthday">
              </div>
             
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label>House Number</label>
                <input type="text" name="house_number" class="form-control" placeholder="Enter House Number">
              </div>
              <div class="form-group">
                @php
                  $filePath = public_path('streets.txt');
                  $streets = file($filePath, FILE_IGNORE_NEW_LINES);
                @endphp
                <label for="street">Street Name</label>
                <select id="street" name="street" class="form-control" placeholder="Select a street">
                  <option disabled selected>Select a street</option>
                  @foreach($streets as $street)
                    <option value="{{ $street }}">{{ $street }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Barangay</label>
                <input type="text" name="brgy" class="form-control" placeholder="Enter Barangay">
              </div>
              <div class="form-group">
                <label>City</label>
                <input type="text" name="city" class="form-control" placeholder="Enter City">
              </div>
              <div class="form-group">
                <label>Zip Code</label>
                <input type="text" name="zip" class="form-control" placeholder="Enter Zip Code">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label><strong>Username </strong></label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password">
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" id="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
              </div>
            </div>
          </div>
          <div class="form-group">
                <label><strong>Select Gender </strong></label> &nbsp;
                <label for="male" style="font-weight: normal;">
                  <input type="radio" name="gender" id="male" value="male">
                  Male
                </label>
                <label for="female"style="font-weight: normal;">
                  <input type="radio" name="gender" id="female" value="female">
                  Female
                </label>
              </div>  
              <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btnclose" data-dismiss="modal">Close</button>
          <button type="submit" class="btnsave">Save Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- EDIT POP UP FORM (Bootstrap MODAL) -->
@foreach($users as $user)
<div class="modal fade" id="editannouncement{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit User Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>

          <form action="{{ route('announcement.update', ['announcement' => $user->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="modal-body">
                  <input type="hidden" name="update_id" id="update_id">

                  <div class="row">
                      <div class="col-md-4">
                     
                          <div class="form-group">
                              <label>Firstname</label>
                              <input type="text" name="firstname" class="form-control" value="{{ $user->firstname }}">
                          </div>
                          <div class="form-group">
                              <label>Contact Number</label>
                              <input type="tel" name="phone" pattern="[0-9]{11}" class="form-control" value="{{ $user->phone }}">
                          </div>
                          <div class="form-group">
                              <label>House Number</label>
                              <input type="text" name="house_number" class="form-control" value="{{ $user->house_number }}">
                          </div>
                      </div>

                      <div class="col-md-4">
                      <div class="form-group">
                              <label>Middlename</label>
                              <input type="text" name="middlename" class="form-control" value="{{ $user->middlename }}">
                          </div>
                          
                          <div class="form-group">
                              <label>Birthday</label>
                              <input type="date" name="bday" class="form-control" value="{{ $user->bday }}">
                          </div>
                          <div class="form-group">
                              <label>Gender</label><br>
                              <label for="male">
                                  <input type="radio" name="gender" id="male" value="male" {{ $user->gender === 'Male' ? 'checked' : '' }}>
                                  Male
                              </label><br>
                              <label for="female">
                                  <input type="radio" name="gender" id="female" value="female" {{ $user->gender === 'Female' ? 'checked' : '' }}>
                                  Female
                              </label>
                          </div>
                      </div>

                      <div class="col-md-4">
                      <div class="form-group">
                              <label>Lastname</label>
                              <input type="text" name="lastname" class="form-control" value="{{ $user->lastname }}">
                          </div>
                         
                          <div class="form-group">
                              <label for="street">Street Name</label>
                              <select id="street" name="street" class="form-control">
                                  <option value="">Select a street</option>
                                  @foreach($streets as $street)
                                      <option value="{{ $street }}" {{ $user->street == $street ? 'selected' : '' }}>{{ $street }}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="sitio">Sitio</label>
                              <select id="sitio" name="sitio" class="form-control">
                                  <option value="">Select a Sitio</option>
                                  <option value="Sitio1" {{ $user->sitio === 'Sitio 1' ? 'selected' : '' }}>Sitio 1</option>
                                  <option value="Sitio2" {{ $user->sitio === 'Sitio 2' ? 'selected' : '' }}>Sitio 2</option>
                                  <option value="Sitio3" {{ $user->sitio === 'Sitio 3' ? 'selected' : '' }}>Sitio 3</option>
                                  <option value="Sitio4" {{ $user->sitio === 'Sitio 4' ? 'selected' : '' }}>Sitio 4</option>
                                  <option value="Sitio5" {{ $user->sitio === 'Sitio 5' ? 'selected' : '' }}>Sitio 5</option>
                                  <option value="Sitio6" {{ $user->sitio === 'Sitio 6' ? 'selected' : '' }}>Sitio 6</option>
                                  <option value="Sitio7" {{ $user->sitio === 'Sitio 7' ? 'selected' : '' }}>Sitio 7</option>
                              </select>
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label>Barangay</label>
                              <input type="text" name="brgy" class="form-control" value="{{ $user->brgy }}">
                          </div>
                      </div>

                      <div class="col-md-4">
                          <div class="form-group">
                              <label>City</label>
                              <input type="text" name="city" class="form-control" value="{{ $user->city }}">
                          </div>
                      </div>

                      <div class="col-md-4">
                          <div class="form-group">
                              <label>Zip Code</label>
                              <input type="text" name="zip" class="form-control" value="{{ $user->zip }}">
                          </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-4">
                          <div class="form-group">
                              <label>Username</label>
                              <input type="text" id="username" name="username" class="form-control" value="{{ $user->username }}">
                          </div>
                      </div>

                      <div class="col-md-4">
                          <div class="form-group">
                              <label>Email</label>
                              <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
                          </div>
                      </div>

                      <div class="col-md-4">
                          <div class="form-group">
                              <label>Password</label>
                              <input type="password" id="password" name="password" class="form-control" value="*****">
                          </div>
                          <div class="form-group">
                              <label>Confirm Password</label>
                              <input type="password" id="password" name="password_confirmation" class="form-control" value="*****">
                          </div>
                      </div>
                  </div>
              </div>

              <div class="modal-footer">
                  <button type="button" class="btncancel" data-dismiss="modal">Cancel</button>
                  <button type="submit" name="updatedata" class="btnupdate">Update</button>
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