<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color:rgb(211, 211, 211)

        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ucapan</title>
</head>
<body>

       <h1 style="color:rgb(119, 136, 153); text-align:center;">SELAMAT DATANG!</h1>
       <h2 style="color: rgb(225, 133, 147); text-align:center;">
       welcome <?php echo $_GET["fname"];
       ?> <?php echo $_GET["lname"];
       ?> <br />
       Your Gender Is <?php echo $_GET["fav_language"];
       ?> <br />
       Your Nationality Is <?php echo $_GET["negara"];
       ?> <br />
       Your Language Spoken Is <?php echo $_GET["buatbox"];
       ?> <br />
       Your Biodata Is <?php echo $_GET["massage"];
       ?> <br /> </h2>
       <h3 style="color:rgb(95, 158, 160);text-align:center;">terimakasih telah bergabung di website kami. media belajar kita bersama! </h3>


</body>
</html>