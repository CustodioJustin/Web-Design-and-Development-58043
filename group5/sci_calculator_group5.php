<html>
	<title>WDD GROUP 5</title>
	<head>
	<body style="background-color:#0c0c0c;">
		<style>

			.userinterface
			{
				border-radius: 20px;
				width: 500px;
				height: 720px;
				background: #1c1c1c;
				text-align: center;
			}
			
			.usermanual
			{
				border-radius: 20px;
				width: 900px;
				height: 550px;
				background: #1c1c1c;
			}
			
			.manualtxtbox
			{
				border-radius: 20px;
				width: 800px;
				height: 70px;
				background: #161616;
			}
			
			#output
			{
				width: 100%;
				height: 20%;
				color: white;
				background-color: #222222 ;
				border: none;
				font-size: 40px;
				font-family: "Arial", sans-serif;
				text-align: right;
			}
	
			#buttonstyle1
			{
				width: 20%;
				height: 65px;
				color: white;
				border: none;
				cursor: pointer;
				text-align: center;
				font-family: "Arial", sans-serif;
				font-size: 120%;
				background: #323232;
	
			}
			
			#buttonstyle2
			{
				width: 20%;
				height: 65px;
				color: white;
				margin: auto;
				border: none;
				cursor: pointer;
				text-align: center;
				font-family: "Arial", sans-serif;
				font-size: 120%;
				background: #832b09;
			}
			
			#buttonstyle3
			{
				width: 40%;
				height: 65px;
				color: white;
				margin: auto;
				border: none;
				cursor: pointer;
				text-align: center;
				font-family: "Arial", sans-serif;
				font-size: 120%;
				background: #618f69;
				outline: 0;
			}
			
			#buttonstyle4
			{
				width: 20%;
				height: 65px;
				color: white;
				margin: auto;
				border: none;
				cursor: pointer;
				text-align: center;
				font-family: "Arial", sans-serif;
				font-size: 120%;
				background: #303030;
				outline: 0;
			}
			
			input[type=button]:active {
				transform: scale(0.9);
			}
			
		</style>
		
		<script>
			
			/* Creates a backspace function, as a way to not always clear a already inputted
			value */
			function backspace(sci_calc)
			{                                            
				number_count = sci_calc.data.value.length;
				sci_calc.data.value = sci_calc.data.value.substring(0, number_count-1);
			}
			
			function sci_calculate(sci_calc)
			{
				
				/* If the inputted value consist of "!" then peform the factorial equation
					else compute and display the result using evaluate command */
				if(sci_calc.data.value.includes("!"))
				{
					
					number_count = sci_calc.data.value.length;
					n = Number(sci_calc.data.value.substring(0, number_count-1));
					f = 1;
					
					for(i = 2; i <= n; i++)
						f = f*i;
					sci_calc.data.value = f;
				}
				
				else
					sci_calc.data.value = eval(sci_calc.data.value);
			}
			
		</script>
		
	</head>
	<body>
		<font style="font-family:Arial; color:white">Adamson University - Computer Engineering</font>
		<br>
		<font style="font-family:Arial; color:white">Developed using: HTML, CSS, and Javascript</font>
		
		<center>
		<div class="userinterface">
		<form name = "sci_calc">
		
		<br>
		<font style="font-family:Arial; color:white">Basic Scientific Calculator</font>
		<br>
		<br>
		
		<!--
			
			"return event.charCode >= 8 && event.charCode <= 57"
			This display code limits on the ranges of character can be inputted.
			The current value is set that allows special opperand symbol and number but rejects
			alphabets.
			
		-->
		
		<input  type="text" id="output" name="data" onkeypress= "return event.charCode >= 8 && event.charCode <= 57"><!--
    --><input type="button" id="buttonstyle1" value="SIN" OnClick="sci_calc.data.value+='Math.sin('"><!--
    --><input type="button" id="buttonstyle1" value="COS" OnClick="sci_calc.data.value+='Math.cos('"><!--
    --><input type="button" id="buttonstyle1" value="TAN" OnClick="sci_calc.data.value+='Math.tan('"><!--
    --><input type="button" id="buttonstyle1" value="π" OnClick="sci_calc.data.value+='Math.PI'"><!--
    --><input type="button" id="buttonstyle1" value="^x" OnClick="sci_calc.data.value+='**'"><!--
    --><input type="button" id="buttonstyle1" value="SIN-1" OnClick="sci_calc.data.value+='Math.asin('"><!--
    --><input type="button" id="buttonstyle1" value="COS-1" OnClick="sci_calc.data.value+='Math.acos('"><!--
    --><input type="button" id="buttonstyle1" value="TAN-1" OnClick="sci_calc.data.value+='Math.atan('"><!--
    --><input type="button" id="buttonstyle1" value="(" OnClick="sci_calc.data.value+='('"><!--
    --><input type="button" id="buttonstyle1" value=")" OnClick="sci_calc.data.value+=')'"><!--
    --><input type="button" id="buttonstyle1" value="√" OnClick="sci_calc.data.value+='Math.sqrt('"><!--
    --><input type="button" id="buttonstyle1" value="log" OnClick="sci_calc.data.value+='Math.log('"><!--
    --><input type="button" id="buttonstyle1" value="e^" OnClick="sci_calc.data.value+='Math.exp('"><!--
    --><input type="button" id="buttonstyle1" value="n!" OnClick="sci_calc.data.value+='!'"><!--
    --><input type="button" id="buttonstyle1" value="|x|" OnClick="sci_calc.data.value+='Math.abs('"><!--
    --><input type="button" id="buttonstyle4" value="7" OnClick="sci_calc.data.value+='7'"><!--
    --><input type="button" id="buttonstyle4" value="8" OnClick="sci_calc.data.value+='8'"><!--
    --><input type="button" id="buttonstyle4" value="9" OnClick="sci_calc.data.value+='9'"><!--
    --><input type="button" id="buttonstyle2" value="Del" OnClick="backspace(this.form)"><!--
    --><input type="button" id="buttonstyle2" value="C" OnClick="sci_calc.data.value=''"><!--
    --><input type="button" id="buttonstyle4" value="4" OnClick="sci_calc.data.value+='4'"><!--
    --><input type="button" id="buttonstyle4" value="5" OnClick="sci_calc.data.value+='5'"><!--
    --><input type="button" id="buttonstyle4" value="6" OnClick="sci_calc.data.value+='6'"><!--
    --><input type="button" id="buttonstyle1" value="x" OnClick="sci_calc.data.value+='*'"><!--
    --><input type="button" id="buttonstyle1" value="/" OnClick="sci_calc.data.value+='/'"><!--
    --><input type="button" id="buttonstyle4" value="1" OnClick="sci_calc.data.value+='1'"><!--
    --><input type="button" id="buttonstyle4" value="2" OnClick="sci_calc.data.value+='2'"><!--
    --><input type="button" id="buttonstyle4" value="3" OnClick="sci_calc.data.value+='3'"><!--
    --><input type="button" id="buttonstyle1" value="+" OnClick="sci_calc.data.value+='+'"><!--
    --><input type="button" id="buttonstyle1" value="-" OnClick="sci_calc.data.value+='-'"><!--
    --><input type="button" id="buttonstyle4" value="0" OnClick="sci_calc.data.value+='0'"><!--
    --><input type="button" id="buttonstyle4" value="." OnClick="sci_calc.data.value+='.'"><!--
	--><input type="button" id="buttonstyle4" value="x10^" OnClick="sci_calc.data.value+='*10**'"><!--
    --><input type="button" id="buttonstyle3" value="=" OnClick="sci_calculate(this.form)">
		<br>
		<br>
		<font style="font-family:Arial; color:white">GROUP 5 - WDD</font>
		</form>
		</div>
		
		<br>
		<br>
		
		<div class="usermanual">
		<br>
		<font style="font-family:Arial; color:white"><h3><b>User Manual</b></h3></font>
		<center>
			<div class="manualtxtbox">
				<br>
				<font style="font-family:Arial; color:white">
					The Calculator function similarly as a standard Scientific Calculator.
				</font>
			</div>
			<br>
			<div class="manualtxtbox">
				<br>
				<font style="font-family:Arial; color:white">
					Special opperand such as TAN, COS, etc requires to be inputted first before any values.
				</font>
			</div>
			<br>
			<div class="manualtxtbox">
				<font style="font-family:Arial; color:white">
				<br>
					The Calculator has no fixed decimal places thus any number raised to the negative might result of a large quantity of  decimal places. ie 0.00001999..
				</font>
			</div>
			<br>
			<div class="manualtxtbox">
				<font style="font-family:Arial; color:white">
				<br>
					Attempting to do multiplication using parenthesis () will not work and must be used with "*" symbol.
				</font>
			</div>
			<br>
			<div class="manualtxtbox">
				<font style="font-family:Arial; color:white">
				<br>
					It is not possible to perform complicated mixed equation with factorial symbol "!" present.
				</font>
			</div>
		</center>
		</center>
		
	</body>
</html>
