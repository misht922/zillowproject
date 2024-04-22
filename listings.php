<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listing</title>
</head>
<body>
<form action="home.php">
    <input type="submit" value="Home"/> 
    </form>
    <h2>Current Listings</h2>
    <form action="listcode.php" method="GET">
        <input type="text" name="query" placeholder="Enter a status">
        <button type="submit">Search</button>
    </form>
</body>
</html>