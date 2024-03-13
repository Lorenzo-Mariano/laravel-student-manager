<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Update Student</title>
    <style>
        body {
            background-color: #3078ff54;
            max-width: 625px;
            margin: 0 auto;
        }

        form {
            padding: 1rem;
            background-color: #fff;
            box-shadow: #00000040 0px 14px 28px, #00000038 0px 10px 10px;
            margin-bottom: 2rem;
        }

        .buttons {
            display: flex;
            gap: 0.5rem;
        }

        .errors-wrapper {
            margin-bottom: 1rem;
            color: rgb(255, 133, 133);
        }
    </style>
</head>

<body>
    <h1>Update Student</h1>
    <h2>Selected student ID: {{ $student->id }}</h2>

    {{-- action should point to update in controller --}}
    <form action="/information/update/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            @if (session('success'))
                <span>{{ session('success') }}</span><br>
            @endif
        </div>

        @if ($errors->any())
            <div class="errors-wrapper">
                @foreach ($errors->all() as $error)
                    <span>{{ $error }}</span><br>
                @endforeach
            </div>
        @endif

        <label for="first_name">First Name:</label><br>
        <input type="text" name="first_name" value="{{ $student->first_name }}"><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" name="last_name" value="{{ $student->last_name }}"><br>

        <label for="middle_name">Middle Name:</label><br>
        <input type="text" name="middle_name" value="{{ $student->middle_name }}"><br>

        <label for="year_section">Year / Section:</label><br>
        <input type="text" name="year_section" value="{{ $student->year_section }}"><br>

        <label for="age">Age:</label><br>
        <input type="number" name="age" value="{{ $student->age }}"><br>

        <label for="contact_number">Contact Number:</label><br>
        <input type="text" name="contact_number" value="{{ $student->contact_number }}"><br>

        <label for="address">Address:</label><br>
        <textarea name="address">{{ $student->address }}</textarea><br>

        <label for="mother_name">Mother's Name:</label><br>
        <input type="text" name="mother_name" value="{{ $student->mother_name }}"><br>

        <label for="father_name">Father's Name:</label><br>
        <input type="text" name="father_name" value="{{ $student->father_name }}"><br>

        <label for="gender">Gender:</label><br>
        <select name="gender">
            <option value="male" {{ $student->gender === 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ $student->gender === 'female' ? 'selected' : '' }}>Female</option>
        </select>
        <br><br>

        <div class="buttons">
            <button type="submit">Update</button>
            <a href="/">To Students Page</a>
        </div>
    </form>
</body>

</html>
