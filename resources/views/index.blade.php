<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/form-submit" method="post">
        <input type="text" name="name" placeholder="نام خود را وارد کنید">
        <input type="text" name="lname" placeholder="نام خانوادگی خود را وارد کنید">
        <input type="text" name="_token" value="<?= csrf_token() ?>">

        <button>ارسال</button>
    </form>
</body>

</html>