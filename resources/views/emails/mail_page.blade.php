<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Important Contact Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #4CAF50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px 0;
            vertical-align: top;
        }

        .label {
            width: 25%;
            font-weight: bold;
            color: #333;
            text-align: left;
        }

        .value {
            width: 75%;
            color: #555;
        }

        hr {
            border: none;
            border-bottom: 1px solid #ddd;
            margin: 10px 0;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Contact Details</h2>
        
        <table>
            <tr>
                <td class="label">Name:</td>
                <td class="value"><b>{{ $user->name }}</b></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td class="label">Email:</td>
                <td class="value"><b>{{ $user->email }}</b></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td class="label">Message:</td>
                <td class="value"><b>{{ $user->message }}</b></td>
            </tr>
        </table>
    </div>

</body>

</html>
