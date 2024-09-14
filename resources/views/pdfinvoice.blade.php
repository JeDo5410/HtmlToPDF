<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        @page {
            margin: 100px 25px;
        }
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            text-align: center;
            line-height: 35px;
            font-size: 12px;
        }
        .footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            text-align: center;
            line-height: 35px;
            font-size: 12px;
        }
        .footer .page-number:after {
            content: counter(page);
        }
        .content {
            margin-top: 70px;
            margin-bottom: 50px;
        }
        h1 { color: #1a5f7a; }
        h2 { color: #1a5f7a; border-bottom: 1px solid #1a5f7a; padding-bottom: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
<div class="header">    
        {{ $title }} - {{ $company }}
    </div>

    <div class="footer">
        Page <span class="page-number"></span>
    </div>

    <div class="content">
        <h1>{{ $title }}</h1>
        <p>Prepared for {{ $company }}</p>
        <p>Date: {{ $date }}</p>

        <h2>Contents</h2>
        <ul>
            @foreach($contents as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

    <h2>Self-Service Digitalization -- Executive Brief</h2>
    <p>{{ $executiveBrief }}</p>

    <h2>Digital Acceleration Index (IMDA-BCG)</h2>
    <p>{{ $digitalAccelerationIndex }}</p>

    <h2>Holistic Digitalization Goals</h2>
    <ul>
        @foreach($digitalizationGoals as $goal)
            <li>{{ $goal }}</li>
        @endforeach
    </ul>

    <h2>Training-Led Self Service Digitalization with CLaaS®</h2>
    <p>{{ $claasDescription }}</p>

    <h2>Digitalization Funding from SkillsFuture & Workforce SG</h2>
    <p>{{ $fundingInfo }}</p>

    <h2>Company Profile -- {{ $company }}</h2>
    <p>{{ $companyProfile }}</p>

    <h2>Digital Acceleration Assessment</h2>
    <p>{{ $digitalAccelerationAssessment }}</p>

    <h2>Digitalization Goals & Strategies</h2>
    <ul>
        @foreach($goalsAndStrategies as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>

    <h2>Digital Technology Needs</h2>
    <ul>
        @foreach($technologyNeeds as $need)
            <li>{{ $need }}</li>
        @endforeach
    </ul>

    <h2>Digital Skilling Needs</h2>
    @foreach($skillingNeeds as $function => $skills)
        <h3>{{ $function }}</h3>
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    @endforeach

    <h2>Digital Capabilities Needs</h2>
    @foreach($capabilitiesNeeds as $function => $capabilities)
        <h3>{{ $function }}</h3>
        <ul>
            @foreach($capabilities as $capability)
                <li>{{ $capability }}</li>
            @endforeach
        </ul>
    @endforeach

    <h2>Digital Skilling Plan</h2>
    <table>
        <tr>
            <th>Digital Skilling</th>
            <th>Hours</th>
            <th>Description</th>
        </tr>
        @foreach($skillingPlan as $skill)
            <tr>
                <td>{{ $skill['name'] }}</td>
                <td>{{ $skill['hours'] }}</td>
                <td>{{ $skill['description'] }}</td>
            </tr>
        @endforeach
    </table>

    <h2>Digital Capabilities Project Plan</h2>
    <table>
        <tr>
            <th>Digital Capabilities</th>
            <th>Hours</th>
            <th>Description</th>
        </tr>
        @foreach($capabilitiesProject as $project)
            <tr>
                <td>{{ $project['name'] }}</td>
                <td>{{ $project['hours'] }}</td>
                <td>{{ $project['description'] }}</td>
            </tr>
        @endforeach
    </table>

    <h2>Digitalization Pricing & Funding Plan</h2>
    <table>
        <tr>
            <th>Business Function</th>
            <th>Digital Skilling</th>
            <th>Total Number of Pax Per Course</th>
            <th>Course Cost Per Pax</th>
            <th>Total Cost Per Course</th>
        </tr>
        @foreach($pricingPlan as $item)
            <tr>
                <td>{{ $item['function'] }}</td>
                <td>{{ $item['skilling'] }}</td>
                <td>{{ $item['pax'] }}</td>
                <td>{{ $item['costPerPax'] }}</td>
                <td>{{ $item['totalCost'] }}</td>
            </tr>
        @endforeach
    </table>

    <h3>Funding Support from SSG and WSG</h3>
    <p>{{ $fundingSupport }}</p>
</body>
</html>