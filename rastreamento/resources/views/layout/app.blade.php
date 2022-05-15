<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

    <style>
        .navbar{
            max-height: 100px;
            background-color: #f1f1f1;
        }
        footer{
            height: 50px;
            background-color: #f1f1f1;
            position: fixed;
            bottom:0;
            width:100%;
        }
    </style>
 
</head>
<body>

    <nav class="d-flex justify-content-between mx-4 navbar px-2 mb-5">
    <div>Rastreamento</div>
    <div>Login</div>
    </nav>
    
    @yield('conteudo')

    <footer class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <strong>Este é o footer</strong>    
                </div>
            </div>
        </div>
    </footer>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>