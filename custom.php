<?php include 'navbar.php'?>

<body>
    <section class="content-section"> 
        <article>
            <header class= "content-header"><h2>Customize seu cartão</h2></header>
            <section class="content-section">

</body>

<!-- conteúdo-->

<?php
if(isset($_GET['rota'])){
    switch($_GET['rota']){

        case 'home':
            include "index.php";
        break;
        case 'card1':
            include "custom/card1.php";
        break;
        case 'card2':
            include "custom/card2.php";
        break;
        case 'card3':
            include "custom/card3.php";
        break;

    }
}
?>
<footer class="rodape">
            <p>Copyright &copy; 2021</p>
</footer>