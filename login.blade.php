<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <form method="post" action="login">
    @csrf
    Username: <input type="text" name="username" placeholder="Enter username"><br><br>
    Password:  <input type="password" name="password" placeholder="Enter password"><br><br>
    <input type="submit" value="Submit"><br>
  </form>
</body>
</html>
