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
    <h1>Create Student</h1>

    <form action="{{ route('information.store') }}" method="POST">
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
        <input type="text" name="first_name" value="{{ old('first_name') }}"><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" name="last_name" value="{{ old('last_name') }}"><br>

        <label for="middle_name">Middle Name:</label><br>
        <input type="text" name="middle_name" value="{{ old('middle_name') }}"><br>

        <label for="year_section">Year / Section:</label><br>
        <input type="text" name="year_section" value="{{ old('year_section') }}"><br>

        <label for="age">Age:</label><br>
        <input type="number" name="age" value="{{ old('age') }}"><br>

        <label for="contact_number">Contact Number:</label><br>
        <input type="text" name="contact_number" value="{{ old('contact_number') }}"><br>

        <label for="address">Address:</label><br>
        <textarea name="address">{{ old('address') }}</textarea><br>

        <label for="mother_name">Mother's Name:</label><br>
        <input type="text" name="mother_name" value="{{ old('mother_name') }}"><br>

        <label for="father_name">Father's Name:</label><br>
        <input type="text" name="father_name" value="{{ old('father_name') }}"><br>

        <label for="gender">Gender:</label><br>
        <select name="gender">
            <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>Female</option>
        </select><br><br>

        <div class="buttons">
            <button type="submit">Submit</button>
            <a href="/">To Students Page</a>
        </div>
    </form>
</body>

</html>
