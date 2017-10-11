<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FMS</title>
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
<link href="../../assets/css/datepicker3.css" rel="stylesheet">
<link href="../../assets/css/styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body style="padding-top:5px;">
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand text-primary" href="#">FTP MANAGER</a>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log in</div>
                <div class="panel-body">
                    <form role="form">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <a href="#" id="login" class="btn btn-primary" style="margin-bottom:15px;">Login</a><br/>
                            <p id="invalid" style="color: red; text-align: center; margin-bottom:15px;"><br/>Invalid Username or Password<p>
                            No account? <a href="register.php" style="color:blue;">Register</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    <?php include "../../components/footBar.php";?>
</body>
<script src="../../assets/js/jquery-1.11.1.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/chart.min.js"></script>
<script src="../../assets/js/chart-data.js"></script>
<script src="../../assets/js/easypiechart.js"></script>
<script src="../../assets/js/easypiechart-data.js"></script>
<script src="../../assets/js/bootstrap-datepicker.js"></script>
<script src="../../assets/js/custom.js"></script>
<script>
    window.onload = function () {
        var chart1 = document.getElementById("line-chart").getContext("2d");
        window.myLine = new Chart(chart1).Line(lineChartData, {
            responsive: true,
            scaleLineColor: "rgba(0,0,0,.2)",
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleFontColor: "#c5c7cc"
        });
    };
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#invalid").hide();
        $("#login").click(function(){
        
            $.ajax({
                type: 'POST',
                url: 'login_controller.php',
                data: {'email': $("input[name=email]").val(), 'password' : $("input[name=password]").val()},
                success: function(response) {
                    //alert(response);
                    var json = jQuery.parseJSON(response);
                    if(response == "false"){
                        $("#invalid").show();
                    }else{
                        $("#invalid").hide();
                        var form = document.createElement("form");
                        form.method = 'post';
                        form.action = '../dashboard/home.php';
                        $(document.body).append(form);
                        form.submit();
                    }
                }
            });
   });
});
</script>

</html>