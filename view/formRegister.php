<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Register User</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/login.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Register</h3></div>
                    <div class="panel-body">
                        <from class="form-horizontal" role="form" method="POST" action="registerAnswer">
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">E-Mail</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-md-4 control-label">Comfirm Password</label>
                                <div class="col-md-6">
                                    <input id="password-comfirm" type="password" class="form-control" name="comfirm" value="" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" name="save">
                                        Register
                                    </button>
                                </div>
                            </div>
                            <p style="padding-top: 10px;"<a href="./">Web site</a></p>
                        </from>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>