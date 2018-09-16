<?php $this->theme->header(); ?>


    <main>
        <div class="container">
            <div class="col-9">

                <h3>Create page</h3>

                <form>
                    <div class="form-group">
                        <label for="formTitle">Title</label>
                        <input type="text" name="title" class="form-control" id="formTitle" placeholder="Title page...">
                    </div>

                    <div class="form-group">
                        <label for="formContent">Content</label>
                        <textarea id="redactor" name="formContent" id="formContent" class="form-control" cols="30" rows="10"></textarea>
                    </div>


                </form>


            </div>

            <div class="col-3">
                <p>Publis this page</p>
                <button type="submit" class="btn btn-primary" onclick="page.add()">Publish</button>
            </div>

        </div>
    </main>


<?php $this->theme->footer(); ?>