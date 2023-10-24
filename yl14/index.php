<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suvaline pilt ja pisipildid</title>
    <style>
        .thumbnail {
            width: 30%;
            margin: 10px;
            cursor: pointer;
        }

        .thumbnail-container {
            display: flex;
            flex-wrap: wrap;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        .modal-content img {
            width: 100%;
            height: auto;
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            font-size: 30px;
            color: #f1f1f1;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <div class="modal-content">
        <img id="modal-image">
    </div>
</div>

<div class="thumbnail-container">
    <?php
    // Pildi lingid
    $pildiLingid = [
        'https://hips.hearstapps.com/hmg-prod/images/cute-cat-photos-1593441022.jpg?crop=0.670xw:1.00xh;0.167xw,0&resize=640:*',
        'https://lastfm.freetls.fastly.net/i/u/ar0/b1de7bff10f9547030d1d24055b40c29.jpg',
        'https://www.indy100.com/media-library/donald-trump-arrested-for-fourth-time.jpg?id=35139961&width=1245&height=700&quality=85&coordinates=0%2C0%2C0%2C0',
        'https://i.pinimg.com/1200x/d2/b9/a2/d2b9a226e2d7f394d89d1950d2ebaa78.jpg',
        'https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/hostedimages/1385481861i/7159203._SX540_.jpg'
    ];

    foreach ($pildiLingid as $link) {
        echo '<img class="thumbnail" src="' . $link . '" onclick="displayImage(\'' . $link . '\')">';
    }
    ?>
</div>

<script>
    function displayImage(imageSrc) {
        document.getElementById('myModal').style.display = 'block';
        document.getElementById('modal-image').src = imageSrc;
    }

    var closeBtn = document.querySelector('.close');
    closeBtn.addEventListener('click', function() {
        document.getElementById('myModal').style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        var modal = document.getElementById('myModal');
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });
</script>

</body>
</html>