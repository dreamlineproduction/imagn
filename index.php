<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagn</title>
    <link href="fucking-css/bootstrap.css" rel="stylesheet">
    <link href="fucking-css/main.css" rel="stylesheet">
    <link href="fucking-css/responsive.css" rel="stylesheet">
    



</head>

<body>
<?php include 'include/navbar1.php';?>
<?php include 'include/navbar2.php';?>
   <div class="supreme-container">
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 left-nav-bg text-center  d-none d-sm-block">
                <?php include 'parts/left-side-bar.php';?>
                </div>




                <!-- Post section start -->
                <div class="col-md-8 p-4">

                <?php include 'parts/dreamfeed.php';?>



                </div>


                <!-- Post section end -->


                <div class="col-md-2">

                </div>



            </div>


        </div>


    </section>

<!-- 
    <section class="fixed-bottom-foot bottomMenu">
        <div id="bottomMenu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>See more on IMAGN</h1>

                        <div class="d-flex justify-content-center mt-4">

                            <a class="btn text-white theme-red-btn" href="#" role="button">Join The Conversation</a>
                            <a class="btn btn-outline-light text-white ms-3 login-btn-black-bg" href="#" role="button">Login</a>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section> -->

    </div>
</body>

</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script defer src="fucking-js/bootstrap.bundle.js"></script>
<script defer src="fucking-js/all.js"></script>
<script defer src="fucking-js/app.js"></script>

<script type="text/javascript">
 $(document).ready(function() {
    $("body").tooltip({ selector: '[data-toggle=tooltip]' });
});
</script>