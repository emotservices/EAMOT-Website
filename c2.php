<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROI Calculator for DG, RECD, and ESS</title>
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
        <h2>ROI Calculator for DG, RECD, and ESS</h2>
        <p class="text-muted">Enter branch details to calculate ROI and determine the best option.</p>
        
        <!-- Input Form -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="dailyUsage" class="form-label">Daily Usage (hours)</label>
                <input type="number" id="dailyUsage" class="form-control" placeholder="Enter daily usage in hours" value="1.5">
            </div>
            <div class="col-md-6 mb-3">
                <label for="fuelConsumption" class="form-label">Fuel Consumption (L/hour)</label>
                <input type="number" id="fuelConsumption" class="form-control" placeholder="Enter fuel consumption" value="6.5">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="dieselPrice" class="form-label">Diesel Price (₹/L)</label>
                <input type="number" id="dieselPrice" class="form-control" placeholder="Enter diesel price" value="90.85">
            </div>
            <div class="col-md-6 mb-3">
                <label for="workingDays" class="form-label">Working Days/Month</label>
                <input type="number" id="workingDays" class="form-control" placeholder="Enter working days" value="22">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="dgCost" class="form-label">New DG Cost (₹)</label>
                <input type="number" id="dgCost" class="form-control" placeholder="Enter cost of new DG" value="668574">
            </div>
            <div class="col-md-6 mb-3">
                <label for="essCost" class="form-label">ESS Cost (₹)</label>
                <input type="number" id="essCost" class="form-control" placeholder="Enter cost of ESS" value="1356000">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="recdCost" class="form-label">RECD Cost (₹)</label>
                <input type="number" id="recdCost" class="form-control" placeholder="Enter cost of RECD" value="156250">
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
            // Inputs
            const dailyUsage = parseFloat(document.getElementById('dailyUsage').value);
            const fuelConsumption = parseFloat(document.getElementById('fuelConsumption').value);
            const dieselPrice = parseFloat(document.getElementById('dieselPrice').value);
            const workingDays = parseFloat(document.getElementById('workingDays').value);
            const dgCost = parseFloat(document.getElementById('dgCost').value);
            const essCost = parseFloat(document.getElementById('essCost').value);
            const recdCost = parseFloat(document.getElementById('recdCost').value);

            // Calculations
            const monthlyUsage = dailyUsage * workingDays;
            const annualUsage = monthlyUsage * 12;
            const annualFuelCost = annualUsage * fuelConsumption * dieselPrice;

            const totalFuelCost5Years = annualFuelCost * 5;
            const amcCosts = 41071 * 4 + 51071; // AMC with R&M (including battery in Year 3)

            const totalOperatingCostDG = totalFuelCost5Years + amcCosts;
            const totalOperatingCostESS = essCost + (20000 * 5); // Fixed maintenance cost for ESS

            const carbonCredits = (annualUsage * fuelConsumption * 2.68 / 1000) * 3000 * 5; // 5 years carbon credits

            // ROI Calculations
            const dgROI = (dgCost + totalOperatingCostDG) / (annualFuelCost + carbonCredits);
            const essROI = totalOperatingCostESS / (annualFuelCost * 0.2 + carbonCredits); // ESS saves 20% fuel
            const recdROI = recdCost / carbonCredits;

            // Best Option
            let bestOption;
            if (dgROI < essROI && dgROI < recdROI) bestOption = "New DG";
            else if (essROI < dgROI && essROI < recdROI) bestOption = "ESS";
            else bestOption = "RECD";

            // Populate output
            document.getElementById('output').innerHTML = `
                <p><strong>Total Operating Cost for DG (5 years):</strong> ₹${totalOperatingCostDG.toFixed(2)}</p>
                <p><strong>Total Operating Cost for ESS (5 years):</strong> ₹${totalOperatingCostESS.toFixed(2)}</p>
                <p><strong>Carbon Credits for 5 Years:</strong> ₹${carbonCredits.toFixed(2)}</p>
                <p><strong>ROI for DG:</strong> ${dgROI.toFixed(2)} years</p>
                <p><strong>ROI for ESS:</strong> ${essROI.toFixed(2)} years</p>
                <p><strong>ROI for RECD:</strong> ${recdROI.toFixed(2)} years</p>
                <p><strong>Best Option:</strong> ${bestOption}</p>
            `;
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
