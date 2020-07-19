<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>The Wasolo</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../style.css" />
    <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Update Questions</title>
</head>

<body>
    <div class="updateQstns_modal">

        <h1 class="updateQstns_title page_title">Update Questions </h1>
        <form action="/action_page.php">
            <label for="question"> Enter Question: </label>
            <input id="question" type="text" class="w3-input">
            <br>
            <label for="language"> Enter Language:</label>
            <input class="w3-input" id="language" type="text">
            <br>
            <label for="department"> Enter Department: </label>
            <input id="department" type="text" class="w3-input">
            <br>
            <label for="category"> Enter category:</label>
            <input class="w3-input" id="category" type="text">

            <br>Upload audio:<br><br>

            <label class="file-label">
            <input type="file" id="myFile">
            <br> <br> <br>

            <input type="submit" value="Submit">
        </form>
    </div>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script>
        $(document).ready(function() {



        });
    </script>


</body>

</html>