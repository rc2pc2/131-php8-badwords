<?php 
    // var_dump($_GET);

    // $oldParagraph = $_GET["paragraph"];

    // elaboriamo la sostituzione di ogni occorrenza della badword in oldParagraph con ***

    // ! str_ireplace || str_replace
    $censoredParagraph =  str_ireplace($_GET["badword"], "***", $oldParagraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword answer</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="p-5 fw-bold text-center">
                    PHP 8 Badwords answer: 
                </h1>

                <h2 class="fw-bold fs-5">
                    Original paragraph:
                </h2>
                <p>
                    <?php 
                        // come scrivo il paragrafo ricevuto?
                        echo $oldParagraph;
                    ?>
                    <!-- scrivero il paragrafo -->
                </p>

                <h2 class="fw-bold fs-5">
                    Original paragraph length: <?php echo strlen($oldParagraph);  ?>
                </h2>

                <hr>
                
                <h2 class="fw-bold fs-5">
                    Censored paragraph:  
                </h2>
                <p>
                    <!-- scrivero il paragrafo censurato -->
                    <?php  echo $censoredParagraph; ?>
                </p>

                <h2 class="fw-bold fs-5">
                    Censored paragraph length: <?php echo strlen($censoredParagraph); ?>
                </h2>

            </div>
        </div>

    </main>
    
</body>
</html>