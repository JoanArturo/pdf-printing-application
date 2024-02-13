<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF de Usuario</title>

    <style>
        .page-break {
            page-break-after: always;
        }

        #watermark {
            position: fixed;

            /**
                Set a position in the page for your image
                This should center it vertically
            **/
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;

            /** Change image dimensions**/
            width:    8cm;
            height:   8cm;
            opacity: 0.5;

            /** Your watermark should be behind every content**/
            z-index:  -1000;
        }
    </style>
</head>
<body>
    <div id="watermark">
        <img src="img/logo.png" alt="Logo" width="140" height="140">
    </div>

    <h1>Page 1</h1>
    <table border="1">
        <tr>
            <td>Nombre</td>
            <td>{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td>Edad</td>
            <td>{{ $data['age'] }}</td>
        </tr>
        <tr>
            <td>Rol</td>
            <td>{{ $data['role'] }}</td>
        </tr>
    </table>

    <div class="page-break"></div>

    <h1>Page 2</h1>

    <div class="page-break"></div>
    <h1>Page 3</h1>
</body>
</html>
