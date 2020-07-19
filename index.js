// the first 2 functions control the open and close for the overlay for the nav for the mobile naviagtion
function openNav() {
    document.getElementById("mySidepanel").style.width = "300px";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0";
}

window.onload = function() {

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

            if (t.target.parentElement.getAttribute('data-position') != null) {

                document.getElementById('data').innerHTML = t.target.parentElement.getAttribute('data-position');
                var current = t.target.parentElement.getAttribute('data-position');
                selection.push(current);

            }



        }
    }



}