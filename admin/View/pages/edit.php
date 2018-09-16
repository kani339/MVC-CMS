<?php $this->theme->header(); ?>

    <main>
        <div class="container">
            <div class="col-9">

                <div class="col page-title">
                    <h3><?= $page['title']; ?></h3>
                </div>


                <form id="formPage">

                    <input type="hidden" name="page_id" id="formPageId" value="<?= $page['id']; ?>">
                    <div class="form-group">
                        <label for="formTitle">Title</label>
                        <input type="text" name="title" class="form-control" id="formTitle" value="<?= $page['title']; ?>" placeholder="Title page...">
                    </div>

                    <div class="form-group">
                        <label for="formContent">Content</label>
                        <textarea id="redactor" name="formContent" id="formContent" class="form-control" cols="30" rows="10">
                            <?= $page['content']; ?>
                        </textarea>
                    </div>


                </form>


            </div>

            <div class="col-3">
                <p>Update this page</p>
                <button type="submit" class="btn btn-primary" onclick="page.update()">Publish</button>
            </div>

        </div>
    </main>


<?php $this->theme->footer(); ?>