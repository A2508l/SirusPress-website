<?php

include('./controllers/conn.php');
include('./controllers/write.php');
if ($_SESSION == NULL) {
    header("Location: ./login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SirusPress-Dashboard</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styles/write.css">

    <!-- <meta name="google-signin-client_id" content="47139870778-55g0m8lpkk4p2pnhdbiv5j5tfhkurcau.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script> -->
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  navbar-dark " id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color: aliceblue;">
                <img src="./images/logo.JPG" alt="logo" width="70" height="56" class="d-inline-block align-text-bottom">
                Read.Write.Promote
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item dropdown navbar-dark">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Explore
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#"> Start Reading </a></li>
                            <li><a class="dropdown-item" href="#"> Start Writting </a></li>
                            <li><a class="dropdown-item" href="#"> Listen Prodcast </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown navbar-light">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Opportunities
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./community.php">Community</a>
                    </li>
                    <li class="nav-item dropdown">

                        <?php if ($_SESSION != NULL) { ?>
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo ($_SESSION['name']); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <div class="dropdown-item"> <?php echo ($_SESSION['name']); ?> </div>
                                </li>
                                <li><a class="dropdown-item" href="./controllers/logout.php"> Logout </a></li>
                            </ul>
                        <?php } else { ?>
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo ("My Account"); ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <div class="dropdown-item"> My Account </div>
                                </li>
                                <li><a class="dropdown-item" href="./login.php"> Login </a></li>
                                <li><a class="dropdown-item" href="./signup.php"> SignUp </a></li>
                            </ul>
                        <?php } ?>

                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="heading">
        <h1>WRITE</h1>
    </div>


    <div class="content-panel">

        <div class="side-panel">
            <h3>Currently Writing</h3>
            <div class="card">
                <div class="card-img">
                    <img src="./images/6.JPG" class="img-fluid">
                </div>
                <div class="book_description">
                    <h5 class="book_title">Name of the book</h5>
                    <div class="bor"></div>
                    <p class="book_desc">Keywords</p>
                </div>
            </div>
            <h3>Archive</h3>
            <div class="card">
                <div class="card-img">
                    <img src="./images/6.JPG" class="img-fluid">
                </div>
                <div class="book_description">
                    <h5 class="book_title">Name of the book</h5>
                    <div class="bor"></div>
                    <p class="book_desc">Keywords</p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="./images/6.JPG" class="img-fluid">
                </div>
                <div class="book_description">
                    <h5 class="book_title">Name of the book</h5>
                    <div class="bor"></div>
                    <p class="book_desc">Keywords</p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="./images/6.JPG" class="img-fluid">
                </div>
                <div class="book_description">
                    <h5 class="book_title">Name of the book</h5>
                    <div class="bor"></div>
                    <p class="book_desc">Keywords</p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="./images/6.JPG" class="img-fluid">
                </div>
                <div class="book_description">
                    <h5 class="book_title">Name of the book</h5>
                    <div class="bor"></div>
                    <p class="book_desc">Keywords</p>
                </div>
            </div>
            <div class="card">
                <div class="card-img">
                    <img src="./images/6.JPG" class="img-fluid">
                </div>
                <div class="book_description">
                    <h5 class="book_title">Name of the book</h5>
                    <div class="bor"></div>
                    <p class="book_desc">Keywords</p>
                </div>
            </div>

        </div>



        <div class="text_editor">
            <form name="compForm" method="post"  onsubmit="if(validateMode()){this.myDoc.value=oDoc.innerHTML;return true;}return false;">
                <input type="hidden" name="myDoc">
                <div id="toolBar1">
                    <select onchange="formatDoc('formatblock',this[this.selectedIndex].value);this.selectedIndex=0;">
                        <option selected>- formatting -</option>
                        <option value="h1">Title 1 &lt;h1&gt;</option>
                        <option value="h2">Title 2 &lt;h2&gt;</option>
                        <option value="h3">Title 3 &lt;h3&gt;</option>
                        <option value="h4">Title 4 &lt;h4&gt;</option>
                        <option value="h5">Title 5 &lt;h5&gt;</option>
                        <option value="h6">Subtitle &lt;h6&gt;</option>
                        <option value="p">Paragraph &lt;p&gt;</option>
                        <option value="pre">Preformatted &lt;pre&gt;</option>
                    </select>
                    <select onchange="formatDoc('fontname',this[this.selectedIndex].value);this.selectedIndex=0;">
                        <option class="heading" selected>- font -</option>
                        <option>Arial</option>
                        <option>Arial Black</option>
                        <option>Courier New</option>
                        <option>Times New Roman</option>
                    </select>
                    <select onchange="formatDoc('fontsize',this[this.selectedIndex].value);this.selectedIndex=0;">
                        <option class="heading" selected>- size -</option>
                        <option value="1">Very small</option>
                        <option value="2">A bit small</option>
                        <option value="3">Normal</option>
                        <option value="4">Medium-large</option>
                        <option value="5">Big</option>
                        <option value="6">Very big</option>
                        <option value="7">Maximum</option>
                    </select>
                    <select onchange="formatDoc('forecolor',this[this.selectedIndex].value);this.selectedIndex=0;">
                        <option class="heading" selected>- color -</option>
                        <option value="red">Red</option>
                        <option value="blue">Blue</option>
                        <option value="green">Green</option>
                        <option value="black">Black</option>
                    </select>
                    <select onchange="formatDoc('backcolor',this[this.selectedIndex].value);this.selectedIndex=0;">
                        <option class="heading" selected>- background -</option>
                        <option value="red">Red</option>
                        <option value="green">Green</option>
                        <option value="black">Black</option>
                    </select>
                </div>
                <div id="toolBar2">
                    <img class="intLink" title="Clean" onclick="clean()" src="data:image/gif;base64,R0lGODlhFgAWAIQbAD04KTRLYzFRjlldZl9vj1dusY14WYODhpWIbbSVFY6O7IOXw5qbms+wUbCztca0ccS4kdDQjdTLtMrL1O3YitHa7OPcsd/f4PfvrvDv8Pv5xv///////////////////yH5BAEKAB8ALAAAAAAWABYAAAV84CeOZGmeaKqubMteyzK547QoBcFWTm/jgsHq4rhMLoxFIehQQSAWR+Z4IAyaJ0kEgtFoLIzLwRE4oCQWrxoTOTAIhMCZ0tVgMBQKZHAYyFEWEV14eQ8IflhnEHmFDQkAiSkQCI2PDC4QBg+OAJc0ewadNCOgo6anqKkoIQA7" />
                    <img class="intLink" title="Print" onclick="printDoc();" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oEBxcZFmGboiwAAAAIdEVYdENvbW1lbnQA9syWvwAAAuFJREFUOMvtlUtsjFEUx//n3nn0YdpBh1abRpt4LFqtqkc3jRKkNEIsiIRIBBEhJJpKlIVo4m1RRMKKjQiRMJRUqUdKPT71qpIpiRKPaqdF55tv5vvusZjQTjOlseUkd3Xu/3dPzusC/22wtu2wRn+jG5So/OCDh8ycMJDflehMlkJkVK7KUYN+ufzA/RttH76zaVocDptRxzQtNi3mRWuPc+6cKtlXZ/sddP2uu9uXlmYXZ6Qm8v4Tz8lhF1H+zDQXt7S8oLMXtbF4e8QaFHjj3kbP2MzkktHpiTjp9VH6iHiA+whtAsX5brpwueMGdONdf/2A4M7ukDs1JW662+XkqTkeUoqjKtOjm2h53YFL15pSJ04Zc94wdtibr26fXlC2mzRvBccEbz2kiRFD414tKMlEZbVGT33+qCoHgha81SWYsew0r1uzfNylmtpx80pngQQ91LwVk2JGvGnfvZG6YcYRAT16GFtW5kKKfo1EQLtfh5Q2etT0BIWF+aitq4fDbk+ImYo1OxvGF03waFJQvBCkvDffRyEtxQiFFYgAZTHS0zwAGD7fG5TNnYNTp8/FzvGwJOfmgG7GOx0SAKKgQgDMgKBI0NJGMEImpGDk5+WACEwEd0ywblhGUZ4Hw5OdUekRBLT7DTgdEgxACsIznx8zpmWh7k4rkpJcuHDxCul6MDsmmBXDlWCH2+XozSgBnzsNCEE4euYV4pwCpsWYPW0UHDYBKSWu1NYjENDReqtKjwn2+zvtTc1vMSTB/mvev/WEYSlASsLimcOhOBJxw+N3aP/SjefNL5GePZmpu4kG7OPr1+tOfPyUu3BecWYKcwQcDFmwFKAUo90fhKDInBCAmvqnyMgqUEagQwCoHBDc1rjv9pIlD8IbVkz6qYViIBQGTJPx4k0XpIgEZoRN1Da0cij4VfR0ta3WvBXH/rjdCufv6R2zPgPH/e4pxSBCpeatqPrjNiso203/5s/zA171Mv8+w1LOAAAAAElFTkSuQmCC">
                    <img class="intLink" title="Undo" onclick="formatDoc('undo');" src="data:image/gif;base64,R0lGODlhFgAWAOMKADljwliE33mOrpGjuYKl8aezxqPD+7/I19DV3NHa7P///////////////////////yH5BAEKAA8ALAAAAAAWABYAAARR8MlJq7046807TkaYeJJBnES4EeUJvIGapWYAC0CsocQ7SDlWJkAkCA6ToMYWIARGQF3mRQVIEjkkSVLIbSfEwhdRIH4fh/DZMICe3/C4nBQBADs=" />
                    <img class="intLink" title="Redo" onclick="formatDoc('redo');" src="data:image/gif;base64,R0lGODlhFgAWAMIHAB1ChDljwl9vj1iE34Kl8aPD+7/I1////yH5BAEKAAcALAAAAAAWABYAAANKeLrc/jDKSesyphi7SiEgsVXZEATDICqBVJjpqWZt9NaEDNbQK1wCQsxlYnxMAImhyDoFAElJasRRvAZVRqqQXUy7Cgx4TC6bswkAOw==" />
                    <img class="intLink" title="Remove formatting" onclick="formatDoc('removeFormat')" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAAd0SU1FB9oECQMCKPI8CIIAAAAIdEVYdENvbW1lbnQA9syWvwAAAuhJREFUOMtjYBgFxAB501ZWBvVaL2nHnlmk6mXCJbF69zU+Hz/9fB5O1lx+bg45qhl8/fYr5it3XrP/YWTUvvvk3VeqGXz70TvbJy8+Wv39+2/Hz19/mGwjZzuTYjALuoBv9jImaXHeyD3H7kU8fPj2ICML8z92dlbtMzdeiG3fco7J08foH1kurkm3E9iw54YvKwuTuom+LPt/BgbWf3//sf37/1/c02cCG1lB8f//f95DZx74MTMzshhoSm6szrQ/a6Ir/Z2RkfEjBxuLYFpDiDi6Af///2ckaHBp7+7wmavP5n76+P2ClrLIYl8H9W36auJCbCxM4szMTJac7Kza////R3H1w2cfWAgafPbqs5g7D95++/P1B4+ECK8tAwMDw/1H7159+/7r7ZcvPz4fOHbzEwMDwx8GBgaGnNatfHZx8zqrJ+4VJBh5CQEGOySEua/v3n7hXmqI8WUGBgYGL3vVG7fuPK3i5GD9/fja7ZsMDAzMG/Ze52mZeSj4yu1XEq/ff7W5dvfVAS1lsXc4Db7z8C3r8p7Qjf///2dnZGxlqJuyr3rPqQd/Hhyu7oSpYWScylDQsd3kzvnH738wMDzj5GBN1VIWW4c3KDon7VOvm7S3paB9u5qsU5/x5KUnlY+eexQbkLNsErK61+++VnAJcfkyMTIwffj0QwZbJDKjcETs1Y8evyd48toz8y/ffzv//vPP4veffxpX77z6l5JewHPu8MqTDAwMDLzyrjb/mZm0JcT5Lj+89+Ybm6zz95oMh7s4XbygN3Sluq4Mj5K8iKMgP4f0////fv77//8nLy+7MCcXmyYDAwODS9jM9tcvPypd35pne3ljdjvj26+H2dhYpuENikgfvQeXNmSl3tqepxXsqhXPyc666s+fv1fMdKR3TK72zpix8nTc7bdfhfkEeVbC9KhbK/9iYWHiErbu6MWbY/7//8/4//9/pgOnH6jGVazvFDRtq2VgiBIZrUTIBgCk+ivHvuEKwAAAAABJRU5ErkJggg==">
                    <img class="intLink" title="Bold" onclick="formatDoc('bold');" src="data:image/gif;base64,R0lGODlhFgAWAID/AMDAwAAAACH5BAEAAAAALAAAAAAWABYAQAInhI+pa+H9mJy0LhdgtrxzDG5WGFVk6aXqyk6Y9kXvKKNuLbb6zgMFADs=" />
                    <img class="intLink" title="Italic" onclick="formatDoc('italic');" src="data:image/gif;base64,R0lGODlhFgAWAKEDAAAAAF9vj5WIbf///yH5BAEAAAMALAAAAAAWABYAAAIjnI+py+0Po5x0gXvruEKHrF2BB1YiCWgbMFIYpsbyTNd2UwAAOw==" />
                    <img class="intLink" title="Underline" onclick="formatDoc('underline');" src="data:image/gif;base64,R0lGODlhFgAWAKECAAAAAF9vj////////yH5BAEAAAIALAAAAAAWABYAAAIrlI+py+0Po5zUgAsEzvEeL4Ea15EiJJ5PSqJmuwKBEKgxVuXWtun+DwxCCgA7" />
                    <img class="intLink" title="Left align" onclick="formatDoc('justifyleft');" src="data:image/gif;base64,R0lGODlhFgAWAID/AMDAwAAAACH5BAEAAAAALAAAAAAWABYAQAIghI+py+0Po5y02ouz3jL4D4JMGELkGYxo+qzl4nKyXAAAOw==" />
                    <img class="intLink" title="Center align" onclick="formatDoc('justifycenter');" src="data:image/gif;base64,R0lGODlhFgAWAID/AMDAwAAAACH5BAEAAAAALAAAAAAWABYAQAIfhI+py+0Po5y02ouz3jL4D4JOGI7kaZ5Bqn4sycVbAQA7" />
                    <img class="intLink" title="Right align" onclick="formatDoc('justifyright');" src="data:image/gif;base64,R0lGODlhFgAWAID/AMDAwAAAACH5BAEAAAAALAAAAAAWABYAQAIghI+py+0Po5y02ouz3jL4D4JQGDLkGYxouqzl43JyVgAAOw==" />
                    <img class="intLink" title="Numbered list" onclick="formatDoc('insertorderedlist');" src="data:image/gif;base64,R0lGODlhFgAWAMIGAAAAADljwliE35GjuaezxtHa7P///////yH5BAEAAAcALAAAAAAWABYAAAM2eLrc/jDKSespwjoRFvggCBUBoTFBeq6QIAysQnRHaEOzyaZ07Lu9lUBnC0UGQU1K52s6n5oEADs=" />
                    <img class="intLink" title="Dotted list" onclick="formatDoc('insertunorderedlist');" src="data:image/gif;base64,R0lGODlhFgAWAMIGAAAAAB1ChF9vj1iE33mOrqezxv///////yH5BAEAAAcALAAAAAAWABYAAAMyeLrc/jDKSesppNhGRlBAKIZRERBbqm6YtnbfMY7lud64UwiuKnigGQliQuWOyKQykgAAOw==" />
                    <img class="intLink" title="Quote" onclick="formatDoc('formatblock','blockquote');" src="data:image/gif;base64,R0lGODlhFgAWAIQXAC1NqjFRjkBgmT9nqUJnsk9xrFJ7u2R9qmKBt1iGzHmOrm6Sz4OXw3Odz4Cl2ZSnw6KxyqO306K63bG70bTB0rDI3bvI4P///////////////////////////////////yH5BAEKAB8ALAAAAAAWABYAAAVP4CeOZGmeaKqubEs2CekkErvEI1zZuOgYFlakECEZFi0GgTGKEBATFmJAVXweVOoKEQgABB9IQDCmrLpjETrQQlhHjINrTq/b7/i8fp8PAQA7" />
                    <img class="intLink" title="Delete indentation" onclick="formatDoc('outdent');" src="data:image/gif;base64,R0lGODlhFgAWAMIHAAAAADljwliE35GjuaezxtDV3NHa7P///yH5BAEAAAcALAAAAAAWABYAAAM2eLrc/jDKCQG9F2i7u8agQgyK1z2EIBil+TWqEMxhMczsYVJ3e4ahk+sFnAgtxSQDqWw6n5cEADs=" />
                    <img class="intLink" title="Add indentation" onclick="formatDoc('indent');" src="data:image/gif;base64,R0lGODlhFgAWAOMIAAAAADljwl9vj1iE35GjuaezxtDV3NHa7P///////////////////////////////yH5BAEAAAgALAAAAAAWABYAAAQ7EMlJq704650B/x8gemMpgugwHJNZXodKsO5oqUOgo5KhBwWESyMQsCRDHu9VOyk5TM9zSpFSr9gsJwIAOw==" />
                    <img class="intLink" title="Hyperlink" onclick="var sLnk=prompt('Write the URL here','http:\/\/');if(sLnk&&sLnk!=''&&sLnk!='http://'){formatDoc('createlink',sLnk)}" src="data:image/gif;base64,R0lGODlhFgAWAOMKAB1ChDRLY19vj3mOrpGjuaezxrCztb/I19Ha7Pv8/f///////////////////////yH5BAEKAA8ALAAAAAAWABYAAARY8MlJq7046827/2BYIQVhHg9pEgVGIklyDEUBy/RlE4FQF4dCj2AQXAiJQDCWQCAEBwIioEMQBgSAFhDAGghGi9XgHAhMNoSZgJkJei33UESv2+/4vD4TAQA7" />
                    <img class="intLink" title="Cut" onclick="formatDoc('cut');" src="data:image/gif;base64,R0lGODlhFgAWAIQSAB1ChBFNsRJTySJYwjljwkxwl19vj1dusYODhl6MnHmOrpqbmpGjuaezxrCztcDCxL/I18rL1P///////////////////////////////////////////////////////yH5BAEAAB8ALAAAAAAWABYAAAVu4CeOZGmeaKqubDs6TNnEbGNApNG0kbGMi5trwcA9GArXh+FAfBAw5UexUDAQESkRsfhJPwaH4YsEGAAJGisRGAQY7UCC9ZAXBB+74LGCRxIEHwAHdWooDgGJcwpxDisQBQRjIgkDCVlfmZqbmiEAOw==" />
                    <img class="intLink" title="Copy" onclick="formatDoc('copy');" src="data:image/gif;base64,R0lGODlhFgAWAIQcAB1ChBFNsTRLYyJYwjljwl9vj1iE31iGzF6MnHWX9HOdz5GjuYCl2YKl8ZOt4qezxqK63aK/9KPD+7DI3b/I17LM/MrL1MLY9NHa7OPs++bx/Pv8/f///////////////yH5BAEAAB8ALAAAAAAWABYAAAWG4CeOZGmeaKqubOum1SQ/kPVOW749BeVSus2CgrCxHptLBbOQxCSNCCaF1GUqwQbBd0JGJAyGJJiobE+LnCaDcXAaEoxhQACgNw0FQx9kP+wmaRgYFBQNeAoGihCAJQsCkJAKOhgXEw8BLQYciooHf5o7EA+kC40qBKkAAAGrpy+wsbKzIiEAOw==" />
                    <img class="intLink" title="Paste" onclick="formatDoc('paste');" src="data:image/gif;base64,R0lGODlhFgAWAIQUAD04KTRLY2tXQF9vj414WZWIbXmOrpqbmpGjudClFaezxsa0cb/I1+3YitHa7PrkIPHvbuPs+/fvrvv8/f///////////////////////////////////////////////yH5BAEAAB8ALAAAAAAWABYAAAWN4CeOZGmeaKqubGsusPvBSyFJjVDs6nJLB0khR4AkBCmfsCGBQAoCwjF5gwquVykSFbwZE+AwIBV0GhFog2EwIDchjwRiQo9E2Fx4XD5R+B0DDAEnBXBhBhN2DgwDAQFjJYVhCQYRfgoIDGiQJAWTCQMRiwwMfgicnVcAAAMOaK+bLAOrtLUyt7i5uiUhADs=" />
                </div>
                <div id="textBox" contenteditable="true">
                    <p>Lorem ipsum</p>
                </div>
                <p id="editMode"><input type="none" name="switchMode" id="switchBox" onchange="setDocMode(this.checked);" style="display: none;"> </p>
                <p><input type="button" onclick="mypopup_open()" value="SAVE"></p>
               
            </form>
        </div>
    </div>

    <div class="popup_form" id="popup_form">

        <form class="form" method="POST">
            <div class="form-content">
                <div class="mb-3">
                    <label for="Book_Name" class="form-label">Book Name:</label>
                    <input type="text" class="form-control" name="Book_Name" id="Book_Name" aria-describedby="BookName" required>
                    <div class="error_popup" id="error_popup"> The Book already exists! Please use another name</div>
                </div>

                <div class="mb-3">
                    <label for="Author Name" class="form-label">Author Name:</label>
                    <input type="text" class="form-control" name="Name" id="Author_Name" aria-describedby="AuthorName" value="<?php echo ($_SESSION['name']); ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="Genre" class="form-label">Genre:</label>
                    <input type="text" class="form-control" name="genre" id="genre" aria-describedby="Genre">
                </div>

                <div class="mb-3">
                    <label for="category" class="form-label">category:</label>
                    <select class="" id="category" name="category">
                        <option value="poem">Poem</option>
                        <option value="story">Story</option>
                        <option value="novel">Novel</option>
                    </select>
                </div>

                <div class="mb-3">
                <label for="publish" class="form-label"> Publish </label>
                <input type="checkbox" id="publish" name="publish" value="publish">

                </div>

                <input type="text" class="form-control" name="content" id="content" value="" hidden>

                <button type="submit" class="btn btn-info" name="save" id="btn" >Save</button>
                <button type="button" class="btn btn-danger" name="close" id="btn" onclick="mypopup_close()">Close</button>

            </div>
        </form>

    </div>


    <footer class="foot">

        <div class="col-lg-5" id="left">
            <h1>ABOUT SIRSPRESS</h1>
            <p style="color: azure; font-size:larger;">SirusPress is online platform and community for
                writers, readers and every creative bunch.</p>
        </div>
        <div class="col-lg-4" id="center">
            <h1>SUBSCRIBE TO OUR NEWSLETTER</h1>
            <form class="form" method="POST">
                <div class="col-mb-6">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp">
                </div>
                <div class="col-mb-6">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="Name" aria-describedby="nameHelp">
                </div>
            </form>
        </div>
        <div class="col-lg-3" id="right">

            <h1>QUICK CONTACT</h1>
            <div class="icons">
                <a href="#"> <img src="./images/8.png" alt=".." style="height: 2.1rem;"></a>
                <a href="#"><img src="./images/9.png" alt=".." style="height: 1.9rem;"></a>
                <a href="#"><img src="./images/10.JPG" alt=".." style="height: 1.6rem;"></a>
                <a href="#"><img src="./images/11.JPG" alt=".." style="height: 1.5rem;"></a>
            </div>
        </div>


    </footer>


    <script src="./scripts/write.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>