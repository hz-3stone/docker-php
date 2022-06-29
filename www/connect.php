<?php
    try {
        $dsn = 'mysql:host=mysql;dbname=db_test;charset=utf8';
        $db = new PDO($dsn, 'docker', 'docker');

        $sql = 'SELECT version();';
        $contact = $db->prepare($sql);
        $contact->execute();
        $result = $contact->fetchAll(PDO::FETCH_ASSOC);
        echo '接続成功!!<br>';
        var_dump($result);
    } catch (PDOException $e) {
        echo '接続失敗!!<br>';
        echo $e->getMessage();
        exit;
    }