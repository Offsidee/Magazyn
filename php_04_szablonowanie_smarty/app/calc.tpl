{extends file="../templates/main.tpl"}

{block name=footer }<footer  style="text-align:center"; "background:#181015">przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora</footer>{/block}

{block name=content}
<div id= head>
<h3  style="font-size:5em" >Kalkulator zysku z lokaty</h2>


<form action="{$app_url}/app/calc.php" method="post">
	<fieldset>
		<label for="x">Podaj kwotę złożoną na lokatę:</label>
		<input id="x" type="text" placeholder="wartość x" name="x" value="{$form['x']}">
		<label for="y">Podaj roczne oprocentowanie lokaty:</label>
		<input id="y" type="text" placeholder="wartość y" name="y" value="{$form['y']}">
                                     <label for="z">Podaj czas trwania lokaty w dniach:</label>
		<input id="z" type="text" placeholder="wartość z" name="z" value="{$form['z']}">
	</fieldset>
	<button type="submit" class="btn-action">Oblicz</button>
</form>

<div class="messages">

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result)}
	<h4>Wynik</h4>
	<p class="res">
	{$result}
	</p>
{/if}

</div>

{/block}