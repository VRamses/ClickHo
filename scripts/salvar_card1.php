<?php include_once "../navbar.php"; ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
if (!empty($_POST)){
    include "config.php";
    $nome = $_POST['nome'];

    $sql = "INSERT INTO card1 (nome)
    values ('$nome')";
    $query = $mysqli->query($sql);

    if($query){
?>
    <script type="text/javascript">
        Swal.fire({
            title: 'Salvo!',
            icon: 'success',
            text: 'Registros adicionados com sucesso!',
            confirmButtonText: 'Ok',
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                location.href="../custom.php?rota=card1";
            }
        })
    </script>

<?php
    }else{
?>
        <script type="text/javascript">
        Swal.fire({
            title: 'Erro!',
            icon: 'error',
            text: 'Registro não adicionado!',
            confirmButtonText: 'Ok',
            }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                location.href="../custom.php?rota=card1";
            }
        })
    </script>
<?php
    }
}
else {
    echo "Página sem registros";
}
?>
