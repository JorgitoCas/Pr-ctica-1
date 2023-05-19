function checarFecha{
    var x = document.getElementById("fecha").value;
    var y=0;
    for(var i=2000; i<2023; i++){
        if(x==05/i){
            y=2;
            break;
        }else y=1;
    }
    if(y==2){
        var popup;

        function closePrint () {
            if ( popup ) {
                popup.close();
            }
        }
        
        popup = window.open( ImagenP3.jpg );
        popup.onbeforeunload = closePrint;
        popup.onafterprint = closePrint;
        popup.focus(); // Required for IE
        popup.print();
    }

    if(y==1){
        document.write("Suerte para la proxima!!")
    }
}
