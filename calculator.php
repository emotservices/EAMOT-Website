<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DG Optimization Calculator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        .output {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>DG Optimization Calculator</h2>
        <p class="text-muted">Enter branch details below to get recommendations for New DG, RECD, and ESS options.</p>
        
        <!-- Input Form -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="avgLoadSummer" class="form-label">Summer Average Load (kVA)</label>
                <input type="number" id="avgLoadSummer" class="form-control" placeholder="Enter Summer Avg Load">
            </div>
            <div class="col-md-6 mb-3">
                <label for="avgLoadWinter" class="form-label">Winter Average Load (kVA)</label>
                <input type="number" id="avgLoadWinter" class="form-control" placeholder="Enter Winter Avg Load">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="runHoursSummer" class="form-label">Summer Run Hours (hours)</label>
                <input type="number" id="runHoursSummer" class="form-control" placeholder="Enter Summer Run Hours">
            </div>
            <div class="col-md-6 mb-3">
                <label for="runHoursWinter" class="form-label">Winter Run Hours (hours)</label>
                <input type="number" id="runHoursWinter" class="form-control" placeholder="Enter Winter Run Hours">
            </div>
        </div>

        <button class="btn btn-primary" onclick="calculate()">Calculate</button>

        <!-- Output Section -->
        <div class="output" id="output">
            <h4>Results</h4>
            <p>Recommendations will appear here...</p>
        </div>
    </div>

    <script>
        function calculate() {
            // Input values
            const avgLoadSummer = parseFloat(document.getElementById('avgLoadSummer').value);
            const avgLoadWinter = parseFloat(document.getElementById('avgLoadWinter').value);
            const runHoursSummer = parseFloat(document.getElementById('runHoursSummer').value);
            const runHoursWinter = parseFloat(document.getElementById('runHoursWinter').value);

            // Validation
            if (isNaN(avgLoadSummer) || isNaN(avgLoadWinter) || isNaN(runHoursSummer) || isNaN(runHoursWinter)) {
                document.getElementById('output').innerHTML = `<p>Please enter valid inputs for all fields.</p>`;
                return;
            }

            // Determine maximum average load
            const maxAvgLoad = Math.max(avgLoadSummer, avgLoadWinter);

            // Recommendations
            let dgRating, ess, recdRating;

            // DG Recommendation
            if (maxAvgLoad <= 20) dgRating = 20;
            else if (maxAvgLoad <= 40) dgRating = 40;
            else if (maxAvgLoad <= 62.5) dgRating = 62.5;
            else dgRating = 75;

            // ESS Recommendation
            if (maxAvgLoad <= 10) ess = "10KVA/96V (1P-1P)";
            else if (maxAvgLoad <= 15) ess = "15KVA/360V (3P-1P)";
            else ess = "15KVA/360V (3P-3P)";

            // RECD Recommendation (aligned with DG)
            recdRating = dgRating;

            // Costs and ROI
            const dgCost = dgRating === 20 ? 668574 : dgRating === 40 ? 1150000 : 1562500;
            const essCost = ess === "10KVA/96V (1P-1P)" ? 931250 : ess === "15KVA/360V (3P-1P)" ? 1126250 : 1695000;
            const recdCost = dgRating === 20 ? 156250 : dgRating === 40 ? 250000 : 320000;

            const fuelSavings = (0.25 * 2.5 * (runHoursSummer + runHoursWinter) * 100).toFixed(2);
            const carbonCredits = (fuelSavings / 2.68 * 3000).toFixed(2);

            const dgROI = (dgCost / (parseFloat(fuelSavings) + parseFloat(carbonCredits))).toFixed(2);
            const essROI = (essCost / (parseFloat(fuelSavings) + parseFloat(carbonCredits))).toFixed(2);
            const recdROI = (recdCost / parseFloat(carbonCredits)).toFixed(2);

            // Populate output
            document.getElementById('output').innerHTML = `
                <p><strong>Recommended DG Rating:</strong> ${dgRating} kVA (Cost: ₹${dgCost})</p>
                <p><strong>Recommended ESS:</strong> ${ess} (Cost: ₹${essCost})</p>
                <p><strong>Recommended RECD:</strong> ${recdRating} kVA (Cost: ₹${recdCost})</p>
                <p><strong>Fuel Savings:</strong> ₹${fuelSavings}/year</p>
                <p><strong>Carbon Credits:</strong> ₹${carbonCredits}/year</p>
                <p><strong>DG ROI:</strong> ${dgROI} years</p>
                <p><strong>ESS ROI:</strong> ${essROI} years</p>
                <p><strong>RECD ROI:</strong> ${recdROI} years</p>
            `;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
