<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas saskia formulir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Buat Account baru</h2>
    <h3>sign up from</h3>

     <form action="{{url ('welcome')}}" method="get">
       <label for="fname">first name:</label><br>
       <input type="text" id="fname" name="fname" value=""><br>
       <label for="lname">last name:</label><br>
       <input type="text" id="lname" name="lname" value="">
   
        <p>Gender</p>
        
            <input type="radio" id="Male" name="fav_language" value="Male">
            <label for="Male">Male</label><br>
            <input type="radio" id="Felame" name="fav_language" value="Felame">
            <label for="Felame">Felame</label><br></br>

            <label for="negara">Nationality</label><br></br>
            <select id="negara" name="negara">
                <option value="Indonesia">Indonesia</option>
                <option value="Amerika">Amerika</option>
                <option value="Inggris">Inggris</option>
            </select><br></br>

             <label>Language Spoken</label><br></br>
             <input type="checkbox" id="buatbox1" name="buatbox" value="Indonesia">
             <label for="buatbox">Bahasa Indonesia</label><br>
             <input type="checkbox" id="Buatbox2" name="buatbox" value="English">
             <label for="buatbox">English</label><br>
             <input type="checkbox" id="buatbox3" name="buatbox" value="Other">
             <label for="buatbox">Other</label><br></br>

             <p>Bio</p>
             <textarea name="massage" rows="10" cols="35"></textarea><br>

             <input type="submit" value="sign up">

        </form>
        

</body>
</html>