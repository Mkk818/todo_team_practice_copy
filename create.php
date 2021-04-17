<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
</head>
<body>
    <div class="header">
        <nav class="headerbar">        
         <a href="index.php">Todoアプリ</a>
        </nav>    
    </div>
        <form action="store.php" method="post">

            <div class="title">  
                <label for>Title</label>
                <input type="text" name="title" id="title" size="100">
        
             </div>

            <div class="contents">
                <label for="contents">Contents</label>
                <textarea name="contents" id="contents" rows="10" cols="100"></textarea>
            </div>

            <!-- <div class="file">
                <input type="file"name="file">
            </div> -->
    
            <input type="button" value="送信">

        </form>
</body>
</html>