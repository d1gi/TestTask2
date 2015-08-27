<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Вход на сайт</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/bootstrap3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
        body {
            background: url(http://lorempixel.com/1920/1920/city/9/) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .panel-default {
            opacity: 0.9;
            margin-top: 30px;
        }

        .form-group.last {
            margin-bottom: 0px;
        }
    </style>
    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/bootstrap3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function () {
        };
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css) {
            if (css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="' + css + '" type="text/css" />');
            else $('head > link').filter(':first').replaceWith(defaultCSS);
        }
        $(document).ready(function () {
            var iframe_height = parseInt($('html').height());
            window.parent.postMessage(iframe_height, 'http://bootsnipp.com');
        });
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Вход на сайт
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">
                                Email</label>

                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">
                                Пароль</label>

                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Пароль" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"/>
                                        Запомнить меня
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">
                                    Войти
                                </button>
                                <button type="reset" class="btn btn-default btn-sm">
                                    Сброс
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    Ещё не зарегистрированы? <a href="/register">Зарегистрируйтесь!</a></div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">

</script>
</body>
</html>
