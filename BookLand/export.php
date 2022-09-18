<?php require("connect.php");

// get Users
$query="SELECT book.book_name,SUM(orders_detail.qty) as Quantity FROM orders_detail JOIN book ON orders_detail.book_id=book.book_id
GROUP BY orders_detail.book_id ORDER BY SUM(orders_detail.qty) DESC";
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
header('Content-Disposition: attachment; filename=Best_Selling_Books.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Book Name', 'Quantity Sold'));

if (count($users) > 0) {
    foreach ($users as $row) {
        fputcsv($output, $row);
    }
}
?>