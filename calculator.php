<!DOCTYPE html>
<html lang="en">
<head>
    <meta 
    charset="UTF-8"
    http-equiv="X-UA-Compatible" content="IE=edge"
    name="viewport" content="width=device-width, initial-scale=1.0"
    >
    <!--Link ke CSS-->
    <link rel="stylesheet" href="style_calcu.css">

    <title>Calculator UI Design</title>
</head>
<body>
    
    <!-- Model baru tanpa kelas, nyoba-nyoba wkwwkw, name formnya ternyata ga guna awwowkow gak dipakek di js-->
    <form name="final_calculator">
        <table align="center">

            <!-- dikasih ini biar kek apa ya ada bayangan angka 0 gitu, jadi user tau keluarnya dimana hasil inputannya -->
            <tr>
                <td colspan="4"> 
                    <input type="text" name="result" placeholder="0" style="text-align:right"> 
                </td>
            </tr>
            <!-- sin cos tan diarahin pakek onclicl js, jadi ntar ngeload data di fungsi masing-masing, misal onclick sin, ntar arahnya dia
            jalan di fungsi sin yang ada di calscript.js -->
            <tr>
                <td>
                    <button type="button" value="sin" onclick="sin()"> sin </button> 
                </td>
                <td>
                    <button type="button" value="cos" onclick="cos()"> cos</button> 
                </td>
                <td>
                    <button type="button" value="tan" onclick="tan()"> tan </button> 
                </td>
                <td colspan="2">
                    <button type="button" value="C" class="clear" onclick="remv()"> C </button>
                </td>
            </tr>
            <!-- &radic sama &#8731 itu lambang akar 2 sama kibik punyanya UTF-8 nya html kek spasi gitu kan pak &embsp -->
            <tr>
                <td>
                    <button type="button" value="sqrt2" onclick="sqrt2()"> &radic; </button> 
                </td>
                <td>
                    <button type="button" value="sqrt3" onclick="sqrt3()"> &#8731; </button> 
                </td>
                <td>
                    <button type="button" value="x^2" onclick="square()"> x<sup>2 </button> 
                    </td>
                <td>
                    <button type="button" value="x^3" onclick="cubed()"> x<sup>3 </button> 
                    </td>    
            </tr>
            <!-- Gak ada logo backspace, cari di icon coba, males anjir, tak isi del lebih cakep diisi logo backspace seh -->
            <tr>
                <td>
                    <button type="button" value="1" onclick="number(value)"> 1 </button> 
                </td>
                <td>
                    <button type="button" value="2" onclick="number(value)"> 2 </button> 
                </td>
                <td>
                    <button type="button" value="3" onclick="number(value)"> 3 </button> 
                </td>
                <td>
                    <button type="button" value="BACKSPC" onclick="BACKSPC()"> DEL </button> 
                </td> 
            </tr> 

            <tr>
                <td>
                    <button type="button" value="4" onclick="number(value)"> 4</button> 
                </td>
                <td>
                    <button type="button" value="5" onclick="number(value)"> 5 </button> 
                </td>
                <td>
                    <button type="button" value="6" onclick="number(value)"> 6 </button> 
                </td>
                <td>
                    <button type="button" value="-" onclick="number(value)"> - </button> 
                </td>
            </tr>

            <tr>
                <td>
                    <button type="button" value="7" onclick="number(value)"> 7 </button> 
                </td>
                <td>
                    <button type="button" value="8" onclick="number(value)"> 8 </button> 
                </td>
                <td>
                    <button type="button" value="9" onclick="number(value)"> 9 </button> 
                </td>
                <td>
                    <button type="button" value="/" onclick="number(value)"> / </button> 
                </td>
            </tr>

            <tr>
                <td>
                    <button type="button" value="." onclick="number(value)"> . </button> 
                </td>
                <td>
                    <button type="button" value="0" onclick="number(value)"> 0 </button> 
                </td>
                <td>
                    <button type="button" value="*" onclick="number(value)"> * </button> 
                </td>
                <td>
                    <button type="button" value="%" onclick="number(value)"> % </button> 
                </td>
            </tr>

            <tr>
                <td colspan="2"> 
                    <button type="button" value="=" onclick="equal()" class="equal">=</button> 
                </td>
                <td>
                    <button type="button" value="+" onclick="number(value)"> + </button> 
                </td>
            </tr>

        </table>
    </form>


    <script src="calscript.js"></script>

</body>
</html>