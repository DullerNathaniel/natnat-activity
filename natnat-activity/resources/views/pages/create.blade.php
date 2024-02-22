<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Students</title>
    <!-- You can include additional meta tags, stylesheets, or scripts in the head section -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            width:100%;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            width: 100%;
            bottom: 0;
            position: sticky;
            top: 100%;
        }

        .createtable {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 120px;
            margin-bottom: 60px;
            margin-right: 200px;
            overflow-y: auto;
        }

        .adjust {
            margin-left: 180px;

        }

        form {
            width: 200%;
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input, textarea {
            width: 200%;
            margin: 0 auto;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin:10px;
        }

        button:hover {
            background-color: #45a049;
        }

        .returnbutton {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin:10px;
            text-decoration: none; 
        }

        .returnbutton:hover {
            background-color: #45a049;

        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
            height: 15%;
            text-align: center;
            border-radius: 10px;
        }

        .confirm-button, .cancel-button {
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px 10px;
        }

        .confirm-button {
            background-color: #f44336;
            color: #fff;
        }

        .confirm-button:hover {
            background-color: #990000;
        }

        .cancel-button:hover {
            background-color: #bcbcbc;
            color: #000;
        }

    </style>
</head>
<body>

    <!-- Header Section -->
    <header>

        <h1>Welcome to Test Academy</h1>
        <p>Please fill in the required information to create a new student id.</p>
    </header>

    <div class="createtable">
        <table>
            <form action="{{ route('students.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="student_first_name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="student_last_name">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="student_email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Address</label>
                    <input type="text" class="form-control" name="student_address">
                </div>
                <div id="confirmationModal" class="modal">
                    <div class="modal-content">
                        <p>Are you sure you that all information are correct?</p>
                            <button type="submit" class="confirm-button" onclick="createStudent()">Yes</button>    
                            <button type="button" class="cancel-button" onclick="closeModal()">Cancel</button> 
                    </div>
                </div>
            </form>

                <div class="adjust">
                    <button class="btn btn-primary" onclick="openModal()">Submit</button>
                    <a href="/" type="button" class="returnbutton">Return</a>
                </div>
        </table>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Test Academy. Ayahtek Activity.</p>
    </footer>

    <script>
        function openModal() {
            document.getElementById("confirmationModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("confirmationModal").style.display = "none";
        }

        function createStudent() {

            alert("Student has successfully been created!");
            closeModal(); 
        }
    </script>

</body>
</html>