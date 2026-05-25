var Alert = new CustomAlert();

function CustomAlert() {
    this.render = function() {
        let winW = window.innerWidth;
        let winH = window.innerHeight;

        let dialogoverlay = document.getElementById('dialogoverlay');
        let dialogbox = document.getElementById('dialogbox');

        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH + "px";

        dialogbox.style.left = (winW / 2) - (550 * .5) + "px";
        dialogbox.style.top = "100px";
        dialogbox.style.display = "block";

        document.getElementById('dialogboxhead').innerHTML = "Mensaje";
        document.getElementById('dialogboxbody').innerHTML = "¿Deseas regresar?";
        document.getElementById('dialogboxfoot').innerHTML =
        '<a href="index.php"><button>OK</button></a>';
    }

    this.ok = function() {
        document.getElementById('dialogbox').style.display = "none";
        document.getElementById('dialogoverlay').style.display = "none";
    }
}
