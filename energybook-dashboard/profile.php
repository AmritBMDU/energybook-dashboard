<?php include 'include/sidebar.php'; ?>
<style>
    .date-table input[type="text"] {
        border: 1px solid #dddddd;
        padding: 5px;
        width: 100%;
    }
</style>

<body>
    <div class="col-md-12">
        <h2 class="text-start heading text-blue pt-3 ">
            User Profile</h2>
        <table border="0" cellspacing="5" cellpadding="5" class="date-table">
            <tbody>
                <tr>
                    <td>Minimum date:</td>
                    <td><input type="text" id="min" name="min" fdprocessedid="zvh0qp"></td>
                </tr>
                <tr>
                    <td>Maximum date:</td>
                    <td><input type="text" id="max" name="max" fdprocessedid="fljrik"></td>
                </tr>
            </tbody>
        </table>
        <table id="example" class="display compact nowrap table-responsive" style="width:100%">
            <thead>
                <tr>
                    <th>SR No.</th>
                    <th>Created Date</th>
                    <th>CIN No.</th>
                    <th>Name</th>
                    <th>Phone No.</th>
                    <th>Email Id</th>
                    <th>Category</th>
                    <th>Pin code</th>
                    <th>State</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Location Coordinates</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>12-04-2024</td>
                    <td>CIN001</td>
                    <td>XYZ</td>
                    <td>+91 897 675 3245</td>
                    <td>xyz@gmail.com</td>
                    <td>Solar </td>
                    <td>201301</td>
                    <td>UP</td>
                    <td>Noida</td>
                    <td>B-41 Noida</td>
                    <td>2.2.90.40</td>

                </tr>
                <tr>
                    <td>1</td>
                    <td>13-04-2024</td>
                    <td>CIN001</td>
                    <td>XYZ</td>
                    <td>+91 897 675 3245</td>
                    <td>xyz@gmail.com</td>
                    <td>Solar </td>
                    <td>201301</td>
                    <td>UP</td>
                    <td>Noida</td>
                    <td>B-41 Noida</td>
                    <td>2.2.90.40</td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>14-04-2024</td>
                    <td>CIN001</td>
                    <td>XYZ</td>
                    <td>+91 897 675 3245</td>
                    <td>xyz@gmail.com</td>
                    <td>Solar </td>
                    <td>201301</td>
                    <td>UP</td>
                    <td>Noida</td>
                    <td>B-41 Noida</td>
                    <td>2.2.90.40</td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>15-04-2024</td>
                    <td>CIN001</td>
                    <td>XYZ</td>
                    <td>+91 897 675 3245</td>
                    <td>xyz@gmail.com</td>
                    <td>Solar </td>
                    <td>201301</td>
                    <td>UP</td>
                    <td>Noida</td>
                    <td>B-41 Noida</td>
                    <td>2.2.90.40</td>

                </tr>
                <tr>
                    <td>4</td>
                    <td>16-04-2024</td>
                    <td>CIN001</td>
                    <td>XYZ</td>
                    <td>+91 897 675 3245</td>
                    <td>xyz@gmail.com</td>
                    <td>Solar </td>
                    <td>201301</td>
                    <td>UP</td>
                    <td>Noida</td>
                    <td>B-41 Noida</td>
                    <td>2.2.90.40</td>

                </tr>
                <tr>
                    <td>5</td>
                    <td>17-04-2024</td>
                    <td>CIN001</td>
                    <td>XYZ</td>
                    <td>+91 897 675 3245</td>
                    <td>xyz@gmail.com</td>
                    <td>Solar </td>
                    <td>201301</td>
                    <td>UP</td>
                    <td>Noida</td>
                    <td>B-41 Noida</td>
                    <td>2.2.90.40</td>

                </tr>
                <tr>
                    <td>1</td>
                    <td>25-04-2024</td>
                    <td>CIN001</td>
                    <td>XYZ</td>
                    <td>+91 897 675 3245</td>
                    <td>xyz@gmail.com</td>
                    <td>Solar </td>
                    <td>201301</td>
                    <td>UP</td>
                    <td>Noida</td>
                    <td>B-41 Noida</td>
                    <td>2.2.90.40</td>

                </tr>
                <tr>
                    <td>1</td>
                    <td>25-04-2024</td>
                    <td>CIN001</td>
                    <td>XYZ</td>
                    <td>+91 897 675 3245</td>
                    <td>xyz@gmail.com</td>
                    <td>Solar </td>
                    <td>201301</td>
                    <td>UP</td>
                    <td>Noida</td>
                    <td>B-41 Noida</td>
                    <td>2.2.90.40</td>

                </tr>



            </tbody>
        </table>

    </div>
    </div>
    </div>
    <script>
        new DataTable('#example', {
            responsive: true
        });
    </script>
    <script>
        let minDate, maxDate;

        // Custom filtering function which will search data in column two between two values
        DataTable.ext.search.push(function(settings, data, dataIndex) {
            let min = minDate ? minDate.val() : null;
            let max = maxDate ? maxDate.val() : null;
            let dateStr = data[1]; // Assuming the date is in the second column
            let parts = dateStr.split('-'); // Split the date string by hyphens
            let date = new Date(parts[2], parts[1] - 1, parts[0]); // Create a Date object

            if (
                (min === null && max === null) ||
                (min === null && date <= max) ||
                (min <= date && max === null) ||
                (min <= date && date <= max)
            ) {
                return true;
            }
            return false;
        });

        // Create date inputs
        minDate = new DateTime('#min', {
            format: 'DD-MM-YYYY' // Adjust the format based on your date input format
        });
        maxDate = new DateTime('#max', {
            format: 'DD-MM-YYYY' // Adjust the format based on your date input format
        });

        // Refilter the table when date inputs change
        document.querySelectorAll('#min, #max').forEach((el) => {
            el.addEventListener('change', () => table.draw());
        });
    </script>

    </html>