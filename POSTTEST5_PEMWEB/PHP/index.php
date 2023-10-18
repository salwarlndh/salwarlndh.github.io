<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Velvet Skin</title>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <img src="bars-solid.svg" alt="">
        </label>
        <label class="logo">Velvet Skin</label>
        <ul>
            <li><a class = "active" href="#home">Home</a></li>
            <li><a href="../aboutme.html">About Me</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><div id="dark-change"></div></li>
        </ul>
    </nav>
    <header>
        <section id="home">
            <div class="header-content">
                <h2>Essence of the Beauty</h2>
                <h1>WONDERFUL GIFT</h1>
                <a href="../aboutme.html" class="ctn">check this</a>
            </div>
        </section>
    </header>

    <section id="product">
        <div class="title">
            <h1>PRODUCT</h1> <br>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="../assets-landpage/serum.jpeg" alt="">
                    <h4>Serum</h4>
                    <p>Serum kami mengandung campuran bahan-bahan alami dan bahan aktif canggih yang dirancang untuk meremajakan dan menyegarkan kulit Anda. Setiap tetes serum kami adalah hasil kerja keras dan dedikasi kami dalam menciptakan formula yang efektif dan aman.</p><br>
                    <a href="serum.php" class="ctn">Learn More</a>
                </div>
                <div class="col">
                    <img src="../assets-landpage/facewash.jpeg" alt="">
                    <h4>Face Wash</h4>
                    <p>Wajah adalah cermin diri Anda, dan tidak ada yang lebih penting daripada merawatnya dengan cermat. Kami memahami betapa pentingnya memiliki kulit wajah yang bersih, sehat, dan segar setiap hari. Itulah mengapa kami mempersembahkan Face Wash kami yang luar biasa.</p><br> 
                    <a href="fw.php" class="ctn">Learn More</a>
                </div>
                <div class="col">
                    <img src="../assets-landpage/moist.jpeg" alt="">
                    <h4>Moisturizer</h4>
                    <p>Pelembab Wajah kami adalah kunci untuk menjaga kulit wajah Anda tetap terhidrasi, dan hasilnya akan terlihat dan terasa luar biasa. Dengan formula lembut yang meresap dengan baik, Anda akan merasakan manfaatnya seketika.</p><br>
                    <a href="moist.php" class="ctn">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="deskrip">
        <div class="deskrip">
            <div class="deskrip-content">
                <h1>Treat Your Skin</h1>
                <p>Velvet Skin adalah teman perjalanan perawatan kulit Anda. Kami ingin Anda merasa percaya diri dan cantik setiap hari dan mulailah perjalanan menuju kulit sehat yang Anda impikan.</p>
            </div>
        </div>
    </section>

    <section id="form">
        <div class="container">
            <div class="wrapper">
                <form  method = "POST" action="form.php">
                    <h1>Contact Me</h1>
                    <div class="input-box">
                        <input type="text" placeholder="Name" name = "nama" required>
                    </div>
                    <div class="input-box">
                        <input type="Number" placeholder="No. Telp" name = noTelp>
                    </div>
                    <div class="input-box">
                        <input type="email" placeholder="Email" name = email>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <section id="container">
        <div class="container">
            <button type = "submit" class="btn" onclick="openPopup()">End of Page</button>
            <div class="popup" id="popup">
                <img src="heart.svg" alt="">
                <h2>Thankyou!</h2>
                <h5>For Visiting Our Web</h5>
                <button type="button" onclick="closePopup()">OKAY</button>
            </div>
        </div>
    </section>

   

    <footer>
        <p> Copyright &copy; 2023 Velvet Skin.</p>
    </footer>
    
    <script>
        var content = document.getElementsByTagName('body')[0];
        var darkmode = document.getElementById('dark-change');
            darkmode.addEventListener('click', function(){
            darkmode.classList.toggle('active');
            content.classList.toggle('night');
        })
        
        let popup = document.getElementById('popup');

        function openPopup() {
            popup.classList.add('open-popup');
        }

        function closePopup() {
            popup.classList.remove('open-popup');
        }
    </script>
</body>
</html>