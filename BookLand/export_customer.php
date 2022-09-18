<?php require("connect.php");

// get Users
$query="SELECT users.username,orders.phone,orders.state,
  SUM(orders_detail.qty) as Quantity FROM orders_detail
JOIN orders ON orders.order_id=orders_detail.order_id JOIN users ON orders.user_id=users.user_id
GROUP BY orders_detail.order_id ORDER BY SUM(orders_detail.qty) DESC";
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
header('Content-Disposition: attachment; filename=Loyal_Customer_List.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Customer Name', 'Phone','State','Quantity Sold'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>
