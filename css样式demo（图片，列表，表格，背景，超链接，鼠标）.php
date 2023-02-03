<html lang="en-us">

<head>
    <meta charset="UTF-8">
    <title></title>

    <style>

        #first
        {
            cursor: pointer;
        }
        img:hover
        {
            border 20px solid blue;
        }
        p
        {
            text-indent: 28px;

            font-size: 14px;
        }

        #new
        {
            font-style: italic;
            font-weight: bolder;
            font-size:24px;
            text-decoration:underline;
        }

        table,th,tr,td {border:#B82 2px dashed; border-collapse: separate;border-spacing: 18px;}
        table{border-spacing: 30px}
        caption{caption-side: bottom;}

        div
        {
            width: 300px;
            height: 80px;
            border: 1px solid silver;
        }

        p
        {
            float: right;
        }

        .img1
        {
            text-align: left;
        }
        .img1:hover{border:red solid 2px;}

        .img2 {text-align: center;}

        .img3 {text-align: right;}

        #idk
        {
            background-color: hotpink;
            background-image: url("welcome.gif");
            width: 960px;
            height: 480px;
            background-repeat: no-repeat;
            background-position: 0 0;
            background-attachment:fixed;
        }

        a{text-decoration: line-through;color: red;}
        a:hover
        {
            text-decoration:none;
            color: antiquewhite;
        }



    </style>

</head>

<body>
    <img id="first" src="welcome.gif" alt="newnew">

    <a id="lvha" href="https://z.cn">无内鬼发图</a>

    <div id="idk">the background-color</div>

    <div class="img1">
    <img  src="welcome.gif" alt="tu1">
    </div>

    <p class="img1">doyou like it?</p>

    <div class="img2">
    <img  src="welcome.gif" alt="tu2" >

    </div>
    <div class="img3">
    <img  src="welcome.gif" alt="tu3">
    </div>

    <p id="ccc">as we see<span id="new">yysyqs</span></p>

    <table>
        <caption>biaogebiaoti</caption>
        <!--表头 -->
        <thead>
            <tr>
                <th>biaotoudanyuange1</th>
                <th>biaotoudanyuange2</th>
            </tr>
        </thead>

        <!-- 表身 -->
        <tbody>
            <tr>
                <td>biaohangdanyuange1</td>
                <td>biaohangdanyuange2</td>
            </tr>
            <tr>
                <td>biaohangdanyuange3</td>
                <td>biaohangdanyuange4</td>
            </tr>
        </tbody>

        <!-- 表脚  -->
        <tfoot>
            <tr>
                <td>biaohangdanyuange5</td>
                <td>bioahangdanyuange6</td>
            </tr>
        </tfoot>


    </table>



</body>

    

</html>