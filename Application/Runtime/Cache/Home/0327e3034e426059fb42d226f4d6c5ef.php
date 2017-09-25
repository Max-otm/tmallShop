<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>选择</th><th>地址</th><th>操作</th>
    </tr>
    </thead>
    <tbody>
    <?php if(is_array($addressData)): foreach($addressData as $key=>$v): ?><tr><td><input type="checkbox" name="choose[]"></td>
            <td><?php echo ($v['address']); ?></td>
            <td><a href="">删除</a></td>
        </tr><?php endforeach; endif; ?>
    </tbody>
</table>
</body>
</html>