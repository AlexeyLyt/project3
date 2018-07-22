<?php

    //подключение к базе данных
    require_once "config.php";

    //артикул выбранного продукта
    $artikul = '';

    if ( !empty($_GET['artikul']) ) {
        $artikul = $_GET['artikul'];
    };

    //массив с информацией по выбранному продукту
    $product_data_array = [
        'size_data' => []
    ];

    //получение информации из базы данных
    $pdo = new PDO(DNS, DB_USER, DB_PASS);
    $q_product_data = "SELECT name, img_src, description, price FROM products WHERE artikul = '".$artikul."'";
    $q_product_size = "SELECT sc.name, CASE WHEN i.amount > 0 THEN 1 ELSE 0 END as is_available, i.amount ";
    $q_product_size .= " FROM in_stock i LEFT JOIN size_categories sc ON sc.id = i.size_id ";
    $q_product_size .= " LEFT JOIN products p ON p.id = i.product_id ";
    $q_product_size .= " WHERE p.artikul = '".$artikul."'";

    $result_product_data = $pdo->query($q_product_data);
    $result_product_size = $pdo->query($q_product_size);

    //заполнение итогового массива
    while( $row = $result_product_size->fetch(PDO::FETCH_ASSOC)){
        $product_data_array['size_data'][] = $row;
    };
    if(!empty($row = $result_product_data->fetch(PDO::FETCH_ASSOC)) ) {
        $product_data_array[] = $row;
    };  

    echo json_encode($product_data_array);

?>