<style>
    .container {
        margin-top: 50px;
        padding: 30px;
        border-radius: 10px;
        font-family: 'Poppins', sans-serif;
    }

    .form-label {
        font-weight: bold;
        text-align: center;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        margin-top: 6px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-family: Arial, sans-serif;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: 1px;
        margin-left: 1px;
        margin-bottom: 10px;
    }

    .status-active {
        color: green;
        /* Change color for active status */
    }

    .status-pending {
        color: orange;
        /* Change color for pending status */
    }

    .col {
        flex: 1;
        padding: 0 15px;
    }

    @media screen and (max-width: 600px) {
        .col {
            width: 100%;
            margin-top: 0;
        }
    }
</style>
</head>

<body>

    <div class="container">
        <h2 class="text-center">Add Blog</h2>
        <form id="blogForm" onsubmit="submitForm(event)">
            <div class="row">
                <div class="col">
                    <label for="blogTitle" class="form-label">Blog
                        Title<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="blogTitle" placeholder="Enter Blog Title" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="blogCategory" class="form-label">Blog
                        Category<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="blogCategory" placeholder="Enter Blog Category" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="blogDescription" class="form-label">Blog
                        Description<span style="color: red;">*</span></label>
                    <textarea class="form-control" id="blogDescription" placeholder="Enter Blog Description" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="blogImage" class="form-label">Add Blog
                        Image<span style="color: red;">*</span></label>
                    <input type="file" class="form-control" id="blogImage" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        function submitForm(event) {
            event.preventDefault();
            // alert('Form submitted!');
            // Perform form submission logic here
        }
    </script>
</body>