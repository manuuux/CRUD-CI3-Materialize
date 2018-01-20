</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
    $( document ).ready(function(){
        $(".button-collapse").sideNav();        
    })
    <?php 
    $i = "";
    switch($state){
        case "b":
            $i='Usuario eliminado';
            break;
        case "c":
            $i='Usuario Creado';
            break;
        case "e":
            $i='Usuario Editado';
            break;
        }
    if(isset($state)){ echo "Materialize.toast('".$i."', 3000, 'rounded')";}
        ?>
        
</script>
</main>
<footer class="page-footer light-green">
    <div class="container">
    <div class="row">
        <div class="col l6 s12">
        <h5 class="white-text">Footer Content</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        </div>
        <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
        </ul>
        </div>
    </div>
    </div>
    <div class="footer-copyright">
    <div class="container">
    © 2014 Copyright Text
    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
    </div>
</footer>
</body>
</html>