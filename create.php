<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todoアプリ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <nav class="headerbar">        
         <a href="index.php">Todoアプリ</a>
        </nav>    
    </div>
    <div class="form">
        <form action="store.php" method="post">

            <div class="title">  
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
        
             </div>

            <div class="contents">
                <label for="contents">Contents</label>
                <textarea name="contents" id="contents" rows="10" cols="100"></textarea>
            </div>

            <div class="submit-button">
             <button type="submit">送信</button>
                <!-- ボタンのCSSは今後修正します -->
            </div>
       
        </form>
    </div>
</body>
</html>