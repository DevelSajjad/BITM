<?php include "pages/include/header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Input</label>
                                <div class="col-md-8">
                                    <input type="text" name="input_value" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Select Type</label>
                                <div class="col-md-8">
                                    <label for=""> <input type="radio" name="type" value="word">Word Count</label>
                                    <label for=""> <input type="radio" name="type" value="character">Character Count</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
<!--                                    <input type="text" readonly class="form-control" value="--><?php //echo isset($result) ? $result: ''; ?><!--">-->
                                    <textarea class="form-control" readonly name="" id="" cols="30" rows="10">
                                        <?php echo " $givenword\n$wordcount\n$charactercount" : ?>
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-outline-success btn-block" value="Get Result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "pages/include/footer.php"; ?>