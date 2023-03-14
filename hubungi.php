<?php
session_start(); 
if(isset($_SESSION["id_user"] )){ 
    
include 'C:\xampp\htdocs\eaic-job\navbar\navbar-auth.php';
include 'C:\xampp\htdocs\eaic-job\db\db_connection.php';?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <title>Hubungi</title>
</head>

<body>
    <div class="card">
        <div class="card-body text-center">
            <iframe class="text-center"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6335498225512!2d101.68314561456087!3d2.921277955326333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb6360cfa706b%3A0x46a4b67ec4f3bca2!2sSuruhanjaya%20Integriti%20Agensi%20Penguatkuasaan%20(EAIC)!5e0!3m2!1sen!2smy!4v1619399696014!5m2!1sen!2smy"
                width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <br /><br />
            <div class="text-center" style="background-color:red">
                <br />
                <h2>HUBUNGI KAMI</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">

                    <p><b> Suruhanjaya Integriti Agensi Penguatkuasaan</b></p>
                    <p> Aras 5, Blok Menara</p>
                    <p> Bangunan Menara Usahawan</p>
                    <p> No. 18 Persiaran Perdana, Presint 2</p>
                    <p> 62652 Putrajaya, Malaysia</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-body">
                    <ul><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-telephone" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg> <b>Talian Aduan</b> </ul>
                    <ul>03 - 88805651 / 5625 / 5627</ul>

                    <ul><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-envelope" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                        </svg><b> E-mel</b></ul>
                    <ul>aduan@eaic.gov.my</ul>
                </div>
            </div>


        </div>

    </div>

    <?php
}
$conn->close();
?>
</body>

</html>