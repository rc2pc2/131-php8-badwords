<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <section class="main-content row">
            <div class="col-12">
                <h1 class="mb-3">
                    PHP 8 Badwords
                </h1>
                <form action="server.php" method="get">

                    <div class="mb-3">
                        <label for="paragraph" class="form-label">
                            Paragraph:
                        </label>
                        <input type="text" id="paragraph" class="form-control" name="paragraph">
                    </div>

                    <div class="mb-3">
                        <label for="badword" class="form-label">
                            Badword:
                        </label>

                        <input type="text" id="badword" class="form-control" name="badword">
                    </div>


                    <button class="btn btn-lg btn-primary" type="submit">Invia</button>
                    <button class="btn btn-lg btn-warning" type="reset">Pulisci i campi</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>