<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Weather List</title>
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.3/js/jquery.tablesorter.min.js"></script>
    <script>
        //sorting
        $(document).ready(function () {
            $(".table").tablesorter({
            });
        });
        $(document).ready(function () {

            //add list
            $(".add-row").click(function () {
                var moviename = $("#moviename").val();
                var rating = $("#rating").val();
                var markup = "<tr><td><input type='checkbox' name='record'></td><td>"
                    + moviename + "</td><td class='rating'>" + rating + "</td></tr>";
                $("table tbody").append(markup);
            });


            // check and remove selected table rows
            $(".delete-row").click(function () {
                $("table tbody").find('input[name="record"]').each(function () {
                    if ($(this).is(":checked")) {
                        $(this).parents("tr").remove();
                    }
                });
            });

            //check all 
            $("#select-all").click(function () {
                var isSelected = $(this).is(":checked");
                if (isSelected) {
                    $(".table tbody tr").each(function () {
                        $(this).find('input[type="checkbox"]').prop('checked', true);
                    })
                } else {
                    $(".table tbody tr").each(function () {
                        $(this).find('input[type="checkbox"]').prop('checked', false);
                    })
                }
            });

            //searching
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });

        });
    </script>
</head>

<body>

    <div class="dropdown">
        <nav>
            <img src="images/logoweb.jpg">
            <ul>
                <li><a href="#">Kategori <i class="fa-solid fa-caret-down"></i></a>
                    <ul>
                        <li><a href="#">Cloudy</a></li>
                        <li><a href="#">Rain</a></li>
                        <li><a href="#">Summer</a></li>
                        <li><a href="#">Spring</a></li>
                        <li><a href="#">Autumn</a></li>
                    </ul>
                </li>
                <li><a href="profile.php">Profile</i></a></li>
                <li><a href="calculator.php">Calculator</i></a></li>
                <li><a href="table.php">Weather-List</i></a></li>
                <li><a href="form.php">Form</i></a></li>
                <li><a href="index.php">Home</i></a></li>
            </ul>
        </nav>
    </div>

    <!--Section Weather List--> 
    <div class="Weather-list">
        <form>
            <input type="text" class="imovie" id="moviename" placeholder="Enter Weather">
            <input type="text" class="irating" id="rating" placeholder="Enter Temperature">
            <input type="button" class="add-row" value="Add List">
            <input class="search" id="myInput" type="text" placeholder="Search..">
        </form>
        <table id="myTable" class="table">
            <thead>
                <tr>
                    <th class="checkbox"><input class="checklist" id="select-all" type="checkbox" name="record"></th>
                    <th>Weather</th>
                    <th>Temperature</th>
                </tr>
            </thead>
            <tbody id="table1">
                <tr>
                    <td><input type="checkbox" name="record"></td>
                    <td>Overcast</td>
                    <td class="rating">25</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="record"></td>
                    <td>Cloudy</td>
                    <td class="rating">24</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="record"></td>
                    <td>Sunny</td>
                    <td class="rating">29</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="record"></td>
                    <td>Warm</td>
                    <td class="rating">30</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="record"></td>
                    <td>Hot</td>
                    <td class="rating">32</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="record"></td>
                    <td>Rain</td>
                    <td class="rating">21</td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="delete-row">Delete List</button>
    </div>
    <!--End of Section-->
    <footer class="medsos">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li>Contact us</li>
            </ul>
        </div>
    </footer>


</body>

</html>