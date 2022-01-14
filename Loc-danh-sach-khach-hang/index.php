<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .toan {
        width: 100%;
    }

    form {
        text-align: center;
    }

    tr, th {
        text-align: center;
        padding-left: 20px;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<div class="toan">
    <form action="#" method="post">
        <label>
            Chọn ngày sinh từ:
            <input type="date" name="form" placeholder="yyyy/mm/dd">
        </label>
        <label>
            Đến:
            <input type="date" name="to" placeholder="yyyy/mm/dd">
        </label>
        <input type="submit" value="Lọc" size="20px">
    </form>
</div>
</body>
</html>
<?php
$customerList = [
    "1" => [
        "name" => "Mai Văn Hoàn",
        "day_of_birth" => "1983/08/20",
        "address" => "Hà Nội",
        "profile" => "img/a1.jpg"],
    "2" => [
        "name" => "Nguyễn Văn Nam",
        "day_of_birth" => "1983/08/21",
        "address" => "Bắc Giang",
        "profile" => "img/a2.jpg"],
    "3" => [
        "name" => "Nguyễn Thái Hòa",
        "day_of_birth" => "1983/08/22",
        "address" => "Nam Định",
        "profile" => "img/a3.jpg"],
    "4" => [
        "name" => "Trần Đăng Khoa",
        "day_of_birth" => "1983/08/17",
        "address" => "Hà Tây",
        "profile" => "img/a4.jpg"],
    "5" => [
        "name" => "Nguyễn Đình Thi",
        "day_of_birth" => "1983/08/19",
        "address" => "Hà Nội",
        "profile" => "img/a5.jpg"],
];


function searchByDate($customers, $fromDate, $toDate)
{
    if (empty($fromDate) || empty($toDate)) {
        return $customers;
    }

    $filteredCustomers = [];
    foreach ($customers as $customer) {
        if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
            continue;
        if (strtotime($customer['day_of_birth']) > strtotime($toDate))
            continue;
        $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        table {
            border-collapse: collapse;
            text-align: center;
            width: 100%;
        }

    </style>
</head>
<body>
<?php
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fromDate = $_REQUEST["form"];
//    echo $fromDate;
    $toDate = $_REQUEST["to"];
}

$filteredCustomers = searchByDate($customerList, $fromDate, $toDate);
?>

<table border="0">
    <h2 style="background: aqua; height: 50px; line-height: 50px; text-align: center">Danh sách khách hàng</h2>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($filteredCustomers as $key => $value): ?>
        <tr>
            <td><?php echo $key ?></td>
            <td><?php echo $value['name'] ?></td>
            <td><?php echo $value['day_of_birth'] ?></td>
            <td><?php echo $value['address'] ?></td>
            <td><img src="<?php echo $value['profile'] ?>" alt="" width="100"></td>
        </tr>
    <?php endforeach; ?>
</table>


</body>
</html>

