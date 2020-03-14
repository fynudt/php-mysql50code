<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>上传中</title>
</head>
<body>
    <h1>上传文件</h1>
    <?php
    if($_FILES['the_file']['error']>0){
        echo    '有问题：';
       
            switch ($_FILES['the_file']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                    echo 'File exceeded upload max_filesize.';
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    echo 'File exceeded max_file_size.';
                    break;
                case UPLOAD_ERR_PARTIAL:
                    echo 'File only partially uploaded';
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo 'No file uploaded';
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    echo 'Cannot upload file: No temp directory specified.';
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    echo 'Upload failed: Cannot write to disk.';
                    break;
                case UPLOAD_ERR_EXTENSION:
                    echo 'A PHP extension blocked the file upload.';
                    break;
            }
            exit;
        }
    }
    
    
    ?>
</body>
</html>