Be right back!
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="ItemInfoController@store">

    <input type="text" min="0" class="form-control" name="ticket" id="ticket">
    <input type="number" min="0" class="form-control" name="entityid" id="entityid">
    <input type="number" min="1" class="form-control" name="urgancy" id="urgancy">
    <input type="number" min="0" class="form-control" name="rcvddate" id="rcvddate">
    <input type="number" min="0" class="form-control" name="category" id="category">
    <input type="number" min="0" class="form-control" name="storename" id="storename">
    <input type="submit" value="submit">

    </form>
    
</body>
</html>