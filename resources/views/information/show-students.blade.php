<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Students</title>
    <style>
        body {
            max-width: 750px;
            margin: 0 auto;
        }

        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid #000;
            padding: 0.5rem;
        }

        th {
            background-color: #8bc5ffa4;
        }
    </style>
</head>

<body>
    <h1>Students</h1>

    @if ($students->isEmpty())
        <p>No information found.</p>
    @else
        {{-- <div style="background-color: #000"> --}}
        <div>
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
                        <td>Update</td>
                        <td>
                            <form action="{{ route('information.deleteStudent', $student->id) }}" method="POST">
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
