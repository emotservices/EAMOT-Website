<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROI Calculator with Load-Based Recommendations</title>
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
        <h2>ROI Calculator with Load-Based Recommendations</h2>
        <p class="text-muted">Select options and enter details to calculate ROI, carbon credits, and determine the best investment option.</p>
        
        <!-- Input Form -->
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="newDGCost" class="form-label">New DG Cost</label>
                <select id="newDGCost" class="form-select">
                    <option value="703369">58.5 kVA Cummins - ₹703,369</option>
                    <option value="668574">58.5 kVA Mahindra - ₹668,574</option>
                    <option value="1028922">82.5 kVA Cummins - ₹1,028,922</option>
                    <option value="952877">82.5 kVA Mahindra - ₹952,877</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="recdCost" class="form-label">RECD Cost</label>
                <select id="recdCost" class="form-select">
                    <option value="156250">62.5 kVA - ₹156,250</option>
                    <option value="196250">82.5 kVA - ₹196,250</option>
                    <option value="243125">100 kVA - ₹243,125</option>
                    <option value="250000">125 kVA - ₹250,000</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="essCost" class="form-label">ESS Cost</label>
                <select id="essCost" class="form-select">
                    <option value="931250">Su-vastika Static 10KVA/96V (₹931,250)</option>
                    <option value="1126250">Su-vastika UPS 15KVA/360V (3P-1P) (₹1,126,250)</option>
                    <option value="1695000">Su-vastika UPS 15KVA/360V (3P-3P) (₹1,695,000)</option>
                </select>
            </div>
            <div class="col-md-6 mb-3">
                <label for="percentageLoad" class="form-label">Percentage of Load Needed (%)</label>
                <input type="number" id="percentageLoad" class="form-control" placeholder="Enter percentage load (e.g., 75)">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="dailyUsage" class="form-label">Daily Usage (hours)</label>
                <input type="number" id="dailyUsage" class="form-control" placeholder="Enter daily usage in hours" value="1.5">
            </div>
            <div class="col-md-6 mb-3">
                <label for="dieselPrice" class="form-label">Diesel Price (₹/L)</label>
                <input type="number" id="dieselPrice" class="form-control" placeholder="Enter diesel price" value="90.85">
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
            const newDGCost = parseFloat(document.getElementById('newDGCost').value);
            const recdCost = parseFloat(document.getElementById('recdCost').value);
            const essCost = parseFloat(document.getElementById('essCost').value);
            const percentageLoad = parseFloat(document.getElementById('percentageLoad').value) / 100;
            const dailyUsage = parseFloat(document.getElementById('dailyUsage').value);
            const dieselPrice = parseFloat(document.getElementById('dieselPrice').value);

            // Constants
            const dgRatedLoad = 62.5; // Assume 62.5 kVA as the default rated DG capacity
            const workingDays = 22; // Assumed working days per month
            const monthlyUsage = dailyUsage * workingDays;
            const annualUsage = monthlyUsage * 12;

            // Calculate actual load based on percentage
            const actualLoad = dgRatedLoad * percentageLoad;

            // Fuel consumption per hour at 100% load (assumed linear)
            const fuelConsumptionAtFullLoad = 6.5; // L/hour at 100% load
            const fuelConsumption = fuelConsumptionAtFullLoad * percentageLoad; // Scaled for actual load

            // Fuel costs and carbon credits
            const annualFuelCost = annualUsage * fuelConsumption * dieselPrice;
            const carbonSaved = (annualUsage * (fuelConsumptionAtFullLoad - fuelConsumption)) * 2.68; // in kg CO₂
            const carbonCredits = (carbonSaved / 1000) * 3000 * 5; // Convert kg to tons, multiply by ₹3000/ton for 5 years

            // Total costs
            const totalFuelCost5Years = annualFuelCost * 5;
            const amcCosts = 41071 * 4 + 51071; // AMC with R&M for DG (including battery Year 3)
            const totalOperatingCostDG = newDGCost + totalFuelCost5Years + amcCosts;
            const totalOperatingCostESS = essCost + (20000 * 5); // ESS maintenance cost for 5 years

            // ROI Calculations
            const dgROI = totalOperatingCostDG / (annualFuelCost + carbonCredits);
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
                <p><strong>Carbon Saved Over 5 Years:</strong> ${carbonSaved.toFixed(2)} kg CO₂</p>
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
