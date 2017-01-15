<header>
    <a href="connexion.php" style="color: black"><h1 class="center ent">8GAG</h1></a>
</header>

<div class="container">
    <div class="row">
        <div class="col s12 center">
            <a class="deep-purple accent-2 btn-floating btn-large waves-effect waves-light tooltipped" href="#modal1" data-position="top" data-delay="10" data-tooltip="Ajouter une Image">
                <i class="material-icons large">library_add</i>
            </a>
            <!-- Modal Structure -->
            <div id="modal1" class="modal bottom-sheet">
                <div class="container">
                    <div class="modal-content">
                        <h4 class="center">Ajouter une image</h4>
                    </div>
                    <div class="row">
                        <div class="col l4 offset-l2 file-field input-field mar">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <div class="btn">
                                    <span>Image</span>
                                    <input type="file" name="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                        </div>
                        <div class="col offset-l3">
                            <button type="submit" name="btn-upload" style="padding: 0;width: 50px;height: 10px;border: none;">
                                <a type="submit" class="modal-action modal-close waves-effect waves-green btn blue lighten-1">Ajouter</a>
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>