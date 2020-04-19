<?php
// env var set in Dockerfile
$title = getenv('PHP_PROJECT_TEMPLATE_TITLE');
$redisHost = getenv('REDIS_HOST');
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <ul>
            <li><a href="#php">Php</a></li>
            <li><a href="#redis">Redis</a></li>
        </ul>

        <div id="php">
            <?php phpinfo(); ?>
        </div>

        <hr/>

        <div id="redis">
        <?php
            $redis = new Redis();
            $connected = $redis->connect($redisHost, 6379);
            $redisInfo = $redis->info();
        ?>
            <div class="center">
                <table>
                    <tbody>
                        <tr class="h">
                            <td>
                                <h1 class="p">Redis</h1>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <?php foreach (['server', 'clients', 'memory', 'persistence', 'stats', 'replication', 'cpu', 'commandstats', 'cluster', 'keyspace'] as $section): ?>
                <h2><?php echo ucfirst($section); ?></h2>
                <table>
                    <tbody>
                    <?php foreach ($redis->info($section) as $item => $value): ?>
                        <tr>
                            <td class="e"><?php echo $item; ?></td>
                            <td class="v"><?php echo $value; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
                <?php endforeach; ?>
            </div>
        </div>

    </body>
</html>

