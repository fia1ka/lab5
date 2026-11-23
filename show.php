<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>

<table class="layout">
    <tr>
        <td colspan="2" class="header">
            Мой блог
        </td>
    </tr>
    <tr>
        <td>
            <h1><?= htmlspecialchars($article['name']) ?></h1>
            <p><?= nl2br(htmlspecialchars($article['text'])) ?></p>
            <p><strong>Автор:</strong> <?= htmlspecialchars($author['nickname'] ?? 'Неизвестен') ?></p>
        </td>

        <td width="300px" class="sidebar">
            <div class="sidebarHeader">Меню</div>
            <ul>
                <li><a href="../articles/1">Статья 1</a></li>
                <li><a href="../articles/2">Статья 2</a></li>
            </ul>
        </td>
    </tr>
    <tr>
        <td class="footer" colspan="2">Все права защищены (c) Мой блог</td>
    </tr>
</table>

</body>
</html>
