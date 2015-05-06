<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=windows-1252" http-equiv="Content-Type">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>cinco</title>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript" src="jquery-1.11.1.js"></script>
<script type="text/javascript" src="5.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.4.js"></script>
<script type="text/javascript" src="cinco.js"></script>
<script type="text/javascript">
var sharevector = "<?php print $_GET['share'];?>";
</script>

<style type="text/css">
.try {
	width: 1em;
	font-family: Tahoma;
}
.score {
	width: 2em;
}
.guessrow {
	height: 12pt;
	vertical-align: bottom;
}
.buttonsmall {
	font-size: small;
	font-family: "Arial Narrow";
}
</style>

</head>

<body>

<table>
	<tr>
	<td style="vertical-align:top">
		<table>
			<tr>
				<td colspan="3" style="text-align: center;">
					<input style="font-weight:bold" id="guess" type="button" value="Guess" onclick ="makeguess()"/>
				</td>
				<td>
					<button class="buttonsmall" id="share" onclick="gshare()">Share</button><br/>
				</td>
	
			</tr>
			<tr>
				<td>
					<input class="buttonsmall" id="random" type="button" value="Random" onclick ="randomguess()"/>
				</td>
				<td>
					<button class="buttonsmall" id="giveup" type="button" onclick="giveup()">Give Up</button>
				</td>
				<td>
					<input class="buttonsmall" id="stats" type="button" value="Stats" onclick="showstats()"/>
				</td>
				<td>
					<button class="buttonsmall" id="smartguess" onclick="smartguess()">Smart<br/>Guess</button>
				</td>
	
			</tr>
		</table>

		<table id="guesstable">
			<thead>
				<tr class="guessrow" style="font-size: xx-small; font-weight: normal">
					<th>Guesses:</th>
					<th class="try"></th>
					<th class="try"></th>
					<th class="try"></th>
					<th class="try"></th>
					<th class="try"></th>
					<th class="score">Match </th>
					<th class="score">In Place </th>
				</tr>
			</thead>
			<tr class="guessrow" id="guess1">
				<td style="width: 6ex; text-align: right;">1:&nbsp;</td>
				<td class="try">
				<input oninput ="foc(this)" id="i1-1" class="try" size="1" />
				</td>
				<td class="try">
				<input oninput ="foc(this)" id="i1-2" class="try" size="1" />
				</td>
				<td class="try">
				<input oninput ="foc(this)" id="i1-3" class="try" size="1" />
				</td>
				<td class="try">
				<input oninput ="foc(this)" id="i1-4" class="try" size="1" />
				</td>
				<td class="try">
				<input oninput ="foc(this)" id="i1-5" class="try" size="1" />
				</td>
				<td style="text-align:right">&nbsp;</td>
				<td style="text-align:right">&nbsp;</td>
			</tr>
		</table>
	</td>
	<td >
		<table  style="border-right: 2px solid #C0C0C0; border-bottom: 2px solid #C0C0C0; margin-top:12pt; border-left-style: solid; border-left-width: 2px; border-top-style: solid; border-top-width: 2px; text-align: center;">
			<tr>
				<td colspan="2">
					<input type="button" value="Clear" onclick="clearalphabet()" class="buttonsmall" />
				</td>
			</tr>
			<tr>
				<td id="a" onclick="change(this)">A</td>
				<td id="b" onclick="change(this)">B</td>
			</tr>
			<tr>
				<td id="c" onclick="change(this)">C</td>
				<td id="d" onclick="change(this)">D</td>
			</tr>
			<tr>
				<td id="e" onclick="change(this)">E</td>
				<td id="f" onclick="change(this)">F</td>
			</tr>
			<tr>
				<td id="g" onclick="change(this)">G</td>
				<td id="h" onclick="change(this)">H</td>
			</tr>
			<tr>
				<td id="i" onclick="change(this)">I</td>
				<td id="j" onclick="change(this)">J</td>
			</tr>
			<tr>
				<td id="k" onclick="change(this)">K</td>
				<td id="l" onclick="change(this)">L</td>
			</tr>
			<tr>
				<td id="m" onclick="change(this)">M</td>
				<td id="n" onclick="change(this)">N</td>
			</tr>
			<tr>
				<td id="o" onclick="change(this)">O</td>
				<td id="p" onclick="change(this)">P</td>
			</tr>
			<tr>
				<td id="q" onclick="change(this)">Q</td>
				<td id="r" onclick="change(this)">R</td>
			</tr>
			<tr>
				<td id="s" onclick="change(this)">S</td>
				<td id="t" onclick="change(this)">T</td>
			</tr>
			<tr>
				<td id="u" onclick="change(this)">U</td>
				<td id="v" onclick="change(this)">V</td>
			</tr>
			<tr>
				<td id="w" onclick="change(this)">W</td>
				<td id="x" onclick="change(this)">X</td>
			</tr>
			<tr>
				<td id="y" onclick="change(this)">Y</td>
				<td id="z" onclick="change(this)">Z</td>
			</tr>
		</table>
	</td>
	</tr>
	<tr>
		<td colspan="2" style="width:3in; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: small;">
			How to play: I have a mystery five letter word. You try and guess the word. 
			For each guess I will let you know the number of letters you have that match
			and how many are in the correct spot. Enjoy!
</td>
	</tr>
</table>

<div id="dialog" title="Share" style="visibility:hidden">
	<p>Copy and paste this link to share this game with your friends:</p>
	<a id="sharelink" href=""></a>
</div>


</body>


</html>
