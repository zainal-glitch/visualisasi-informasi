<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zainal latihan1.py</title>
    <link rel="stylesheet" href="https://pyscript.net/releases/2023.03.1/pyscript.css" />
    <script defer src="https://pyscript.net/releases/2023.03.1/pyscript.js"></script>

    <py-config>
        packages = ["matplotlib", "numpy"]
    </py-config>
    <style>
        .indicator {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            display: inline-block;
        }
        .color-box {
            width: 20px;
            height: 20px;
            display: inline-block;
            margin-right: 10px;
        }
        .blue { background-color: blue; }
        .red { background-color: red; }
    </style>
</head>
<body>
    <h1>Matplotlib Gua paling keren</h1>
    <div id="plot"></div>
    <div class="indicator">
        <p><span class="color-box blue"></span> Garis Biru: Menandakan kenaikan jumlah lulusan</p>
        <p><span class="color-box red"></span> Garis Merah: Menandakan penurunan jumlah lulusan</p>
    </div>
    <py-script src="py/latihan1.py">
    </py-script>
</body>
</html>