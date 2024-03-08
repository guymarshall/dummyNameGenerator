<h1 style="text-align: center; font-family: 'Arial', sans-serif;">Dummy Name Generator</h1>
<form action="processInputs.php" method="get" style="max-width: 400px; margin: 0 auto; font-family: 'Arial', sans-serif;">
    <label for="number-of-names" style="display: block; margin-bottom: 8px;">Number to generate:</label>
    <input type="number" id="number-of-names" name="number-of-names" style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box;" required>
    <br>
    <label for="minimum-length" style="display: block; margin-bottom: 8px;">Minimum length:</label>
    <input type="number" id="minimum-length" name="minimum-length" min="1" step="1" style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box;" required>
    <br>
    <label for="maximum-length" style="display: block; margin-bottom: 8px;">Maximum length:</label>
    <input type="number" id="maximum-length" name="maximum-length" min="1" step="1" style="width: 100%; padding: 8px; margin-bottom: 16px; box-sizing: border-box;" required>
    <br>
    <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Generate</button>
</form>