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

        table {
            border: 5px solid #000000;
            border-radius: 10px;
            margin-top: 60px;
            padding: 50px;
            display: flex;
        }

        th, td {
            border: 1px;
            padding: 20px;
            text-align: center;
        }

        .returnbutton {
            background-color: #de3549;
            color: #fff;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none; 
        }

        .returnbutton:hover {
            background-color: #962d26;

        }


    </style>
</head>
<body>

    <!-- Header Section -->
    <header>

        <h1>Welcome to Test Academy</h1>
        <p>Student Information Section.</p>
    </header>
    <table class="table">
        @if($student)
            <tr>
                <th>Student ID: </th><td>{{$student -> id}}</td>
            </tr>
            <tr>
                <th>Student First Name: </th><td>{{$student -> student_first_name}}</td>
            </tr>
            <tr>
                <th>Student Last Name: </th><td>{{$student -> student_last_name}}</td>
            </tr>
            <tr>
                <th>Student Email: </th><td>{{$student -> student_email}}</td>
            </tr>
            <tr>
                <th>Student Address: </th><td>{{$student -> student_address}}</td>
            </tr>
        @endif
            <tr>
                <td colspan="2" style="text-align: center;"><a href="/" type="button" class="returnbutton">Return</a></td>
            </tr>
    </table>
    <footer>
        <p>&copy; 2024 Test Academy. Ayahtek Activity.</p>
    </footer>

</body>
</html>