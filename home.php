
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zillow</title>
    <link rel="stylesheet" href="styles.css"> 
    
</head>
<body>
    <header>
        <div class="container">
            <h1>Zillow</h1>
            <p>Your destination for finding your dream home</p>
            <form action="listings.php">
    <input type="submit" value="Listings"/>
    </form>
    
    <form action="searchbar.php">
    <input type="submit" value="Search"/> 
    </form>
    <form action="logout.php">
    <input type="submit" value="Log Out"/>
</form>
     
        </div>
    </header>

    <section id="featured-properties">
        <div class="container">
            <h2>Featured Properties</h2>
            <div class="property">
                <img src="https://photos.zillowstatic.com/fp/3b7da950a36f7898faa397aa061e1ab0-cc_ft_768.webp" alt="Property 1">
                <div class="property-details">
                    <h3>Beautiful Residential</h3>
                    <p><strong>Price:</strong> $264,500.00 </p>
                    <p><strong>Location:</strong> State College, PA</p>
                </div>
            </div>
           
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Zillow. All rights reserved.</p>
        </div>
    </footer>



     
       
    </div>
</body>
</html>
