<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>responsive nav bar</title>
</head>
<style>
  .logo {
    position: absolute;
    left: 377px;
    width: 93px;
    cursor: pointer;
    top:20px;
}

li, a, button{
    font-family: "Montserrat", sans-serif;
    font-weight: 600;
    font-size: 16px;
    color: black;
    text-decoration: none;
    
}
header{
    background-color:white;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    box-shadow: 2px 2px 10px black;
    position: fixed;
  width: 100%;
  z-index: 1000;
}
header:hover{
    box-shadow: 2px 2px 25px black;
    transition: 0.5s;
}
.navlinks li{
    display: inline-block;
    margin: 30px;
    align-items: center;
}
.navlinks li a:hover{
    color: tomato;
    text-shadow: 1px 1px 5px black;
}

button{
    width: 100%;
    padding: 12px;
    background-color: firebrick;
    border-radius: 50px;
    outline: none;
    cursor: pointer;
    transition: all 0.5s, ease 0s;
    border: none;
    z-index: 999;
}
button:hover{
    box-shadow: 1px 1px 5px black;
}
.sidebar{
    position: fixed;
    top: 0;
    right: 0;
    height: 100vh;
    width: 300px;
    z-index: 999;
    background-color: transparent;
    backdrop-filter: blur(10px);
    box-shadow: -3px 0 10px black;
    display: none;
    justify-content: flex-start;
    list-style: none;
    flex-direction: column;
    transition: transform 0.3s ease;
    transform: translateX(100%);
}
.sidebar li{
    width: 100%;
    margin: 25px;
    text-shadow: 1px 1px 2px black;
    
}
.sidebar img{
    position: absolute;
    bottom: 20px;
    width: 100%;
    height: 120px;
}
nav ion-icon{
    font-size: 2em;
    position: absolute;
    top: 35px;
    right: 20px;
}
h2{ 
    color: wheat;
    text-shadow: #002423 -2px 2px 10px;
    font-size: 2em;
    margin: 20%;
    text-align: center;
}
@media only screen and (min-width: 830px){
    .navlinks ion-icon{
        display: none;
    }
}
@media only screen and (max-width: 830px){
    .navlinks .items{
        display: none;
    }
    .logo {
    position: absolute;
    left: 50px;
    width: 70px;
    cursor: pointer;
    top:11px
}
}

</style>
<body>
    <header>
        <a href="index.php"> <img src="./img/travelerBontique.png" alt="" class="logo"></a>
       
        <nav>
            <ul class="navlinks">
                <li class="items" ><a href="index.php">Home</a></li>
                <li class="items" ><a href="about.php">About Us</a></li>
                <li class="items" ><a href="service.php">Packages</a></li>
                <li class="items" ><a href="menu.php">Services</a></li>
                <li class="items" ><a href="gallery.php">Gallery</a></li>
                <li class="items"><a href="contact.php"><button>Contact Us</button></a></li>
                <li onclick="showSidebar()"><a href="#"><ion-icon name="menu-outline"></ion-icon></a></li>
            </ul>
            <ul class="sidebar">
                <li onclick="closeSidebar()"><a href="#"><ion-icon name="close-outline"></ion-icon></a></li>
                <li class="items"><a href="index.php">Home</a></li>
                <li class="items"><a href="about.php">About Us</a></li>
                <li class="items"><a href="service.php">Packages</a></li>
                <li class="items"><a href="menu.php">Services</a></li>
                <li class="items"><a href="gallery.php">Gallery</a></li>
                <li class="items"><a href="contact.php" ><button type=button style="width: 118px;" >Contact Us</button></a></li>

            </ul>
        </nav>
    </header>
</body>     
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
      function showSidebar() {
    const sidebar = document.querySelector(".sidebar");
    sidebar.style.display = 'flex';
    setTimeout(() => {
        sidebar.style.transform = 'translateX(0)'; 
    }, 10);
}

function closeSidebar() {
    const sidebar = document.querySelector(".sidebar");
    sidebar.style.transform = 'translateX(100%)'; 
    setTimeout(() => {
        sidebar.style.display ='none';
    }, 300);
}
    </script>
</html>
