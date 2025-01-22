
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `staff` WHERE CONCAT(`name`, `email`, `position`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `staff`";
    $search_result = filterTable($query);
}

// function to connect and execute query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "Staff");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        #myInput {
            background-image: url('/css/searchicon.png');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 18px;
        }

        #myTable th, #myTable td {
            text-align: left;
            padding: 12px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<h2>Staff Registration</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
    <tr class="header">
        <th style="width:60%;">Name</th>
        <th style="width:40%;">Position</th>
    </tr>
    <tr>
        <td>Amy Williams</td>
        <td>Lecturer</td>
    </tr>
    <tr>
        <td>Jack Sparrow</td>
        <td>Reader</td>
    </tr>
    <tr>
        <td>Jonathan Jackson</td>
        <td>Professor</td>
    </tr>
    <tr>
        <td>Henry James</td>
        <td>Reader</td>
    </tr>
    <tr>
        <td>Darren Johnson</td>
        <td>Senior Lecturer</td>
    </tr>
</table>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</body>
</html>



