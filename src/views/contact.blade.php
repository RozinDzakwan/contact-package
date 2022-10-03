<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Create Packages</title>
</head>

<body>
    <h1>Example Form</h1>
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <label for="">Name</label><br>
        <input type="text" name="name" placeholder="Input your valid name"><br><br>
        <label for="">Email</label><br>
        <input type="email" name="email" placeholder="Input your valid email"><br><br>
        <label for="">Your Query</label><br>
        <textarea name="message" cols="30" rows="10" placeholder="Input your query"></textarea><br>
        <button type="submit">Input</button>
    </form>

</body>

</html>
