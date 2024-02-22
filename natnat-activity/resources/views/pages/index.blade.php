<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
    <title>Test Academy</title>
    <!-- You can include additional meta tags, stylesheets, or scripts in the head section -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            overflow-x: hidden;
            position:relative;
            flex-direction: column;
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

        .studenttable {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
            margin-bottom: 60px;
            overflow-y: auto;
        }

        th, td {
            border: 1px;
            padding: 20px;
            text-align: center;
        }

        table {
            border: 5px solid #000000;
            border-radius: 10px;
        }

        .createstudents {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #79c25a;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            border: none;
        }

        .createstudents:hover {
            background-color: #45a049;
        }

        .update{
            border-radius:50%;
            padding: 10px;
            background-color:#8fce00;
            border: none;
            color: white;
            cursor: pointer;
        }
        

        .update:hover {
            background-color: #45a049;

        }

        .delete {
            border-radius:50%;
            padding: 10px;
            background-color:#f44336;
            border: none;
            color: white;
            cursor: pointer;

        }

        .delete:hover {
            background-color:#990000;
        }

        .view {
            border-radius:50%;
            padding: 10px;
            background-color:#edd000;
            border: none;
            color: white;
            cursor: pointer;
        }

        .view:hover {
            background-color:#c1ab10;
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
        <p>A web application for updating and editing students!</p>
    </header>

    <!-- Main Content Section -->
    <div class="studenttable">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Personal Email</th>
                    <th scope="col">Address</th>
                </tr>
                <tbody>
                        @foreach($students as $students)
                            <tr>
                                <th scope="row">{{$students->id}}</th>
                                <td>{{$students -> student_first_name}}</td>
                                <td>{{$students -> student_last_name}}</td>
                                <td>{{$students -> student_email}}</td>
                                <td>{{$students -> student_address}}</td>
                                <td><a href="/student/{{$students->id}}"><button class="update"><i class="fa-solid fa-pen-to-square fa-lg"></i></button></a></td>
                                <td><button class="delete" onclick="openModal()"><i class="fa-solid fa-trash fa-lg"></i></button></td>
                                <td><a href="/student/view/{{$students->id}}"><button class="view"><i class="fa-solid fa-street-view fa-lg"></i></button></a></td>

                                <div id="confirmationModal" class="modal">
                                    <div class="modal-content">
                                        <p>Are you sure you want to delete this student's information?</p>
                                            <form action="/delete/{{$students->id}}" method="POST">
                                                @csrf
                                                <button class="confirm-button" onclick="deleteStudent()">Yes, Delete</button>    
                                            </form>   
                                            <button class="cancel-button" onclick="closeModal()">Cancel</button> 
                                    </div>
                                </div>
                            </tr>
                        @endforeach            
                </tbody>
            </thead>
        </table>

        <a href="/student/create">
            <button class="createstudents">Create New Student</button>
        </a>
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

        function deleteStudent() {

            alert("Student information has successfully been deleted!");
            closeModal(); 
        }
    </script>

</body>
</html>