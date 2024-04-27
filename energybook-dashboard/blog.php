<?php include 'include/sidebar.php'; ?>
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        min-width: 300px;
        width: 50%;
        max-width: 800px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .close {
        color: black;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .date-table input[type="text"] {
        border: 1px solid #dddddd;
        padding: 5px;
        width: 100%;
    }
</style>
<div class="col-md-12">
    <div class="row pt-2 pb-2 align-items-end bg-orange">

    </div>
    <!-- Started Table -->
    <h2 style="font-family: 'Poppins',sans-serif; font-weight: 600; color: #222;" class="text-center heading">
        Our Blog </h2>
    <div class="modal" id="paymentModal">
        <div class="modal-content">
            <!-- Modal content will be loaded here -->
            <span class="close" onclick="closeModal()">&times;</span>
        </div>
    </div>

    <div class="row justify-content-end">
        <div class="col-auto">
            <div>
                <button type="button" class="btn btn-primary" onclick="openFormPage()">Add New
                    Blog</button>
            </div>
        </div>
    </div>
    <!-- Filter -->
    <table border="0" cellspacing="5" cellpadding="5" class="date-table">
        <tbody>
            <tr>
                <td class="text-center">Filter By Date</td>
            </tr>
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
    <!-- table start -->
    <table id="example" class="display nowrap">
        <thead>
            <tr>
                <th>SR No.</th>
                <th>Created Date/Time</th>
                <th>Blog Title</th>
                <th>Blog Category</th>
                <th>Blog Image</th>
                <th>Blog Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
            <tr>
                <td>1</td>
                <td>2024-04-27 08:30:00</td>
                <td>Blog Title</td>
                <td>Category A</td>
                <td><img src="blog_image.jpg" alt="BlogImage"></td>
                <td>blog description.</td>
                <td>Active</td>
                <td><button>Edit</button></td>
            </tr>
        </tbody>

    </table>
</div>
</div>
</div>
<script>
    // Hide submenus
    $('#body-row .collapse').collapse('hide');

    // Collapse/Expand icon
    $('#collapse-icon').addClass('fa-angle-double-left');

    // Collapse click
    $('[data-toggle=sidebar-colapse]').click(function() {
        SidebarCollapse();
    });

    function SidebarCollapse() {
        $('.menu-collapsed').toggleClass('d-none');
        $('.sidebar-submenu').toggleClass('d-none');
        $('.submenu-icon').toggleClass('d-none');
        $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

        // Treating d-flex/d-none on separators with title
        var SeparatorTitle = $('.sidebar-separator-title');
        if (SeparatorTitle.hasClass('d-flex')) {
            SeparatorTitle.removeClass('d-flex');
        } else {
            SeparatorTitle.addClass('d-flex');
        }

        // Collapse/Expand icon
        $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
    }
</script>
<script>
    new DataTable('#example', {
        // scrollX: true
    });
    $('#myTable').DataTable({
        responsive: true
    });
    $('#DataTableID').DataTable({
        //"scrollX": true,            
        "initComplete": function(settings, json) {
            $("#DataTableID").wrap("<div style='overflow:auto; width:100%;position:relative;'></div>");
        },
    });
</script>
<script>
    window.onclick = function(event) {
        var modal = document.getElementById('paymentModal');
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function openFormPage() {
        console.log("Button clicked");
        fetch("blogForm.php")
            .then(response => response.text())
            .then(html => {
                document.querySelector('#paymentModal .modal-content').innerHTML = html;
                document.getElementById('paymentModal').style.display = 'block';
            })
            .catch(error => console.error('Error fetching form.html:', error));
    }

    function closeModal() {
        document.getElementById('paymentModal').style.display = 'none';
    }



    // Chnage color status and pending
    // $(document).ready(function() {
    //     $('#example').DataTable({
    //         // Your DataTable configuration
    //         "createdRow": function(row, data, dataIndex) {
    //             // Get the status cell
    //             var statusCell = $(row).find('td:eq(6)');

    //             // Check the status value and add appropriate class
    //             if (data[6] === "Active") {
    //                 statusCell.addClass('status-active');
    //             } else if (data[6] === "Pending") {
    //                 statusCell.addClass('status-pending');
    //             }
    //         }
    //     });
    // });
</script>