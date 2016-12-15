<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="/Html/css/signin.css">
</head>
<body>
    <div class="bd">
        <form class="form">
            <div class="input">
                <label for="uid">用&nbsp;户&nbsp;名：</label>
                <input id="uid" name="uid">
            </div>
            <div class="input">
                <label for="password">密&nbsp;&nbsp;&nbsp;码：</label>
                <input type="password" id="password" name="password">
            </div class="input">
            <div class="input">
                <p>
                    <span class="err red"></span>
                </p>
            </div>
            <div class="btn">
				<input type="button" value="注册" class="btn1" onclick="reg()">
				<input type="button" value="登录" class="btn2" onclick="sub()">
            </div>
        </form>
    </div>
<script src="/Html/js/jquery-1.11.3.js"></script>
<script src="/Html/js/signin.js"></script>
</body>
</html>