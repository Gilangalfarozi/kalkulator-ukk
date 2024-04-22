<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KALKULATOR UKK</title>
     <style>
        form{
            width: 100%;
            margin: 0 auto;
            padding: 100%;
            border: 3px solid black;
            border-radius: 8px;
            background-color: green;  
        }
        table{
            border : 1 solid black;
            margin-left: auto;
            margin-right: auto;
        }
        input[type="button"]{
            width:  100%;
            padding: 25px 45px;
            background-color:  yellow;
            color: black;
            font-size: 24px;
            font-weight: bold;
            border: auto;
            border-radius: 10px;
        }
        input[type="text"]{
            padding: 25px 45px;
            font-size: 24px;
            font-weight: bold;
            border: none;
            border-radius: 99px;
            border: 2px solid black;
        }
     </style>
</head>
<body>
    <form name="form1" action="" method="post">
        <tr>
            <td>
                <h1>
                    <center><font color="black">KALKULATOR</font></center>
                </h1>
            </td>
        </tr>
        <center>
            <input type="text" name="text1" id="">
        <table>
            <tr>
                <td><input type="button" value="1" onClick="form1.text1.value+='1'"></td>
                <td><input type="button" value="2" onClick="form1.text1.value+='2'"></td>
                <td><input type="button" value="3" onClick="form1.text1.value+='3'"></td>
                <td><input type="button" value="+" onClick="form1.text1.value+='+'"></td>
            </tr>
            <tr>
                <td><input type="button" value="4" onClick="form1.text1.value+='4'"></td>
                <td><input type="button" value="5" onClick="form1.text1.value+='5'"></td>
                <td><input type="button" value="6" onClick="form1.text1.value+='6'"></td>
                <td><input type="button" value="-" onClick="form1.text1.value+='-'"></td>
            </tr>
            <tr>
                <td><input type="button" value="7" onClick="form1.text1.value+='7'"></td>
                <td><input type="button" value="8" onClick="form1.text1.value+='8'"></td>
                <td><input type="button" value="9" onClick="form1.text1.value+='9'"></td>
                <td><input type="button" value="*" onClick="form1.text1.value+='*'"></td>
            </tr>
            <tr>
                <td><input type="button" value="C" onClick="form1.text1.value=''"></td>
                <td><input type="button" value="0" onClick="form1.text1.value+='0'"></td>
                <td><input type="button" value="=" onClick="form1.text1.value=eval(form1.text1.value)"></td>
                <td><input type="button" value="/" onClick="form1.text1.value+='/'"></td>
            </tr>
        </table>
        </center>


</body>
</html>