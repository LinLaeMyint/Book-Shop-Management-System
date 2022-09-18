<?php require("connect.php");

// get Users
$query="SELECT
    
orders_detail.order_id, SUM(orders_detail.qty) as Quantity,((book.price)-(purchase_detail.purchase_price))*SUM(orders_detail.qty),{fn MONTHNAME(orders.order_date)} as date,orders.order_id,{fn YEAR(orders.order_date)} as year

FROM orders JOIN orders_detail ON orders.order_id=orders_detail.order_id JOIN book ON book.book_id=orders_detail.book_id JOIN purchase_detail ON book.book_id=purchase_detail.book_id

GROUP BY orders_detail.order_id ORDER BY MONTH(orders.order_date)
;";
if (!$result = mysqli_query($db1, $query)) {
    exit(mysqli_error($db1));
}

$users = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
}

header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Monthly_Profit_Report.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Order ID','Quantity Sold','Profit','Month','Year'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>
