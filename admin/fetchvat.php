<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "maindb");
$columns = array( 'id', 'name', 'vat_id', 'vat_password', 'phone_number', 'total_payment', 'paid', 'due', 'jan', 'feb','mar', 'april', 'june', 'july', 'aug', 'sep', 'oct', 'nov', 'december' );

$query = "SELECT * FROM vat_table ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE name LIKE "%'.$_POST["search"]["value"].'%" 
 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));
$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="id">' . $row["id"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="name">' . $row["name"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="vat_id">' . $row["vat_id"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="vat_password">' . $row["vat_password"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="phone_number">' . $row["phone_number"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="total_payment">' . $row["total_payment"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="paid">' . $row["paid"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="due">' . $row["due"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="jan">' . $row["jan"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="feb">' . $row["feb"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="mar">' . $row["mar"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="april">' . $row["april"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="may">' . $row["may"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="june">' . $row["june"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="july">' . $row["july"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="aug">' . $row["aug"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="sep">' . $row["sep"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="oct">' . $row["oct"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="nov">' . $row["nov"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="december">' . $row["december"] . '</div>';
 $sub_array[] = '<button type="button" name="update" class="btn btn-danger btn-xs add" id="'.$row["id"].'">Update</button>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM vat_table";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>