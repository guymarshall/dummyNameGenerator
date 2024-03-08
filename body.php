<h1>Dummy Name Generator</h1>
<form action="processInputs.php" method="get">
    <label for="number-of-names">Number to generate:</label>
    <input type="number" id="number-of-names" name="number-of-names">
    <br>
    <label for="minimum-length">Minimum length:</label>
    <input type="number" id="minimum-length" name="minimum-length" min="1" step="1">
    <br>
    <label for="maximum-length">Maximum length:</label>
    <input type="number" id="maximum-length" name="maximum-length" min="1" step="1">
    <br>
    <button type="submit">Generate</button>
</form>