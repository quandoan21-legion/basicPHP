<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>For và Id</h1>

    <form action="">
        <div>
            <!-- label naỳ đã được bound với input có id là username nên khi click vào nó sẽ tự động nhẩy đêns input đấy có id như thế -->
            <label for="username">Click to modify Username</label>
            <input type="text" id="username">

            <!-- link này đã được bound với input có id là password nên khi click vào nó sẽ tự động nhẩy đêns input đấy có id như thế -->
            <a href=""><label for="password"> click to modify password</label></a>
            <br>

            <!-- label naỳ đã được bound với input có id là password nên khi click vào nó sẽ tự động nhẩy đêns input đấy có id như thế -->
            <label for="password">Click to modify Password</label>
            <input type="password" id="password">
            
            <!-- link này đã được bound với input có id là username nên khi click vào nó sẽ tự động nhẩy đêns input đấy có id như thế -->
            <a href=""><label for="username"> click to modify username</label></a>
            <br>
            
            <!-- nút này đã được bound với thẻ div có id là result nên khi click vào nó sẽ tự động nhẩy đêns div đấy có id như thế -->
            <button id="button"><a href="#result">Click to see amazing things</a></button>
        </div>
        <div class="space"></div>
        <div id="result">
            <h1>
             Hello Worlds :3
            </h1>
        </div>
    </form>
</body>
</html>