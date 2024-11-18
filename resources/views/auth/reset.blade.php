@extends('page')

@section('title', 'reset')

@section('content')

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>EnergyAudit Reset Password</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


</head>

<body>
    <nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="javascript:void(0)">EnergyAudit</a>

    </nav>

    <div class="wrapper">
        <div class="register-background">
            <div class="filter-black"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                            <div class="register-card">
                                <h3 class="title">Password Reset Form</h3>
                                <form class="form-horizontal" method="POST" action="#">

                                    <label>E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                                    <input type="submit" class="btn btn-primary btn-block" value="Send Reset Password Email" />
                                </form>
                                <div class="havelogin">
                                    <a href="login.htm" class="btn btn-simple btn-info">Back to Login Page</a>
                                </div>
                                <div class="forgot">
                                    <a href="register.htm" class="btn btn-simple btn-warning">Back to Sign Up Page</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</body>


</html>

@endsection
