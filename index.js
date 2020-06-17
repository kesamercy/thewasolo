window.onload = function () {
    const pieces = document.getElementsByTagName('svg');
    var selection = [];
    for (var i = 0; pieces.length; i++) {
        let _piece = pieces[i];
        _piece.onclick = function(t) {
            if (t.target.getAttribute('data-position') != null) {

                document.getElementById('data').innerHTML = t.target.getAttribute('data-position');
                var current = t.target.getAttribute('data-position');
                selection.push(current);
                
            }
            
            if (t.target.parentElement.getAttribute('data-position') != null){

                document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('data-position');
                var current = t.target.parentElement.getAttribute('data-position');
                selection.push(current);
                
            }

            
        }
    }
    $.ajax({ 
        type: "POST", 
        url: "body-exam.php", 
        data: { pain_points : selection}, 
        success: function() { 
               alert("Success"); 
         } 
 }); 
}