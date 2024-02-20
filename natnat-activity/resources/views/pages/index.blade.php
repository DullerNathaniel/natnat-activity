<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        }

        .createstudents:hover {
            background-color: #45a049;
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
                            <th scope="row">{{$students ->id}}</th>
                            <td>{{$students -> student_first_name}}</td>
                            <td>{{$students -> student_last_name}}</td>
                            <td>{{$students -> student_email}}</td>
                            <td>{{$students -> student_address}}</td>
                        </tr>
                    @endforeach            
            </tbody>
            </thead>
        </table>

        <a href="{{ route('pages.create') }}">
            <button class="createstudents">Create New Student</button>
        </a>
    </div>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Test Academy. Ayahtek Activity.</p>
    </footer>

</body>
</html>