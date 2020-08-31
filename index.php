<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Mon super blog</title>
</head>
<body>
    <header>    
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="logo">
                        <a href=""><h2>MonSuperBlog</h2></a>
                    </div>
                </div>
                <!-- nav -->
                <nav class="col-lg-7">
                    <ul class="nav-list">
                        <li class="list active"><a href="">home</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="sections">
        <div class="container">
            <h3 class="sections-title">Postez vos messages</h3>
            <form method="post" class="formulaire mb-7">
                <div class="return"></div>
                <input type="text" name="name" class="name" placeholder="Votre nom"><br>
                <textarea name="message" class="message" placeholder="Votre message"></textarea><br>
                <input type="submit" value="Envoyer" class="submit btn btn-success">
            </form>
        </div>
    </div>
    <div class="sections">
        <div class="container">
            <div class="afficher"></div>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>