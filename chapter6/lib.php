//6.1.2

<html>
    <body>
        <?php $hour = date('H'); ?>
        <?php if (5 <= $hour && $hour < 10): ?>
        <p>おはよう</p>
        <?php elseif (10 <= $hour && $hour < 18): ?>
        <p>こんにちは</p>
        <?php else: ?>
        <p>こんばんは</p>
        <?php endif; ?>
        <p>現在<?php echo $hour ?>時です。</p>
    </body>
</html>

//フォーム

<html>
    <body>
        <?php if (isset($_GET['name']) && strlen($_GET['name']) > 0): ?>
        <p><?php echo htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8'); ?> さんこんにちは</p>
        <?php endif ?>
        
        <form action='form.php' method='get'>
            <p>
                名前を入れてください。:
                <input type="text" name="name" />
                <input type="submit" value="送信" />
            </p>
        </form>
    </body>
</html>
