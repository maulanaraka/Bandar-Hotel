<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h3 {
            text-align:center;
        }
    </style>
</head>
<body>
    <H1>KELOMPOK 1 : HOTEL </H1>
    <br>
    <br>
    <h3>TABLE REVIEW</h3>
    <table>
        <thead>
            <tr>
                <th>ReviewID</th>
                <th>ReservationID</th>
                <th>Rating</th>
                <th>Comment</th>
                <th>InputDate</th>
                <th>TravelType</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>111</td>
                <td>5</td>
                <td>Pelayanan yang sangat baik dan kamar nyaman.</td>
                <td>28 Oktober 2024</td>
                <td>Business</td>
            </tr>
            <tr>
                <td>2</td>
                <td>222</td>
                <td>4</td>
                <td>Lokasi bagus, tapi kebersihan bisa ditingkatkan.</td>
                <td>1 November 2024</td>
                <td>Others</td>
            </tr>
            <tr>
                <td>3</td>
                <td>333</td>
                <td>5</td>
                <td>Saya benar-benar menyukai penginapanku! Semuanya sempurna.</td>
                <td>3 November 2024</td>
                <td>Education</td>
            </tr>
            <tr>
                <td>4</td>
                <td>444</td>
                <td>4</td>
                <td>Staf yang ramah dan fasilitas yang bagus.</td>
                <td>2 November 2024</td>
                <td>Holiday</td>
            </tr>
            <tr>
                <td>5</td>
                <td>555</td>
                <td>3</td>
                <td>Pengalaman menginap yang lumayan, tapi Wi-Fi tidak stabil.</td>
                <td>4 November 2024</td>
                <td>Business</td>
            </tr>
        </tbody>
    </table>
    <h3>TABLE ROOM</h3>
    <table>
        <thead>
            <tr>
                <th>RoomID</th>
                <th>RoomNumber</th>
                <th>RoomType</th>
                <th>Rate</th>
                <th>Availability</th>
                <th>Insurance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>100</td>
                <td>1</td>
                <td>Standard Room</td>
                <td>Rp1,000,000</td>
                <td>Occupied</td>
                <td>305</td>
            </tr>
            <tr>
                <td>101</td>
                <td>2</td>
                <td>Standard Room</td>
                <td>Rp1,000,000</td>
                <td>Occupied</td>
                <td>306</td>
            </tr>
            <tr>
                <td>200</td>
                <td>3</td>
                <td>Superior Room</td>
                <td>Rp2,000,000</td>
                <td>Empty</td>
                <td>307</td>
            </tr>
            <tr>
                <td>201</td>
                <td>4</td>
                <td>Superior Room</td>
                <td>Rp2,000,000</td>
                <td>Maintenance</td>
                <td>308</td>
            </tr>
            <tr>
                <td>300</td>
                <td>5</td>
                <td>Kings Room</td>
                <td>Rp3,000,000</td>
                <td>Occupied</td>
                <td>309</td>
            </tr>
        </tbody>
    </table>
    <h3>TABLE BILLING</h3>
    <table>
        <thead>
            <tr>
                <th>BillID</th>
                <th>ReservationID</th>
                <th>TotalAmount</th>
                <th>PaymentStatus</th>
                <th>CreditCardNumber</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>123456</td>
                <td>111</td>
                <td>Rp1,000,000</td>
                <td>Paid</td>
                <td>1234</td>
            </tr>
            <tr>
                <td>123457</td>
                <td>222</td>
                <td>Rp1,000,000</td>
                <td>Paid</td>
                <td>5689</td>
            </tr>
            <tr>
                <td>123458</td>
                <td>333</td>
                <td>Rp4,000,000</td>
                <td>Paid</td>
                <td>1357</td>
            </tr>
            <tr>
                <td>123459</td>
                <td>444</td>
                <td>Rp2,000,000</td>
                <td>Paid</td>
                <td>2468</td>
            </tr>
            <tr>
                <td>123460</td>
                <td>555</td>
                <td>Rp6,000,000</td>
                <td>Paid</td>
                <td>1987</td>
            </tr>
        </tbody>
    </table>
    <h3>TABLE RESERVATION</h3>
    <table>
        <thead>
            <tr>
                <th>ReservationID</th>
                <th>NIKID</th>
                <th>RoomID</th>
                <th>CheckInDate</th>
                <th>CheckOutDate</th>
                <th>TotalAmount</th>
                <th>PenyewaanMobil</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>111</td>
                <td>101</td>
                <td>100</td>
                <td>27 Oktober 2024</td>
                <td>28 Oktober 2024</td>
                <td>Rp1,000,000</td>
                <td>001</td>
            </tr>
            <tr>
                <td>222</td>
                <td>102</td>
                <td>101</td>
                <td>31 Oktober 2024</td>
                <td>1 November 2024</td>
                <td>Rp1,000,000</td>
                <td>002</td>
            </tr>
            <tr>
                <td>333</td>
                <td>103</td>
                <td>200</td>
                <td>1 November 2024</td>
                <td>3 November 2024</td>
                <td>Rp4,000,000</td>
                <td>003</td>
            </tr>
            <tr>
                <td>444</td>
                <td>104</td>
                <td>201</td>
                <td>1 November 2024</td>
                <td>2 November 2024</td>
                <td>Rp2,000,000</td>
                <td>004</td>
            </tr>
            <tr>
                <td>555</td>
                <td>105</td>
                <td>300</td>
                <td>2 November 2024</td>
                <td>4 November 2024</td>
                <td>Rp6,000,000</td>
                <td>005</td>
            </tr>
        </tbody>
    </table>
    <h3>TABLE GUEST</h3>
    <table>
        <thead>
            <tr>
                <th>NIKID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>CreditCardNumber</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>101</td>
                <td>Ale</td>
                <td>aleale@gmail.com</td>
                <td>0812-345-6789</td>
                <td>Suite 839 Jl. Hayamwuruk No. 89, Berau, KU 39222</td>
                <td>1234</td>
            </tr>
            <tr>
                <td>102</td>
                <td>Leo</td>
                <td>leoamalia@yahoo.co.id</td>
                <td>0878-901-2345</td>
                <td>Jl. MH. Thamrin No. 24, Sumbawa, KB 22844</td>
                <td>5689</td>
            </tr>
            <tr>
                <td>103</td>
                <td>Lea</td>
                <td>leavilia.jet@gmail.com</td>
                <td>0813-456-7890</td>
                <td>Jl. Gajahmada No. 50, Jambi, SG 40689</td>
                <td>1357</td>
            </tr>
            <tr>
                <td>104</td>
                <td>Satoru</td>
                <td>satorusatria@gmail.com</td>
                <td>0877-890-1234</td>
                <td>Jl. Hayamwuruk No. 30, Bitung, SL 21490</td>
                <td>2468</td>
            </tr>
            <tr>
                <td>105</td>
                <td>Suguru</td>
                <td>suguruarianto@student.telkomuniversity.ac.id</td>
                <td>0815-678-9012</td>
                <td>Jl. Gatot Soebroto No. 70, Toba Samosir, JA 83706</td>
                <td>1987</td>
            </tr>
        </tbody>
    </table>


</body>
</html>
