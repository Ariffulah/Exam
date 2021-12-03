<div class="form">
            <div class="container">
                <h3>Upload File</h3>
                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="file" name="file">
                    <input type="submit"name="upload" value="Upload Image">
                </form>
            </div>
        </div>
        <?php
        if(isset($_POST['upload'])){
            $file_name = $_FILES['file']['name'];
            $file_type = $_FILES['file']['type'];
            $file_size = $_FILES['file']['size'];
            $file_tem_loc = $_FILES['file']['tmp_name'];
            $file_store = "upload/".$file_name;
        
            if (move_uploaded_file($file_tem_loc, $file_store)) {
                echo "File sudah terupload";
            }
            
        }
        
        ?>