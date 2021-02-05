<html>
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
        <style>
            body {
                font-family: "Arial", sans-serif;
                font-size: larger;
            }

            .center {
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
            }
        </style>
    </head>
    <body>
        <?php
            require_once('./connect.php');
            if (!empty($connection)) {
                $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'shop'");
                $tables     = $query->fetchAll(PDO::FETCH_COLUMN);
            
                if (empty($tables)) {
                    echo '<p class="center">There are no tables in database <code>shop</code>.</p>';
                } else {
                    echo '<p class="center">Database <code>shop</code> contains the following tables:</p>';
                    echo '<ul class="center">';
                    foreach ($tables as $table) {
                        echo "<li>{$table}</li>";
                    }
                    echo '</ul>';
                }        
            }
        ?>
    </body>
</html>