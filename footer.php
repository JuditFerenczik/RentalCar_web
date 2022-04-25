    
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
    $( ".nav .nav-item" ).bind( "click", function(event) {
       // event.preventDefault();
        var clickedItem = $( this );
        $( ".nav .nav-item" ).each( function() {
            $( this ).removeClass( "active" );
        });
        clickedItem.addClass( "active" );
    });
});
</script> 
<script>
    function showBefizetes(){
        var x = document.getElementById("ID").value;
        const xhttp = new XMLHttpRequest();
        xhttp.onload=function(){
        document.getElementById("befizetes").innerHTML = this.responseText;
        };
        xhttp.open("GET", "egyenibefizetesek.php?id="+x);
        xhttp.send();
    }
 
   

</script>
<script>  function setDefault(id){
       
        var mySelect = document.getElementById('ID');

        for(var i, j = 0; i = mySelect.options[j]; j++) {
            if(i.value == id) {
                mySelect.selectedIndex = j;
                console.log(j)
                //break;
            }
        }   
    }
    </script>

    </body>
    <footer class="page-footer font-small bg-dark ">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3 text-white">© Ferenczik Judit 2022 
    
  </div>
  <!-- Copyright -->

</footer>
</html>

