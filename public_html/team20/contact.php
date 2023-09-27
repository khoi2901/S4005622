<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Menu Bar</title>
</head>
<body>
    <div class="menu-container">
        <img src="logo.png" alt="Logo" class="logo">
        
        <div class="menubar">
            <a href='homepage.php'>Home</a>
            <a href='contact.php'>Contact</a>
            <a href='/'>Faq</a>
            <a href=''>Community</a>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button class="search-button">Search</button>
        </div>
        <div class="login-button" onclick="toggleLoginForm()">
            <span class="login-icon">Login</span>
        </div>
    </div>
   


      <div class="content-container">
    <div class="additional-buttons">
        <div class="createPost-button">
            <button class="createPost-button">Create Post?</button>
        </div>
      
            
        <ul>
            <li><img src="square_image1.png" alt="Square Image"> <a href='home.html'>Home</a></li>
            <li><img src="square_image1.png" alt="Square Image"><a href='home.html'>Trending</a></li>
            <li><img src="square_image2.png" alt="Square Image"><a href='home.html'>Foryou</a></li>
            <li><img src="square_image3.png" alt="Square Image"><a href='home.html'>Community A</a></li>
            <li><img src="square_image4.png" alt="Square Image"><a href='home.html'>Community B</a></li>
            <li><img src="square_image5.png" alt="Square Image"><a href='home.html'>Community C</a></li>
            <li><img src="square_image6.png" alt="Square Image"><a href='home.html'>Community D</a></li>
        </ul>
    </div>

    <div class="login-form" id="loginForm">
        <h2>Login</h2>
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"><br><br>
            <button type="submit">Login</button>
        </form>
    </div>
