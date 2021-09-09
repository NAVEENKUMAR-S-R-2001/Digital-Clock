<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="1"/>
	<title>Digital clcok</title>
    <style type="text/css">
    body{
        background-color:black;
    }
    h1{
        text-transform:uppercase;
        color:rgb(0,240,0);
        text-align:center;
        padding-top:10px;
        padding:25px 25px;
    }
    span{
        position:absolute;
        top:50%;
        left:50%;
        color:rgb(0,240,0);
        font-size:100px;
        transform:translate(-50%, -50%);
        border-radius:100px;
        padding:10px 10px;
        font-size:3rem;

    }
    .container{
        border:10px solid rgb(0,240,0);
        width:450px;
        height:450px;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        color:#fff;
        font-size:32px;
        margin-left:35%;
        margin-top:3%;
        border-radius:50%;
        background:rgb(0,0,0);
        box-shadow:0 0 5px rgb(0,240,0),
                0 0 10px rgb(0,240,0),
                0 0 15px rgb(0,240,0);

    }
    </style>
    </head>
    <body>
         <h1>Digital clcok</h1>
    <div class="container">
   <span> <?php echo date("h : i : s : A");?> </span>
</div>
   </body>
   </html>