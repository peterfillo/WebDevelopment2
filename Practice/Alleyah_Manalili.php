<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ironmouse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script> 

        $(document).ready(function(){
            let x = 0;
            $('.hair').hide();
            $('.pizza').hide();
            $('.tictactoe').hide();
            $("#retry").click(function(){
                $(".hair").hide();
                $('.pizza').hide();
                if (x != 0) {
                    $(".pizza").animate({bottom: '+=150px'});
                    x = 0;
                }
                $('.tictactoe').hide();
            });

            $("#option1").click(function(){
                $(".pizza").show();
                if (x == 0) {
                    $(".pizza").animate({bottom: '-=150px'});
                    x = 1;
                }
            });

            $("#option2").click(function(){
                $(".hair").show();
            });

            $("#option3").click(function(){
                $(".tictactoe").fadeIn();
            });
        });
    </script>

    <style>
        h1 {
            color: #7462AC;
        }

        h2 {
            color: #fa8072;
        }

        .color {
            background-color: #F9B1C9;
        }

        .angel {
            width: 350px;
        }

        .animate {
            position: absolute;
            max-width: 1100px;
        }

        .bald {
            z-index: -4;
        }

        .tictactoe {
            z-index: -3;
        }

        .hair {
            z-index: -2;
        }

        .pizza {
            z-index: -1;
        }

        .flex-container {
            max-width: 1296px;
            display: flex;
            justify-content: center;
        }
        
    </style>

</head>


<body>

    <div class="container-fluid p-5 text-white text-center color">
        <img class="angel rounded-circle img-thumbnail" src="http://drive.google.com/uc?export=view&id=1-LTXDQbH1YHSPKR2brjko_l6BOfCSFRD" alt="..." />
        <div>
            <h1>Ironmouse</h1>
            <?php echo "<p>She is a cute and wholesome mouse.</p>";?>
        </div>
    </div>
    
    <div class="container mt-5">
        <div>
            <h2>Help her find her hair!</h2>
        </div>
        <div>
            <button id="retry" class="btn btn-secondary">Retry</button>
            <button id="option1" class="btn btn-outline-dark">#1</button>
            <button id="option2" class="btn btn-outline-dark">#2</button>
            <button id="option3" class="btn btn-outline-dark">#3</button>
        </div>

        <div class="flex-container">
           
                <img class="bald animate" src="http://drive.google.com/uc?export=view&id=1t3SP_deC8XBgkhG_R7Pes-ZeGcPQpYh5" alt="..." />
                <img class="hair animate" src="http://drive.google.com/uc?export=view&id=1ZU-eW5_KyhqDKpf9YFANZbKkCAGKzbD0" alt="..." />
                <img class="pizza animate" src="http://drive.google.com/uc?export=view&id=1zI8nfc7SpOMwA5Be3pwamGd_0zXOjKGt" alt="..." />
                <img class="tictactoe animate" src="http://drive.google.com/uc?export=view&id=1IdQh5y-5rW-Ly2XF06OQA1XnWS5VGOms" alt="..." />
           
        </div>
    </div>

</body>
</html>

