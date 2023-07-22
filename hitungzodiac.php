<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
        }

        .topnav {
            overflow: hidden;
            background-color: #14171a;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1;
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #14171a;
            color: #1E90FF;
            /* warna biru teks navigasi */
        }

        .topnav a.active {
            background-color: #14171a;
            color: white;
            font-weight: bold;
        }

        .topnav .icon {
            display: none;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }

        /* Adjust the font size of the value text */
        #volumeValue {
            font-size: 20px;
            font-weight: bold;
            color: #1b78e0;
        }

        input[type=button] {
            width: 100%;
            background-color: #1E90FF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=button]:hover {
            background-color: #1872d9;
        }

        div.container {
            max-width: 400px;
            margin: 0 auto;
            border-radius: 5px;
            background-color: white;
            padding: 20px;
            margin-bottom: 30px;
            /* border: 1.4px solid #081b30; */
            /* box-shadow: 0 0 10px #a8d1ff; */
            /* Tambahkan tanda buka kurung kurawal untuk memulai blok CSS */
            text-align: center;
            /* Add the blue shadow here */
        }

        h2 {
            margin-top: 100px;
            text-align: center;
            color: #081b30;
        }

        h3 {
            text-align: center;
            color: #081b30;
            font-size: 18px;
        }

        label {
            font-size: 16px;
            color: #081b30;
        }

        p {
            text-align: center;
            color: white;
        }

        footer {
            background-color: #14171a;
            color: #fff;
            text-align: center;
            padding: .05rem;
        }

        .slider {
            -webkit-appearance: none;
            width: 85%;
            height: 20px;
            background: linear-gradient(to right, #1b78e0 0%, #1b78e0 calc((100% - 28px) * var(--percentage)), #ffffff calc((100% - 28px) * var(--percentage)), #ffffff 100%);
            border: 2px solid #081b30;
            border-radius: 10px;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
            margin-top: 20px;
        }

        /* Remove default track styling */
        .slider::-webkit-slider-runnable-track {
            background: transparent;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 18px;
            height: 28px;
            border-radius: 4px;
            background: #1b78e0;
            cursor: pointer;
            border: 2px solid #081b30;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            background: #04AA6D;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="topnav" id="myTopnav">
        <a href="#" class="active">yLess Store</a>
        <a href="index.php">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <h2>Hitung Point Skin Zodiac</h2>
    <div class="container">
        <label for="volume">Point Zodiac Anda Saat ini :</label>
        <span id="volumeValue">100</span>
        <br>
        <!-- <input type="range" id="volume" name="volume" min="0" max="200" value="100" oninput="updateVolume()"> -->
        <input type="range" id="volume" min="0" max="100" value="50" class="slider" id="myRange"
            oninput="updateVolume(); updateVolume2();">
        <br>
        <p style="font-size: 16px; color: #081b30;">
            Kamu membutuhkan maksimal <span id="maxDiamond"
                style="font-size: 20px; color: #1b78e0; font-weight: bold;">1000</span>
            <span class="diamond-icon"> <i class="fa fa-diamond" style="color: #1b78e0;"></i></span> untuk mendapatkan
            Skin Zodiac
            <span style="color: red; font-weight: bold">(Harga Normal)</span>
        </p>
        <p style="font-size: 16px; color: #081b30;">
            Kamu membutuhkan maksimal <span id="maxDiamond2"
                style="font-size: 20px; color: #1b78e0; font-weight: bold;">700</span>
            <span class="diamond-icon"> <i class="fa fa-diamond" style="color: #1b78e0;"></i></span> untuk mendapatkan
            Skin Zodiac
            <span style="color: red; font-weight: bold">(Harga Diskon 30%)</span>
        </p>
        <a href="hitungmw.php">
            <input type="button" value="Hitung Point Magic Wheel">
        </a>
        <br>
        <br>
        <a href="hitungwr.php">
            <input type="button" value="Hitung Winrate Mobile Legends">
        </a>
    </div>
    <center>

    </center>
    <br>
    <footer>
        <p>Copyright &copy; 2023 yLess Store All Rights Reserved.</p>
    </footer>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        function updateVolume() {
            var volumeInput = document.getElementById("volume");
            var volumeValue = document.getElementById("volumeValue");
            var maxDiamond = document.getElementById("maxDiamond");
            var initialValue = parseInt(volumeInput.value);
            var requiredDiamond = 0;

            if (initialValue === 100) {
                // If the initial point is already 200, set requiredDiamond to 0
                requiredDiamond = 0;
            } else if (initialValue % 5 === 0 && initialValue + 5 <= 100) {
                // Calculate requiredDiamond to add 5 points continuously until the nearest multiple of 5 below 200
                requiredDiamond = (100 - initialValue) / 5 * 100;
            } else {
                // Calculate requiredDiamond to add 5 points repeatedly until it reaches the nearest multiple of 5 and then continue adding 5 points until it reaches 200
                var nearestMultipleOf5 = Math.floor(initialValue / 5) * 5;
                var diamondsToReachMultipleOf5 = (nearestMultipleOf5 + 5 - initialValue) * 20;
                var diamondsAfterReachingMultipleOf5 = (100 - (nearestMultipleOf5 + 5)) / 5 * 100;
                requiredDiamond = diamondsToReachMultipleOf5 + diamondsAfterReachingMultipleOf5;
            }

            volumeValue.textContent = initialValue;
            maxDiamond.textContent = requiredDiamond;
        }
        function updateVolume2() {
            var volumeInput = document.getElementById("volume");
            var volumeValue = document.getElementById("volumeValue");
            var maxDiamond = document.getElementById("maxDiamond2");
            var initialValue = parseInt(volumeInput.value);
            var requiredDiamond = 0;

            if (initialValue === 100) {
                // If the initial point is already 100, set requiredDiamond to 0
                requiredDiamond = 0;
            } else if (initialValue % 5 === 0 && initialValue + 5 <= 100) {
                // Calculate requiredDiamond to add 5 points continuously until the nearest multiple of 5 below 100
                requiredDiamond = (100 - initialValue) / 5 * 70;
            } else {
                // Calculate requiredDiamond to add 5 points repeatedly until it reaches the nearest multiple of 5 and then continue adding 5 points until it reaches 100
                var nearestMultipleOf5 = Math.floor(initialValue / 5) * 5;
                var diamondsToReachMultipleOf5 = (nearestMultipleOf5 + 5 - initialValue) * 14;
                var diamondsAfterReachingMultipleOf5 = (100 - (nearestMultipleOf5 + 5)) / 5 * 70;
                requiredDiamond = diamondsToReachMultipleOf5 + diamondsAfterReachingMultipleOf5;
            }

            volumeValue.textContent = initialValue;
            maxDiamond.textContent = requiredDiamond;
        }

        // Fungsi untuk mendapatkan nilai persentase geseran slider
        function getSliderPercentage() {
            var volumeInput = document.getElementById("volume");
            var percentage = (volumeInput.value - volumeInput.min) / (volumeInput.max - volumeInput.min - 8);
            return percentage;
        }

        // Fungsi untuk mengatur nilai persentase geseran sebagai CSS variabel
        function setSliderBackground() {
            var slider = document.querySelector('.slider');
            slider.style.setProperty('--percentage', getSliderPercentage());
        }

        // Panggil fungsi setSliderBackground() ketika slider digeser dan pada saat halaman pertama kali dimuat
        document.getElementById('volume').addEventListener('input', setSliderBackground);
        setSliderBackground(); // Panggil saat halaman pertama kali dimuat untuk mengatur warna latar belakang slider


    </script>
</body>

</html>
