<!doctype html>
<html llang="en">
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
.button1{
  margin-right:6px;
   margin-top:0px;
    height:24px;
    text-transform:uppercase;
    padding-top: 0px ;
    border-radius: 15px;
    padding-bottom:0px;
    padding-right:25px;
    padding-left:25px;
    font-size: 14px;
    font-weight:normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    background-color: #198754;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
}

.button2{
   margin-top:0px;
    height:24px;
    text-transform:uppercase;
    padding-top: 0px ;
    border-radius: 15px;
    padding-bottom:0px;
    padding-right:17px;
    padding-left:17px;
    font-size: 14px;
    font-weight:normal;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    background-color: #E90C0C;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
}
.button1:hover{
    background-color: #27ae60;
}
.button2:hover{
    background-color: #27ae60;
}
.table td{
  
    padding: 0.75rem;
    /* vertical-align:normal; */
    border-top: 1px solid #dee2e6;

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
          <ul  id="pageSubmenu3">
            <li class="active">
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
            <i class="material-icons">people</i>User Management
          </a>
          <ul class="collapse list-unstyled menu" id="homeSubmenu1">
            <li>
              <a href="{{ route('user_approval')}}">User Approval</a>
            </li>
            <li>
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
                    <div class="col-md-12">
                       <div class="table-wrapper">
                         
                       <div class="table-title">
                         <div class="row">
                             <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h2 class="ml-lg-2">Documents Approval</h2>
                             </div>
                             <!-- <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
                               <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                               <i class="material-icons">&#xE147;</i>
                               <span>Add New User</span>
                               </a>
                               
                             </div> -->
                         </div>
                       </div>
                       
<table class="table table-striped table-hover">
   <thead>
      <tr>
         <th><span class="custom-checkbox">
            <input type="checkbox" id="selectAll">
            <label for="selectAll"></label>
         </th>
         <th>ID</th>
         <th>Full Name</th>
         <th>Type of Document</th>
         <th>Contact</th>
         <th>Email Address</th>
         <th>Date Request</th>
         <th>View</th>
         <th>Actions</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td><span class="custom-checkbox">
            <input type="checkbox" id="checkbox1" name="option[]" value="1">
            <label for="checkbox1"></label>
         </td>
         <td>1</td>
         <td>John Doe</td>
         <td>  Barangay Clearance  </td>


  <!-- View Image Modal -->
  <div class="modal modal1 fade" id="viewImageModal" tabindex="-1" role="dialog" aria-labelledby="viewImageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewImageModalLabel">Sitio Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="path/to/sitio/image.jpg" class="img-fluid" alt="Sitio Image">
        </div>
      </div>
    </div>
  </div>
</td>
         <td>123 Main St, Anytown USA</td>
         <td>johndoe@gmail.com</td>
         <td>4-30-2023</td>
         <td>
         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewImageModal">View</button>
</td>
<td>
   <div class="btn-group">
      <button type="button" class="button1" data-toggle="modal" data-target="#acceptModal">Approve</button>
      <button type="button" class="button2" data-toggle="modal" data-target="#denyModal">Deny</button>
   </div>
</td>
      </tr>
      <tr>
         <td><span class="custom-checkbox">
            <input type="checkbox" id="checkbox2" name="option[]" value="1">
            <label for="checkbox2"></label>
         </td>
         <td>2</td>
         <td>Jane Smith</td>
         <td>Barangay ID  </td>

  <!-- View Image Modal -->
  <div class="modal modal1 fade" id="viewImageModal" tabindex="-1" role="dialog" aria-labelledby="viewImageModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
  <h5 class="modal-title" id="viewImageModalLabel">Sitio Clearance imgae</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
        <div class="modal-body">
          <img src="path/to/sitio/image.jpg" class="img-fluid" alt="Sitio Image">
        </div>
      </div>
    </div>
  </div>
</td>
         <td>456 Oak Ave, Anytown USA</td>
         <td>johndoe@gmail.com</td>
         <td>4-30-2023</td>

         <td>
         <button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewImageModal">
    View
  </button>
</td>
<td>
   <div class="btn-group">
      <button type="button" class="button1" data-toggle="modal" data-target="#acceptModal">Approve</button>
      <button type="button" class="button2" data-toggle="modal" data-target="#denyModal">Deny</button>
   </div>
</td>

      </tr>
   </tbody>
</table>
    
                       </div>
                    </div>


                       
                    <!--    <div class="clearfix">
                         <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
                         <ul class="pagination">
                            <li class="page-item disabled"><a href="#">Previous</a></li>
                            <li class="page-item "><a href="#"class="page-link">1</a></li>
                            <li class="page-item "><a href="#"class="page-link">2</a></li>
                            <li class="page-item active"><a href="#"class="page-link">3</a></li>
                            <li class="page-item "><a href="#"class="page-link">4</a></li>
                            <li class="page-item "><a href="#"class="page-link">5</a></li>
                            <li class="page-item "><a href="#" class="page-link">Next</a></li>
                         </ul>
                       </div> -->
                       
                       
                       
                       
    
                       
        
                    
                    
                                       <!----add-modal start--------->
        <div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="emil" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Add</button>
      </div>
    </div>
  </div>
</div>

                       <!----edit-modal end--------->
                       
                       
                       
                       
                       
                   <!----edit-modal start--------->
        <div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="emil" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>

                       <!----edit-modal end--------->      
                       
                       
                     <!----delete-modal start--------->
        <div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Records</p>
        <p class="text-warning"><small>this action Cannot be Undone,</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Delete</button>
      </div>
    </div>
  </div>
</div>

                       <!----edit-modal end--------->   
                       
                    
                    
                 
                 </div>
              </div>

<!----------html code compleate----------->








  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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
  
  



  </body>
  
  </html>


