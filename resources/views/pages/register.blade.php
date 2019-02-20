<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="{{asset('js/app.js')}}"></script>
<style>
   body{
        background-image: url('img/findjob.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .opacity{
        width: 100%;
        height: 100%;
        background: #ccc;
        opacity: .6;
        position: absolute;
    }
    .card{
        margin: 0 auto;
    }
</style>
<div class="opacity"></div>
<div class="container">
    <div class="row">
        <div class="col-4 col-sm-4 col-md-4 col-lg-4"></div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-4">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <img src="img/logo.png" alt="Brand-logo" style="width:60%;">
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Example@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
                        </div>
                        <button type="button" name="close" class="btn btn-warning">Cancel</button>
                        <button type="button" name="btn-login" class="btn btn-info float-right">Register Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4 col-sm-4 col-md-4 col-lg-4"></div>
    </div>
</div>