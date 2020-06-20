// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

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

                document.cookie = "pain_point=selection; expires=Fri, 03 Aug 2018 12:00:00 UTC; path=/";
                // document.cookie=selection;
                
                
            }
            
            if (t.target.parentElement.getAttribute('data-position') != null){

                document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('data-position');
                var current = t.target.parentElement.getAttribute('data-position');
                selection.push(current);
                
            }

            
            
        }
    }
    

    
}

