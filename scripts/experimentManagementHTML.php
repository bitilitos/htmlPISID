<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment Management</title>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="experimentManagement.css">
</head>
<body>
<main>
    <section>
        <div class="info-box">
            <div>
                <img src="images/back.png" class="icon" id="back"><a class="backLink" href="home.php">Go Back</a>
            </div>
            <div class="homeTitle">
                <h1 class="mainTitle"><span class="underline">E</span>xperiment Management</h1>
            </div>
            <div class="info-box-content">
                <div class="leftColumn">
                    <figure><img src="images/ratExperiment.png" class="info-box-image-rat"></figure>
                </div>
                <div class="rightColumn">
                    <table class="info-box-table">
                        <thead>
                            <tr>
                                <th>ID Experiment</th>
                                <th>Edit Experiment</th>
                                <th>Delete Experiment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'experimentManagement.php';
                            getID();?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>