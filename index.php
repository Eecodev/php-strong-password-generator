<?php
include __DIR__ ."/partials/header.php";

if (isset($_GET[""]) ) {


?>


    <main class="container">

        <div id="pw-generator">
            <form class="row g-3" method="GET" action="<?php echo $_SREVER['PHP_SELF']?>">
                <div class="col-6">
                    <label for=""></label>
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" id="password-length" name="password-length" min="3" max="15">
                </div>
                <div class="col-4">
                    <button type="submit" class="btn btn-primary mb-3">Invia</button>
                    <button type="reset" class="btn btn-dark mb-3">Annulla</button>
                </div>
            </form>
        </div>


    </main>
    
<?php
include __DIR__ ."/partials/footer.php";
?>