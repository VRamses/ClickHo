<!--    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <img src="imagens/card2.png" class="img-fluid" alt=""></div>
            </div>
        </div>
    </div>
<div class="formulario">
<form method="POST" action="scripts/salvar_card2.php">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Destinatário</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Insira a mensagem!</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">Remetente</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label">E-mail do Destinatário</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="nome" rows="1"></textarea>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-1">
                <button class="btn btn-primary" type="submit" style="margin-top:10px;">ENVIAR!</button>
            </div>
        </div>
    </div>
</form>
</div>-->

   
<div id="canvas-wrap">
     <canvas class="col-md-6" id="imageCanvas" width=1200px height=800px>
        <canvas id="canvasID"></canvas>
    </canvas> 

<div class="forms">
<form method="POST" action="scripts/salvar_card2.php">
   
    <label class="controls__label" style="font-size:30px; for="name">Digite aqui!</label>
    <br>
    <div class="input-group mb-5">
    <textarea class="controls__input form-control" id="name" type="text" value=""></textarea>
    </div>
    


  </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <label for="exampleFormControlTextarea1" class="form-label"
                style="font-size:30px;">E-mail do Destinatário</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="nome" rows="1"></textarea>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-1">
                <button class="btn btn-primary" type="submit" style="margin-top:10px;">ENVIAR!</button>
            </div>
        </div>
    </div>
</form>
</div>

<?php include "scripts/canvas.php"; ?>