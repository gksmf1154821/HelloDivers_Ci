<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <form method="POST" action="modify_action/<?=$idx?>">
        <img src="<?php echo base_url($photo)?>" alt="aaa" class="circle responsive-img profile_photo">
        <input type="file" name="photo" value="<?php echo base_url($photo)?>">
        <input type="text" name="id" value="<?=$id?>">
        <input type="text" name="name" value="<?=$name?>">
        <input type="text" name="sex" value="<?=$sex?>">
        <input type="text" name="phone"  value="<?=$phone?>">
        <input type="text" name="email" value="<?=$email?>">
        <input type="text" name="address" value="<?=$address?>">
        <input type="text" name="info" value="<?=$info?>">
        
        <button type="submit">수정하기</button>
    </form>
</body>
</html>