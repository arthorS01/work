<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form name="myForm" method="POST" action="process_admin_form.php">

        <textarea cols="50" rows="5" name="question" placeholder="what is your question?" required></textarea>
        <input type="text" placeholder="response" name="response"  required><br>
        <input type="submit" value="Done" name="submit_button">
    </form>
</body>
</html>