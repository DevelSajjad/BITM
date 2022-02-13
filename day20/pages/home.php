<?php include "pages/includes/header.php"; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 contenteditable="true">Series</h4>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="post">
                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Starting Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="starting_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Ending Number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="ending_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Select Type</label>
                                    <div class="col-md-8">
                                       <label> <input type="radio" name="type" value="asc"> Low to High </label>
                                       <label> <input type="radio" name="type" value="desc"> High to Low</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-4 col-form-label">Result</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="5"><?php echo isset($result) ? $result: ''; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <input type="submit" name="btn" value="Check result" class="btn btn-outline-success btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "pages/includes/footer.php"; ?>