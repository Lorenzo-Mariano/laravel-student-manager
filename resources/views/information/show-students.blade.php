<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Students</title>
    <style>
        .table-wrapper {
            width: min-content;
            margin: 0 auto;
            margin-bottom: 1rem;
        }

        table {
            border-collapse: collapse;
            box-shadow: rgba(17, 12, 46, 0.26) 0px 48px 100px 0px;
        }

        td,
        th {
            border: 1px solid #000;
            padding: 0.75rem;

            border: none;
        }

        th {
            background-color: #8bc5ffa4;
        }

        td {
            background-color: #fff;
        }

        td>button>a {
            all: unset;
            cursor: pointer;
        }

        .error-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 200px;

            background-color: rgba(33, 66, 255, 0.089);
        }
    </style>
</head>

<body>


    <div class="table-wrapper">
        <nav>
            <a href="/">Home</a>,
            <a href="/create-student">Create Student</a>
        </nav>
        <h1>Students</h1>
        <table>
            <tr>
                <th>Record ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Year/Section</th>
                <th>Age</th>
                <th>Contact Number</th>
                <th>Address</th>
                <th>Mother's Name</th>
                <th>Father's Name</th>
                <th>Gender</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @if ($students->isEmpty())
        </table>
        <div class="error-wrapper">
            <h2>No information found.</h2>
        </div>
    </div>
@else
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->middle_name }}</td>
            <td>{{ $student->year_section }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->contact_number }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->mother_name }}</td>
            <td>{{ $student->father_name }}</td>
            <td>{{ $student->gender }}</td>
            <td>
                <button type="submit">
                    <a href="/update-students/{{ $student->id }}">
                        Update
                    </a>
                </button>
            </td>
            <td>
                <form action="/information/delete/{{ $student->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    </div>
    @endif

</body>

</html>
