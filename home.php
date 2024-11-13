<html>
    <head>
        <title>Home page</title>
      
        <style>
     body {  
    font-family: Arial, sans-serif;  
    margin: 0;  
    padding: 0;  
}  

header {  
    display: flex;  
    justify-content: space-between;  
    align-items: center;  
    background: #333;  
    color: #fff;  
    padding: 10px 20px;  
    position: sticky; /* Makes the header sticky */  
    top: 0; /* Positions it at the very top */  
    z-index: 1000; /* Ensures it stays above other content */  
}  

.logo {  
    display: flex;  
    align-items: center;  
}  

.logo img {  
    height: 50px; /* Adjust as needed */  
    margin-right: 10px; /* Spacing between logo and name */  
}  

.navbar {  
    margin-left: auto; /* Pushes the navigation to the right */  
}  

nav ul {  
    list-style-type: none;  
    padding: 0;  
    margin: 0;  
    display: flex; /* Aligns the links in a row */  
}  

nav ul li {  
    margin: 0 20px;  
}  

nav ul li a {  
    color: white;  
    text-decoration: none;  
    font-weight: bold;  
}  

nav ul li a:hover {  
    text-decoration: underline;  
}  

main {  
    padding: 20px;  
}  

footer {  
    background: #333;  
    color: #fff;  
    text-align: center;  
    padding: 10px 0;  
}
li img {
            width: 100%;
            transition: transform 0.3s ease;
        }
        li:hover img {
            transform: scale(1.1);
        }
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            width: 80%;
            max-width: 500px;
            text-align: left;
        }
        .modal-content h3 {
            margin-top: 0;
        }
        .close {
            float: right;
            font-size: 20px;
            cursor: pointer;
        }
        .hotel{
            
           position: sticky;
           display: flex;
           width: 100%;
           transition: transform 0.3s ease;
        }
        
        </style>
</head>
<body>
    <?php 


    
    ?>

<header>
        <div class="logo">
            <img src="https://img.freepik.com/premium-vector/hotel-logo-vector-illustration_969863-5246.jpg" alt="hotel logo">
            <h1 text align="center"> Hotel Reservation System </h1>
        </div>
       
       
        <nav>
            <ul>
                
                <li><a href="home.php">Home</a></li>
              
                <li><a href="calendar.php">Calendar</a></li>
                <li><a href="testimonial.html">Reservations</a></li>
                <li><a href="contact us.html">Contact Us</a></li>
    
                
            </ul>
            

        </nav>
       
    </header>
    <img class = "hotel" src="https://digital.ihg.com/is/image/ihg/ihg-homepg-refresh-homepg-mktg-mod-imea-1440x720?fit=crop,1&wid=1440&hei=720" alt="hotel">
<div id="details">

    <p>Cyber Knights group has a good experience in providing best IT solutions for the customers to manage their organizations. The HRS will be a standalone web-based application, interacting with a central database where all information related to hotels, rooms, reservations, and users will be stored.</p>
</div>

</body>


</html>