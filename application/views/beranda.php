<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/style.css">
</head>
    <body>
            <div class="back">

            <header>
                <div class="tetap">
            <nav>
                    <ul>
                        <li><a href="<?=base_url()?>index.php/welcome/utama"id="li">Home</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/contact">Contact</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
                    </ul>
                </nav>
                </div>
            </header>
            
                <div class="profil">
                    <div id="h1">
                    <h1>Selamat datang <?=$nama_lengkap?> Berperilaku Seperti <?=$jenis_kelamin?></h1>            
        
                    </div>
                    </div>
            </div>   
            <div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta necessitatibus fugiat magni? Consectetur, nostrum? Ipsam quisquam obcaecati quaerat, corrupti alias, animi eligendi magnam voluptate doloremque aliquid vero esse consequuntur amet?</p>
            </div>
    </body>
</html>