<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Create Student</title>
    <style>
        body {
            background-color: #30ff5254;
            max-width: 625px;
            margin: 0 auto;
        }

        form {
            padding: 1rem;
            background-color: #fff;
            box-shadow: #00000040 0px 14px 28px, #00000038 0px 10px 10px;
        }

        .errors-wrapper {
            margin-bottom: 1rem;
            color: rgb(255, 133, 133);
        }
    </style>
</head>

<body>
    <h1>Create Student</h1>

    <form action="{{ route('information.store') }}" method="POST">
        {{-- <form action="{{ route('information.crapper') }}" method="GET"> --}}
        @csrf

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
        <input type="text" id="first_name" name="first_name"><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name"><br>

        <label for="middle_name">Middle Name:</label><br>
        <input type="text" id="middle_name" name="middle_name"><br>

        <label for="year_section">Year / Section:</label><br>
        <input type="text" id="year_section" name="year_section"><br>

        <label for="age">Age:</label><br>
        {{-- <input type="number" id="age" name="age" min="0" max="99"><br> --}}
        <input type="number" id="age" name="age"><br>

        <label for="contact_number">Contact Number:</label><br>
        <input type="text" id="contact_number" name="contact_number"><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address"></textarea><br>

        <label for="mother_name">Mother's Name:</label><br>
        <input type="text" id="mother_name" name="mother_name"><br>

        <label for="father_name">Father's Name:</label><br>
        <input type="text" id="father_name" name="father_name"><br>

        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
