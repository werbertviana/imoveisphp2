<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.css") ?>" />
    <script src="https://kit.fontawesome.com/2a33fe9a00.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row">
        <div class="menu col-2">
            <div class="logo">
                <img src="<?= base_url("assets/images/logo.png") ?>" class="img-fluid"></img> 
            </div>
            <div class="menu-items">
                <div class="Título">MENU</div>
                <ul class="items">
                    <li><a href="<?= base_url() ?>home"><i class="fas fa-home fa-fw"></i> Início</a></li>
                    <li><a href="<?= base_url() ?>listar"><i class="fas fa-tag fa-fw"></i></i> Imóveis</a></li>
                    <li><a href=""><i class="fas fa-users fa-fw"></i></i> Usuários</a></li>
                </ul>
            </div>
        </div>
        <div class="header col-10">
            <div class="headercontent">
                <div class="avatar">
                    <img src="<?= base_url("assets/images/avatar.png") ?>" class="img-fluid"></img>
                </div>
                <span class="user"><?= $user ?></span>
                <div class="logout">
                    <a href="<?= base_url() ?>login/logout"><i class="fas fa-sign-out-alt"></i><a>
                </div>
            </div>
        </div>
    </div>
    
</body>

<style>
        .row{
            padding: 0px;
            margin: 0px;
        }
        .header {
            height: 90px;
            width: 100%;
            background-color: #E6E6E6;
            display: flex;
            top: 0px;
            align-items: center;
            justify-content: flex-end;
        }

        .headercontent {
            display: flex;
            align-items: center;
            /* background-color: red; */
            margin-right: 20px;
        }

        .avatar {
            align-items: center;
            height: 50px;
            width: 50px;
            margin-right: 15px;
            border-radius: 100%;
            display: flex;
            justify-content: center;
        }

        .user {
            margin-right: 20px;
            color: #4D4D4D;
        }

        .logout i {
            font-size: 2.4rem;
            color: #313A46;
        }

        .menu {
            height: 100vh;
            background-color: #313A46;
            display: flex;
            align-content: center;
            flex-direction: column;
            position: absolute;
        }

        .logo  {
            height: 90px;
            /* background-color: red; */
            align-items: center;
            justify-content: center;
            display : flex;
            padding: 25px;
            padding-top: 35px;
        }

        .items{
            list-style: none;
            margin-top: 10px;
        }

        .items li a {
            text-decoration: none;
            color: white;
        }
        .menu-items{
            color: #B3B3B3;
            margin-top: 20px;
            
           
        }
        
        .items li {
            padding: 5px 0px;
        }
        
        .main {
            position: absolute;
            background-color: yellow;
            left: 50%;
            width: 100%;    
            /* padding-bottom: 300px; */
            margin-top: 50px;
        }

        .main-content{
            width: 60%;
            position: relative;
            background-color: red;
           
        }
    </style>

</html>