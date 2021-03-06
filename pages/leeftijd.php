<!doctype html>
<html>
	<head>
		<title>Kentéken | Leeftijd</title>		
		<Meta charset=utf-8>
		<meta name=description content="">
		<link rel=stylesheet href="../css/index.css">
		<link rel="icon" href="../media/favicon.ico" type="image/x-icon" />
	</head>
	<body id="tab4"> 
		<?php
			if(isset($_POST['inloggen']))
				{
					Include("login.php");
				}
			Include("../pages/header.php");
			Include("../pages/construction.php");
		?>
		<div style="padding:0% 0% 30% 2.5%">
			<form action="" method="post">
				<fieldset id="leeftijd">
					<table>
						<legend>leeftijd</legend>
						<tr>
							<td><label for="geboortedatum">geboorte jaar: </label></td>
							<td><input type="number" id="geboortedatum" name="geboortedatum" required></td>
						</tr>
						
						<tr>
							<td><label for="geboortedatum">geboorte maand: </label></td>
							<td>
								<select name="geboortemaand" id="geboortemaand" required>
									<option value="">Maand</option>
									<option value="1">Januari</option>
									<option value="2">Februari</option>
									<option value="3">Maart</option>
									<option value="4">April</option>
									<option value="5">Mei</option>
									<option value="6">Juni</option>
									<option value="7">Juli</option>
									<option value="8">augustus</option>
									<option value="9">september</option>
									<option value="10">oktober</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td><label for="geboortedag">geboorte dag: </label></td>
							<td><input type="number" id="geboortedag" name="geboortedag"  required></td>
						</tr>
						
						<tr>
							<td><label for="geboorteuur">geboorte uur: </label></td>
							<td>
								<select name="geboorteuur" id="geboorteuur">
									<option value="">0</option>
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td><input type="submit" name="submit" value = "submit"></td>
						</tr>

						</table>
				</fieldset>
			</form>
			<?php
				if(isset($_POST['submit']))
					{
					date_default_timezone_set('Europe/Amsterdam');
					$datumY=date("Y");
					$datumM=date("n");
					$datumD=date("j");
					$datumU=date("G");
					
					$geboortedatum=		$_POST['geboortedatum'];
					$geboortemaand=		$_POST['geboortemaand'];
					$geboortedag=			$_POST['geboortedag'];
					$geboorteuur=			$_POST['geboorteuur'];
					
					echo "Test: $geboortedatum, $geboortemaand, $geboortedag, $geboorteuur | $datumY, $datumM, $datumD, $datumU" . "<br>" . "<br>";
					
					$leeftijdY=$datumY - $geboortedatum;
					$leeftijdM=$datumM - $geboortemaand;
					$leeftijdD=$datumD - $geboortedag;
					$leeftijdU=$datumU - $geboorteuur;
					$iets="0";
					
						if($leeftijdD <= $iets)
							{
								if($datumM == 1)
									{
										$leeftijdD=$leeftijdD + 31;
									}
								if($datumM == 2)
									{
										$leeftijdD=$leeftijdD + 28;
									}
								if($datumM == 3)
									{
										$leeftijdD=$leeftijdD + 31;
									}									
								if($datumM == 4)
									{
										$leeftijdD=$leeftijdD + 30;
									}									
								if($datumM == 5)
									{
										$leeftijdD=$leeftijdD + 31;
									}									
								if($datumM == 6)
									{
										$leeftijdD=$leeftijdD + 31 ;
									}									
								if($datumM == 7)
									{
										$leeftijdD=$leeftijdD + 30;
									}									
								if($datumM == 8)
									{
										$leeftijdD=$leeftijdD + 31;
									}									
								if($datumM == 9)
									{
										$leeftijdD=$leeftijdD + 30;
									}									
								if($datumM == 10)
									{
										$leeftijdD=$leeftijdD + 31;
									}									
								if($datumM == 11)
									{
										$leeftijdD=$leeftijdD + 30;
									}									
								if($datumM == 12)
									{
										$leeftijdD=$leeftijdD + 31;
									}									
									$leeftijdM=$leeftijdM - 1;
							}

					echo "
						Leeftijd =<br>
						$leeftijdY jaar,<br>
						$leeftijdM maanden,<br>
						$leeftijdD dagen<br>
						$leeftijdU uur, <br>";
					
					$jaar=356.25 * $leeftijdY;
					$leeftijd=$jaar + $leeftijdM * 29.6875;
					
					echo "<br>" . "$leeftijd dagen" . "<br>";
					
					$leeftijd=$leeftijd * 24;
					
					echo "$leeftijd uur" . "<br>";

					$leeftijd=$leeftijd * 60;

					echo "$leeftijd minuten" . "<br>";

					$leeftijd=$leeftijd * 60;

					echo "$leeftijd seconden" . "<br>";
					}
			?>
		</div>
		<?php
			Include("../pages/footer.php");
		?>
	</body>
</html>
 
