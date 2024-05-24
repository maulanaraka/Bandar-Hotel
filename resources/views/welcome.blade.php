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

        h3 a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, transform 0.3s;
        }

        h3 a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1>HOMEPAGE BANDAR HOTEL</h1>
    <h3><a href="billings/index.blade.php">Billings</a></h3>
    <h3><a href="guests">Guests</a></h3>
    <h3><a href="reservations">Reservations</a></h3>
    <h3><a href="reviews">Reviews</a></h3>
    <h3><a href="rooms/reviewpage.blade.php">Rooms</a></h3>
</body>
</html>
