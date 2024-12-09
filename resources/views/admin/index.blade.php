<!-- resources/views/admin/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to Admin Dashboard</h1>
    <h2>Subheading Here</h2>


    <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <input type="submit" value="Logout">

                   
                </form>

</body>
</html>
