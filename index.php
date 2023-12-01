<?php
include __DIR__ ."/partials/header.php";

if (isset($_GET["pass-length"]) && $_GET["pass-length"] !== '') {
    $password = generatePassword();
}


?>


    <main class="container">
        <?php if (isset($password)){?>
        <div class="alert alert-primary">
            Your password is
            <span class="fw-bold">
                <?php echo $password?>
            </span>
        </div>
        <?php }?>
        <div id="generator">
            <form class="row g-3" method="GET" action="<?php echo $_SREVER['PHP_SELF']?>">
                <div class="col-6">
                    <label for="pass-length">Password Length</label>
                </div>
                <div class="col-6">
                    <input type="number" class="form-control" id="pass-length" name="pass-length" min="3" max="15">
                </div>
                <div class="col-4 ms-3 ">
                    <button type="submit" class="btn btn-primary">Send</button>
                    <button type="reset" class="btn btn-dark">Reset</button>
                </div>
            </form>
        </div>

    </main>
    
<?php
include __DIR__ ."/partials/footer.php";
?>