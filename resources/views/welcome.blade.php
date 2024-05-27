<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 40px;
        }

        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .button-container h3 {
            margin: 0;
        }

        .button-container a {
            display: block;
            width: 250px;
            text-align: center;
            margin: 10px;
            padding: 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .button-container a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .button-container img {
            width: 100%;
            height: auto;
            max-height: 200px;
            border-radius: 4px;
        }

        .button-container p {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h1>HOMEPAGE BANDAR HOTEL</h1>
    <h4>Built with love,</h4>
    <h4>Dhio - Raka - Zaki - Laras - Arvin</h4>
    <div class="button-container">
        <h3><a href="billings"><img src="img/receipt.jpg" alt="Billings"><p>Billings</p></a></h3>
        <h3><a href="guests"><img src="img/guest.jpg" alt="Guests"><p>Guests</p></a></h3>
        <h3><a href="reservations"><img src="img/reservations.jpg" alt="Reservations"><p>Reservations</p></a></h3>
        <h3><a href="reviews"><img src="img/review.jpg" alt="Reviews"><p>Reviews</p></a></h3>
        <h3><a href="rooms/hotel.php"><img src="img/hotel.jpg" alt="Rooms"><p>Rooms</p></a></h3>
    </div>
</body>
</html>
