//method Math cek ae digoogle kek fungsi math.sin, powe dll, banyak //
function sin() 
{
    document.final_calculator.result.value = Math.sin(document.final_calculator.result.value);
}

//udah jelas kan:v tiap fungsu juga dah ada namanya//
function cos() 
{
    document.final_final_calculatorator.result.value = Math.cos(document.final_calculator.result.value);
}

function tan() 
{
    document.final_calculator.result.value = Math.tan(document.final_calculator.result.value);
}

// old_inputnya kan nyimpen dokument a.k.a (form name final_calculator) yang lama, semisal habis nginputin 
// 3, ntar di var old_inputnya ada 3 nah kita happus caranya di old_input nya di -1 //
function BACKSPC() 
{
    var old_input = document.final_calculator.result.value;
    document.final_calculator.result.value = old_input.substr(0, old_input.length - 1);
}

//math.pow buat hasil pemangkatan square pangkat 2, cubed pankat kibik, sqrt2 akar2, sqrt3 akar3. //
function square() 
{
    document.final_calculator.result.value = Math.pow(document.final_calculator.result.value, 2);
}

function cubed() 
{
    document.final_calculator.result.value = Math.pow(document.final_calculator.result.value, 3);
}

function sqrt2() 
{
    document.final_calculator.result.value = Math.pow(document.final_calculator.result.value, 1 / 2);
}

function sqrt3() 
{
    document.final_calculator.result.value = Math.pow(document.final_calculator.result.value, 1 / 3);
}

//ini biar bisa ngejalanin operasi lagi setelah di hasil + biar inputan masuk, ini hilang sama aj gak jalan meski ditekan //
function number(value) 
{
    document.final_calculator.result.value += value;
}
// undifimed semisal kosongan datane //
function remv() 
{
    document.final_calculator.result.value = " ";
}

function equal() 
{
    document.final_calculator.result.value = eval(document.final_calculator.result.value);
}