<?php include 'navbar.php'?>
</head>
<body>
    <section class="content-section"> 
        <article>
            <header class= "content-header"><h2>Mais Utilizados</h2></header>
            <section class="content-section">

<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<?php 
include "scripts/functions.php";
include "scripts/grafico_barra.php"; ?>


<div class="container-fluid topo">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="card-title">Card 1</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Olha Khomich</h6>
                    <p class="card-text"><?php echo qtde_card1() ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="card-title">Card 2</h5>
                    <h6 class="card-subtitle mb-2 text muted">Marina Mogulskaya</h6>
                    <p class="card-text"><?php echo qtde_card2() ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="card-title">Card 3</h5>
                    <h6 class="card-subtitle mb-2 text muted">Natasha Remarchuk</h6>
                    <p class="card-text"><?php echo qtde_card3() ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid topo">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-dark">
                <div class="card-body">
                    <h5 class="card-title">Total</h5>
                    <p class="card-text"></p>
                    <div id="chartdiv"></div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>

<?php include "footer.php" ?>