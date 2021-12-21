<script>
    var text_title ="";
var imageLoader = document.getElementById('imageLoader');
    /*imageLoader.addEventListener('change', handleImage, false);*/
var canvas = document.getElementById('imageCanvas');
var ctx = canvas.getContext('2d');
var img = new Image();
img.crossOrigin="anonymous";

window.addEventListener('load', DrawPlaceholder)

function DrawPlaceholder() {
    img.onload = function() {
        DrawOverlay(img);
        DrawText();
        DynamicText(img)
    };


    <?php
if(isset($_GET['rota'])){
    switch($_GET['rota']){

        case 'card1':
            ?>
            img.src = 'imagens/card1.png'
            <?php 
        break;  
        case 'card2':
            ?>
            img.src = 'imagens/card2.png'
            <?php 
        break;
        case 'card3':
            ?>
            img.src = 'imagens/card3.png'
            <?php
        break;

    }
}


?>
    ;
  
}
function DrawOverlay(img) {
    ctx.drawImage(img,0,0);
}
function DrawText() {
    ctx.textAlign = "start";
    ctx.fillStyle = "black";
    ctx.textBaseline = 'middle';
    ctx.font = "50px 'Kaushan Script'";
    ctx.fillText(text_title, 50, 50);
}
function DynamicText(img) {
  document.getElementById('name').addEventListener('keyup', function() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    DrawOverlay(img);
    DrawText(); 
    text_title = this.value;
    ctx.fillText(text_title, 50, 50);
  });
}
function handleImage(e) {
    var reader = new FileReader();
    var img = "";
    var src = "";
    reader.onload = function(event) {
        img = new Image();
        img.onload = function() {
            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img,0,0);
        }
        img.src = event.target.result;
        src = event.target.result;
        canvas.classList.add("show");
        DrawOverlay(img);
        DrawText(); 
        DynamicText(img);   
    }

    reader.readAsDataURL(e.target.files[0]); 
 
}
function convertToImage() {
	window.open(canvas.toDataURL('png'));
}

</script>