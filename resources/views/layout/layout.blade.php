<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/style/style.css')}}">
<script src="{{asset('js/app.js')}}"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="bg-secondary text-white">
        <div class="sidebar-header">
            <div class="row">
                <h3><img src="img/brand-logo.png" alt="Brand-logo" id="brandLogo" style="width:90%;"></h3>
            </div>
            <div class="row">
                <strong><img src="img/icons.png" alt="icons" id="icons"​​​​ style="width:90%;"></strong>
            </div>
        </div>

        <ul class="list-unstyled components text-white bg-secondary">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="fas fa-database"></i>
                    ERO TEAM
                </a>
                <ul class="collapse list-unstyled text-white" id="homeSubmenu">
                    <li>
                        <a href="#" class="text-white"><i class="fas fa-user-friends">&nbsp;</i> Students Applied</a>
                    </li>
                    <li>
                        <a href="#" class="text-white"><i class="fas fa-user-clock">&nbsp;</i> Students Get Intern</a>
                    </li>
                    <li>
                        <a href="#" class="text-white"><i class="fas fa-user-tie">&nbsp;</i>  Students Get Job</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="text-white">
                    <i class="fas fa-briefcase"></i>
                   Job Post
                </a>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle text-white">
                    <i class="material-icons">school</i>
                    Students
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu" class="text-white">
                    <li>
                        <a href="#" class="text-white"><i class="fas fa-user-graduate text-dark">&nbsp;</i> WEP Student</a>
                    </li>
                    <li>
                        <a href="#" class="text-white"><i class="fas fa-user-graduate text-dark">&nbsp;</i> SNA Student </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="text-white">
                    <i class="fas fa-paper-plane"></i>
                    Contact CV & CL
                </a>
            </li>
            <li>
                <a href="#" class="text-white">
                    <i class="fas fa-chart-pie"></i>
                    Occupancies
                </a>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content" class="container-fluid mt-0">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid mt-0 p-3">
                <button type="button" id="sidebarCollapse" class="btn btn-secondary">
                    <i class="fas fa-align-left"></i>
                    <span>Menu</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
                <div class="list-group">
                    <a href="#" class=" dropdown-toggle text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <span><i class="fa fa-cog">&nbsp;</i> Settings</span> 
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a href="#" class="dropdown-item" ><i class="fas fa-sign-in-alt">&nbsp;</i> Log Out</a>
                      <a href="#" class="dropdown-item"><i class="fas fa-user-graduate">&nbsp; </i> Profile</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>

        @section('content')
            
        @endsection